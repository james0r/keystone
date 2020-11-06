<?php
define( 'KEYSTONE_THEME_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );
define( 'THEME_ASSETS', get_stylesheet_directory_uri() . '/assets' );
define('THEME_DIRECTORY', KEYSTONE_THEME_DIR);

/*----------------------------------------------------
KEYSTONE CORE OOP ADDITIONS
-----------------------------------------------------*/

require get_template_directory() . '/includes/keystone-core.php';

$keystone = new Keystone;

$keystone->addNavMenus([
    'menu-1' => 'Primary',
]);


/*----------------------------------------------------
THEME INCLUDES
-----------------------------------------------------*/

$keystone->requireOnce('includes/libs/cmb2/init.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb2-radio-image.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb2-switch-button.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb-field-font/cmb2-field-font.php')
->requireOnce('/includes/custom-modules.php');

/*----------------------------------------------------
CMB2 FUNCTIONS
-----------------------------------------------------*/

function cmb2_meta_init() {

  wp_register_script( 'cmb-font-webfont', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/webfont.js', array( 'jquery' ), 1, true );
  wp_enqueue_script( 'cmb-font-webfont' );
  
  // https://select2.org/
  wp_register_script( 'cmb-font-select2', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/select2.full.min.js', array( 'jquery' ), 1, true );
  wp_enqueue_script( 'cmb-font-select2' );
  
  wp_enqueue_style( 'cmb-font-select2', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/css/select2.min.css', array(), 1 );
  wp_enqueue_style( 'cmb-font-select2' );
  
  // https://github.com/saadqbal/HiGoogleFonts
  // Note: HiGoogleFonts has been modified to add search box, custom placeholder and use select2 default theme (instead of the horrible classic theme)
  wp_register_script( 'cmb-font-higooglefonts', get_template_directory_uri(). '/includes/libs/CMB2/plugins/cmb-field-font/js/higooglefonts.js', array( 'jquery', 'cmb-font-webfont', 'cmb-font-select2' ), 1, true );
  wp_enqueue_script( 'cmb-font-higooglefonts' );
  
  wp_register_script( 'cmb-field-font', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/font.js', array( 'jquery' ), 1, true );
  wp_enqueue_script( 'cmb-field-font' );
  
  wp_enqueue_style( 'cmb-field-font', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/css/font.css', array(), 1 );
  wp_enqueue_style( 'cmb-field-font' );



  require_once KEYSTONE_THEME_DIR . '/includes/meta/meta-standard.php';
  require_once KEYSTONE_THEME_DIR . '/includes/meta/meta-modules.php';
  require_once KEYSTONE_THEME_DIR . '/includes/theme-options.php';
}

add_action( 'cmb2_admin_init', 'cmb2_meta_init' );

/*----------------------------------------------------
DASHBOARD WIDGETS
-----------------------------------------------------*/

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Keystone Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Welcome to your new site! Need help? Contact a developer <a href="mailto:james.auble@gmail.com">here</a>. For WordPress Tutorials visit: <a href="https://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}

/*----------------------------------------------------
ENQUEUE SCRIPTS
-----------------------------------------------------*/

$keystone->addStyle('style', get_template_directory_uri() . '/assets/main.css')
->addStyle('font-awesome', get_template_directory_uri() . '/assets/all.min.css')
->addStyle('theme-styles', get_template_directory_uri() . '/style.css')
->addScript('header_js', get_template_directory_uri() . '/assets/header-bundle.js', null, 1.0, false)
->addScript('footer_js', get_template_directory_uri() . '/assets/footer-bundle.js', null, 1.0, true);

$keystone->addAdminStyle('admin-styles', get_template_directory_uri() . '/assets/admin.css')
->addAdminScript('jquery-ui', get_template_directory_uri() . '/assets/jquery-ui.min.js')
->addAdminScript('admin-scripts', get_template_directory_uri() . '/assets/admin.js', null, 1.0, true)
->addAdminScript('cmb2-conditional-logic', get_template_directory_uri() . '/assets/cmb2-conditional-logic.js', null, 1.0, true);

/*----------------------------------------------------
THEME SUPPORTS
-----------------------------------------------------*/

$keystone->addSupport('post-thumbnails')
->addSupport('automatic-feed-links')
->addSupport('post-thumbnails')
->addSupport('title-tag')
->addSupport('menus')
->addSupport('html5', ['gallery'])
->addSupport('align-wide')
->addSupport('editor-styles')
->addSupport('wp-block-styles')
->addSupport('dark-editor-style')
->addSupport('responsive-embed');

/*----------------------------------------------------
REGISTER IMAGE SIZES
-----------------------------------------------------*/

$keystone->addImageSize('full-width', 1600)
->addImageSize('small-thumbnail', 720, 720, true)
->addImageSize('square-thumbnail', 80, 80, true)
->addImageSize('banner-image', 1024, 1024, true);

// ================================================ keystone THEME DEFAULTS

function keystone_theme_setup() {
  
  // ================================================ LIBRARIES & INCLUDES

  if ( file_exists(  KEYSTONE_THEME_DIR . 'includes/post-types.php' ) ) {
    require_once  KEYSTONE_THEME_DIR . 'includes/post-types.php';
  }
  if ( file_exists(  KEYSTONE_THEME_DIR . 'includes/shortcodes.php' ) ) {
    require_once  KEYSTONE_THEME_DIR . 'includes/shortcodes.php';
  }
  if ( file_exists(  KEYSTONE_THEME_DIR . 'includes/taxonomies.php' ) ) {
    require_once  KEYSTONE_THEME_DIR . 'includes/taxonomies.php';
  }
  if ( file_exists(  KEYSTONE_THEME_DIR . '/includes/helpers.php' ) ) {
    require_once  KEYSTONE_THEME_DIR . 'includes/helpers.php';
  }
  
  function condensed_body_class($classes) {
      global $post;
   
      // add a class for the name of the page - later might want to remove the auto generated pageid class which isn't very useful
      if( is_page()) {
          $pn = $post->post_name;
          $classes[] = "page_".$pn;
      }
   
      // add a class for the parent page name
      if ( is_page() && $post->post_parent ) {
          $post_parent = get_post($post->post_parent);
          $parentSlug = $post_parent->post_name;
          $classes[] = "parent_".$parentSlug;
      }
   
      // add class for the name of the custom template used (if any)
      $temp = get_page_template();
      if ( $temp != null ) {
          $path = pathinfo($temp);
          $tmp = $path['filename'] . "." . $path['extension'];
          $tn= str_replace(".php", "", $tmp);
          $classes[] = "template_".$tn;
      }

      wp_reset_postdata();
   
      return $classes;
   
  }
  
  add_filter( 'body_class', 'condensed_body_class');

  // Set classes for pagination links

  function next_posts_link_attributes() {
    return 'class="next-button"';
  }
  function prev_posts_link_attributes() {
    return 'class="prev-button"';
  }

  add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
  add_filter('previous_posts_link_attributes', 'prev_posts_link_attributes');

  /**
 * Hide editor on specific pages.
 *
 */
  add_action( 'admin_init', 'hide_editor' );

  function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    // Hide the editor on the page titled 'Homepage'
    $homepgname = get_the_title($post_id);
    if($homepgname == 'Homepage'){ 
      remove_post_type_support('page', 'editor');
    }

    // Hide the editor on a page with a specific page template
    // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    if($template_file == 'templates/dynamic-sections.php'){ // the filename of the page template
      remove_post_type_support('page', 'editor');
    }
  }

  // Disables Gutenburg
  add_filter('use_block_editor_for_post', '__return_false', 5);

  // Remove comments page in menu
  add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
  });

  // Remove comments links from admin bar
  add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
  });

  add_action( 'init', 'cp_change_post_object' );
  // Change dashboard Posts to Blog
  function cp_change_post_object() {
      $get_post_type = get_post_type_object('post');
      $labels = $get_post_type->labels;
          $labels->name = 'Blog';
          $labels->singular_name = 'Blog';
          $labels->add_new = 'Add Article';
          $labels->add_new_item = 'Add New';
          $labels->edit_item = 'Edit Article';
          $labels->new_item = 'New Article';
          $labels->view_item = 'View Article';
          $labels->search_items = 'Search Blog';
          $labels->not_found = 'No Articles found';
          $labels->not_found_in_trash = 'No Articles found in Trash';
          $labels->all_items = 'All Articles';
          $labels->menu_name = 'Blog';
          $labels->name_admin_bar = 'Blog';
          $get_post_type->menu_icon = 'dashicons-welcome-write-blog';
  }

  //Remove Comments Bubble from WP Admin Top Bar
  function remove_comment_bubble() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
  }
  add_action( 'wp_before_admin_bar_render', 'remove_comment_bubble' );

  //Put version numbers for keystone and active design style in wp admin footer
  function change_admin_footer(){
    $theme_data = wp_get_theme();
    echo $theme_data->get( 'Name' ).' v '.$theme_data->get( 'Version' );
  }
  add_filter('admin_footer_text', 'change_admin_footer'); 
  function change_footer_version() {
    $theme_data = wp_get_theme();
    if($theme_data->parent()){
      echo $theme_data->parent()->get( 'Name' ).' v '.$theme_data->parent()->get( 'Version' );
    }
  }
  add_filter( 'update_footer', 'change_footer_version', 9999);

  //Remove Default Dashboard Widgets
  function disable_default_dashboard_widgets() {
    remove_meta_box('dashboard_right_now', 'dashboard', 'core');
    remove_meta_box('dashboard_site_health', 'dashboard', 'core');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
    remove_meta_box('dashboard_plugins', 'dashboard', 'core');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
    remove_meta_box('dashboard_primary', 'dashboard', 'core');
    remove_meta_box('dashboard_secondary', 'dashboard', 'core');
  }
  add_action('admin_menu', 'disable_default_dashboard_widgets');

  add_action('wp_head', 'head_meta_additions');
