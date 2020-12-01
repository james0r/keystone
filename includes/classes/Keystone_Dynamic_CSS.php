<?php
/**
* THIS CLASS HANDLES DYNAMIC CSS PRIMARILY FOR MODULES
*/

class Keystone_Dynamic_CSS {
    private static $stylesheetsLoaded;

    public function __construct() {

      self::$stylesheetsLoaded = array();
      add_filter('render_dynamic_css', [$this, 'filterRenderDynamicCSS']);
    }

    public function filterRenderDynamicCSS($style_deps = []) {
        foreach ($style_deps as $dep) {
            switch ($dep) {
            // If dependency handle is prefixed with module- then import the corresponding css file
            case (preg_match('/module-*/', $dep) ? true : false):
              echo $this->addInlineStylesheet($dep . '-css', get_stylesheet_directory_uri() . '/assets/css/' . $dep . '.css');
              break;
            case 'twenty-twenty':
                echo $this->addInlineStylesheet('twenty-twenty-css', get_stylesheet_directory_uri() . '/assets/css/twenty-twenty.css');
              break;
            case 'slick':
              echo $this->addInlineStylesheet('slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css');
              break;
            case 'slick-theme':
              echo $this->addInlineStylesheet('slick-theme-css', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
              break;
            case 'swiper-bundle':
              echo $this->addInlineStylesheet('swiper-bundle-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.css');
              break;
            case 'slick-lightbox':
              echo $this->addInlineStylesheet('slick-lightbox-css', get_stylesheet_directory_uri() . '/assets/css/slick-lightbox.css');
              break;
            case 'flaticon-dental-css':
              echo $this->addInlineStylesheet('flaticon-dental-css', get_template_directory_uri() . '/assets/css/flaticon-set-dental.css');
              break;
            default:
            echo '<!-- A style dependency failed to load -->';
            }
        }
    }

    public function addInlineStylesheet($handle, $href) {
        if (!in_array($handle, self::$stylesheetsLoaded)) {
          array_push(self::$stylesheetsLoaded, $handle);
          $html = <<<EOT
<link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
EOT;
            return $html;
        } else {
            $html = <<<EOT
<!-- A stylesheet has been requested but is already loaded in the document. -->
EOT;
          return $html;
        }

        return;
    }
}
