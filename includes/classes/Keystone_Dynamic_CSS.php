<?php
/**
* This class handles progressive stylesheet importing
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
            case (preg_match('/module-*/', substr($dep, 0, -4)) ? true : false):
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/' . substr($dep, 0, -4) . '.css');
              break;
            case 'twenty-twenty-css':
                echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/twenty-twenty.css');
              break;
            case 'slick-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/slick.css');
              break;
            case 'slick-theme-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
              break;
            case 'swiper-bundle-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.css');
              break;
            case 'slick-lightbox-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/slick-lightbox.css');
              break;
            case 'lightbox2-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/lightbox.min.css');
              break;
            case 'flaticon-dental-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/flaticon-set-dental.css');
              break;
            case 'flaticon-medical-css':
              echo $this->addInlineStylesheet($dep, get_stylesheet_directory_uri() . '/assets/css/flaticon-set-medical.css');
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
