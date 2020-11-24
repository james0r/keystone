<?php
/**
* THIS CLASS HANDLES DYNAMIC CSS PRIMARILY FOR MODULES
*/

class Keystone_Dynamic_Scripts {
    public function __construct() {
      add_filter('render_dynamic_scripts', [$this, 'filter_render_dynamic_scripts']);
    }

    public function filter_render_dynamic_scripts($script_deps = []) {

      foreach($script_deps as $dep) {
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
          default:
          return false;
        }
      }

    }

    private function add_script($handle, $href) {
  
      $html = <<<EOT
      <script src="$href" id="dynamic-script-$handle"></script>
EOT;
      return $html;
    }
    
}