function head_meta_additions() {

  if( is_single() || is_page() ) {

    $post_id = get_queried_object_id();

    $url = get_permalink($post_id);

    if (!empty(get_the_meta('cmb_seo_title_override'))) {
      $title = get_the_meta('cmb_seo_title_override');
    } else {
      $title = get_the_title($post_id);
    }

    $site_name = get_bloginfo('name');

    if (!empty(get_the_meta('cmb_seo_description_override'))) {
      $description = get_the_meta('cmb_seo_description_override');
    } else {
      $description = wp_trim_words( get_post_field('post_content', $post_id), 25 );
    }

    if (!empty(get_the_meta('cmb_seo_image_override'))) {
      $image = get_the_meta('cmb_seo_image_override');
    } else {
      $image = get_the_post_thumbnail_url($post_id);
      if (!empty($image) || $image == '' || $image == null) {
        $image = cmb_get_option('cmb_desktop_logo');
      }
    }


    $locale = get_locale();

    echo '<meta property="og:locale" content="' . esc_attr($locale) . '" />';
    echo '<meta property="og:type" content="article" />';
    echo '<meta property="og:title" content="' . esc_attr($title) . ' | ' . esc_attr($site_name) . '" />';
    echo '<meta property="og:description" content="' . esc_attr($description) . '" />';
    echo '<meta property="og:url" content="' . esc_url($url) . '" />';
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '" />';

    if($image) echo '<meta property="og:image" content="' . esc_url($image) . '" />';

    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image" />';
    echo '<meta name="twitter:site" content="@francecarlucci" />';
    echo '<meta name="twitter:creator" content="@francecarlucci" />';

    // Page Meta 

    echo '<meta name="description" content="' . esc_attr($description) . '" />';
  }

}
  
}

add_action( 'after_setup_theme', 'keystone_theme_setup' );

 //AUTO GENERATE MODULES TABLE
 function createModulesTable(){
  $sql =
      "CREATE TABLE IF NOT EXISTS modules (
        id int(32) NOT NULL auto_increment ,
        module varchar(100) NOT NULL,
        name varchar(255) NOT NULL,
        page int(32) NOT NULL,
        display_order int(32) NOT NULL,
        PRIMARY KEY  (id)
      )";
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta( $sql );
}

add_action("after_switch_theme", "createModulesTable");

add_action( 'after_switch_theme', 'create_page_on_theme_activation' );

function create_page_on_theme_activation(){

    // Set the title, template, etc
    $new_page_title     = __('Front Page','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'templates/dynamic-sections.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'front-page'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
    // Use a static front page
    $front_page = get_page_by_title( 'Front Page' );
    update_option( 'page_on_front', $front_page->ID );
    update_option( 'show_on_front', 'page' );
}

// Adds a toast in the bottom right corner displaying current template while logged into admin

function display_template_toast() {
	if ( is_super_admin() ) {
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
 
add_action( 'wp_footer', 'display_template_toast' );