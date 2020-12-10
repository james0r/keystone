<?php
/**
* THIS CLASS HANDLES DYNAMIC CSS PRIMARILY FOR MODULES
*/

class Keystone_Dynamic_Scripts {
    private static $scriptsLoaded;

    public function __construct() {
      self::$scriptsLoaded = array();
        add_filter('render_dynamic_scripts', [$this, 'filterRenderDynamicScripts']);
    }

    public function filterRenderDynamicScripts($script_deps = []) {
        foreach ($script_deps as $dep) {
            switch ($dep) {
          case 'twenty-twenty':
              echo $this->add_script('twenty-twenty', get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js');
            break;
          case 'event-move':
            echo  $this->add_script('event-move', get_template_directory_uri() . '/assets/js/jquery.event.move.js');
            break;
          case 'slick':
            echo  $this->add_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js');
            break;
          case 'swiper-bundle':
            echo  $this->add_script('slick-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js');
            break;
          case 'slick-lightbox':
            echo  $this->add_script('slick-js', get_template_directory_uri() . '/assets/js/slick-lightbox.min.js');
            break;
          case 'countup':
            echo  $this->add_script('slick-js', get_template_directory_uri() . '/assets/js/countUp.min.js');
            break;
          default:
          return false;
        }
        }
    }

    public function add_script($handle, $href) {
        if (!in_array($handle, self::$scriptsLoaded)) {
            array_push(self::$scriptsLoaded, $handle);
            $html = <<<EOT
<script src="$href" id="dynamic-script-$handle"></script>
EOT;
            return $html;
        } else {
            $html = <<<EOT
<!-- A script has been requested but is already loaded in the document. -->
EOT;
            return $html;
        }
    }
}
