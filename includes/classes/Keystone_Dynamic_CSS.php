<?php
/**
* THIS CLASS HANDLES DYNAMIC CSS PRIMARILY FOR MODULES
*/

class Keystone_Dynamic_CSS {
    public function __construct() {
      add_filter('render_dynamic_css', [$this, 'filter_render_dynamic_css']);
    }

    public function filter_render_dynamic_css($style_deps = []) {

      foreach($style_deps as $dep) {
        switch ($dep) {
          case '1':
              return $this->add_inline_stylesheet('first-stylesheet', get_stylesheet_directory_uri() . '/assets/css/1.css');
            break;
          case '2':
            return $this->add_inline_stylesheet('second-stylesheet', get_stylesheet_directory_uri() . '/assets/css/2.css');
          break;
          default:
          return false;
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
