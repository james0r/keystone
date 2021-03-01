<?php
/**
* THIS CLASS HANDLES DYNAMIC CSS PRIMARILY FOR MODULES
*/

class Keystone_Dynamic_Scripts {
  private static $scriptsLoaded;

  public function __construct() {
    self::$scriptsLoaded = array();
    add_filter('render_dynamic_scripts', array($this, 'filterRenderDynamicScripts'));
  }

  public function filterRenderDynamicScripts($script_deps = array()) {
    foreach ($script_deps as $dep) {
      switch ($dep) {
          case 'jquery-js':
              echo $this->add_script($dep, get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js');
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
