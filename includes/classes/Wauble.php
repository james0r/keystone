<?php

/**
* THIS OBJECT HAS APIS FOR ESSENTIAL THEME SETUP FOR
* FOR ALL WAUBLE BASED THEMES. THIS CLASS SHOUD BE
* EXTENDED BY THE THEMES ACTUAL UNIQUE PARENT CLASS.
*/

class Wauble {
    public static $template_dir_path = '';

    public static $template_dir_url = '';

    public static $stylesheet_dir_path = '';

    public static $stylesheet_dir_url = '';

    public static $scripts_dir_path = '';

    public static $scripts_dir_url = '';

    private function actionAfterSetup($function) {
        add_action('after_setup_theme', function () use ($function) {
            $function();
        });
    }

    private function actionEnqueueScripts($function) {
        add_action('wp_enqueue_scripts', function () use ($function) {
            $function();
        });
    }

    private function actionEnqueueAdminScripts($function) {
        add_action('admin_enqueue_scripts', function () use ($function) {
            $function();
        });
    }

    private function ifFileExists($full_path) {
        if (file_exists($full_path)) {
            return true;
        }
    }

    public function __construct() {
        if ('' === self::$template_dir_path) {
            self::$template_dir_path = wp_normalize_path(get_template_directory());
        }
        if ('' === self::$template_dir_url) {
            self::$template_dir_url = get_template_directory_uri();
        }
        if ('' === self::$stylesheet_dir_path) {
            self::$stylesheet_dir_path = wp_normalize_path(get_stylesheet_directory());
        }
        if ('' === self::$stylesheet_dir_url) {
            self::$stylesheet_dir_url = get_stylesheet_directory_uri();
        }

        // Register support for specific wordpress features
        $this->addSupport('title-tag')
             ->addSupport('custom-logo')
             ->addSupport('post-thumbnails')
             ->addSupport('customize-selective-refresh-widgets')
             ->addSupport('html5', [
                 'search-form',
                 'comment-form',
                 'comment-list',
                 'gallery',
                 'caption'
             ])
            ->addSupport('automatic-feed-links')
            ->addSupport('menus')
            ->addSupport('align-wide')
            ->addSupport('editor-styles')
            ->addSupport('wp-block-styles')
            ->addSupport('dark-editor-style')
            ->addSupport('responsive-embed');

        $this->addCommentScript();

        // Register wordpress image sizes
        $this->addImageSize('full-width', 1600)
            ->addImageSize('small-thumbnail', 720, 720, true)
            ->addImageSize('square-thumbnail', 80, 80, true)
            ->addImageSize('banner-image', 1024, 1024, true);

        // Enqueue critical stylesheets
        $this->addStyle('style', get_template_directory_uri() . '/assets/css/main.css')
              ->addStyle('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css')
              ->addStyle('user-styles', get_template_directory_uri() . '/style.css')
              ->addScript('jquery-3.5.1', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', null, 1.0, false)
              ->addScript('header_js', get_template_directory_uri() . '/assets/js/header-bundle.js', null, 1.0, false)
              ->addScript('knockout', get_template_directory_uri() . '/assets/js/knockout-3.5.1.js', ['jquery-3.5.1'], 1.0, true)
              ->addScript('footer_js', get_template_directory_uri() . '/assets/js/footer-bundle.js', ['jquery-3.5.1'], 1.0, true);

        $this->addAdminStyle('admin-styles', get_template_directory_uri() . '/assets/admin/admin.css')
              ->addAdminScript('jquery-ui', get_template_directory_uri() . '/assets/admin/jquery-ui.min.js')
              ->addAdminScript('admin-scripts', get_template_directory_uri() . '/assets/admin/admin.js', null, 1.0, true);

        $this->addNavMenus([
            'primary-navigation' => 'Primary Navigation',
        ]);

        $this->requireOnce('/includes/helper-functions.php');

        add_action('wp_footer', [$this, 'display_template_toast']);
    }

    // Adds a toast in the bottom right corner displaying current template while logged into admin
    public static function display_template_toast() {
        if (is_super_admin()) {
            global $template;

            $markup = '<div class="wp-template-toast">
						%s
						</div>
						<style>
							.wp-template-toast {
								position: fixed;
								height: 20px;
								width: 150px;
								background: rgba(255,0,0,.5);
								color: white;
								bottom: 0px;
								display: flex;
								justify-content: center;
								font-size: 12px;
								right: 0px;
								border-radius: 5px;
								animation: fadeout 1s 2s forwards;
							}
							@keyframes fadeout {
								from {
									opacity: 1;
								}
								to {
									opacity: 0;
								}
							}
						</style>';

            echo sprintf($markup, basename($template));
        }
    }

    public function requireOnce($path = '', $base = '') {
        if ($base === '') {
            $base = self::$template_dir_path;
        }

        if (strpos($path, '/') != 0) {
            $path = '/' . $path;
        }

        if ($this->ifFileExists($base . $path)) {
            require_once $base . $path;
        } else {
            throw new Exception($path . 'File Not Found');
        }
        return $this; // Return class instance for method chaining
    }

    public function addSupport($feature, $options = null) {
        $this->actionAfterSetup(function () use ($feature, $options) {
            if ($options) {
                add_theme_support($feature, $options);
            } else {
                add_theme_support($feature);
            }
        });
        return $this;
    }

    public function removeSupport($feature) {
        $this->actionAfterSetup(function () use ($feature) {
            remove_theme_support($feature);
        });
        return $this;
    }

    public function loadTextDomain($domain, $path = false) {
        $this->actionAfterSetup(function () use ($domain, $path) {
            load_theme_textdomain($domain, $path);
        });
        return $this;
    }

    public function addImageSize($name, $width = 0, $height = 0, $crop = false) {
        $this->actionAfterSetup(function () use ($name, $width, $height, $crop) {
            add_image_size($name, $width, $height, $crop);
        });
        return $this;
    }

    public function removeImageSize($name) {
        $this->actionAfterSetup(function () use ($name) {
            remove_image_size($name);
        });
        return $this;
    }

    public function addStyle($handle, $src = '', $deps = [], $ver = false, $media = 'all') {
        $this->actionEnqueueScripts(function () use ($handle, $src, $deps, $ver, $media) {
            if (wp_script_is($handle)) {
                return $this;
            } else {
                wp_enqueue_style($handle, $src, $deps, $ver, $media);
            }
        });
        return $this;
    }

    public function addAdminStyle($handle, $src = '', $deps = [], $ver = false, $media = 'all') {
        $this->actionEnqueueAdminScripts(function () use ($handle, $src, $deps, $ver, $in_footer) {
            wp_enqueue_style($handle, $src, $deps, $ver, $media);
        });
        return $this;
    }

    public function addScript($handle, $src = '', $deps = [], $ver = false, $in_footer = false) {
        $this->actionEnqueueScripts(function () use ($handle, $src, $deps, $ver, $in_footer) {
            if (wp_script_is($handle)) {
                return $this;
            } else {
                wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
            }
        });
        return $this;
    }

    public function addAdminScript($handle, $src = '', $deps = [], $ver = false, $in_footer = false) {
        $this->actionEnqueueAdminScripts(function () use ($handle, $src, $deps, $ver, $in_footer) {
            wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
        });
        return $this;
    }

    public function addCommentScript() {
        $this->actionEnqueueScripts(function () {
            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        });
        return $this;
    }

    public function removeStyle($handle) {
        $this->actionEnqueueScripts(function () use ($handle) {
            wp_dequeue_style($handle);
            wp_deregister_style($handle);
        });
        return $this;
    }

    public function removeScript($handle) {
        $this->actionEnqueueScripts(function () use ($handle) {
            wp_dequeue_script($handle);
            wp_deregister_script($handle);
        });
        return $this;
    }

    public function addNavMenus($locations = []) {
        $this->actionAfterSetup(function () use ($locations) {
            register_nav_menus($locations);
        });
        return $this;
    }

    public function addNavMenu($location, $description) {
        $this->actionAfterSetup(function () use ($location, $description) {
            register_nav_menu($location, $description);
        });
        return $this;
    }

    public function removeNavMenu($location) {
        $this->actionAfterSetup(function () use ($location) {
            unregister_nav_menu($location);
        });
        return $this;
    }
}
