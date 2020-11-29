<?php
/**
* THIS CLASS HANDLES DYNAMIC CSS PRIMARILY FOR MODULES
*/

class Keystone_Dynamic_CSS {
    public function __construct() {
        add_filter('render_dynamic_css', [$this, 'filter_render_dynamic_css']);
    }

    public function filter_render_dynamic_css($style_deps = []) {
        foreach ($style_deps as $dep) {
            switch ($dep) {
          // If dependency handle is prefixed with module- then import the corresponding css file
          case (preg_match('/module-*/', $dep) ? true : false):
            echo $this->add_inline_stylesheet($dep.'-css', get_stylesheet_directory_uri() . '/assets/css/'.$dep.'.css');
            break;
          case 'twenty-twenty':
              echo $this->add_inline_stylesheet('twenty-twenty-css', get_stylesheet_directory_uri() . '/assets/css/twenty-twenty.css');
            break;
          case 'slick':
            echo $this->add_inline_stylesheet('slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css');
            break;
          case 'slick-theme':
            echo $this->add_inline_stylesheet('slick-theme-css', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
            break;
          case 'swiper-bundle':
            echo $this->add_inline_stylesheet('swiper-bundle-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.css');
            break;
          case 'slick-lightbox':
            echo $this->add_inline_stylesheet('slick-lightbox-css', get_stylesheet_directory_uri() . '/assets/css/slick-lightbox.css');
            break;
          default:
          echo '<!-- A style dependency failed to load -->';
        }
        }
    }

    private function add_inline_stylesheet($handle, $href) {
        $html = <<<EOT
<link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
EOT;
        return $html;
    }
}
