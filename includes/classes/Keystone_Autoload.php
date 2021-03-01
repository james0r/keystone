<?php
/**
 * Autoloader for Keystone classes.
 * All files in /includes/classes/ with a Keystone_ prefix will be autoloaded.
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * The Autoloader class for Keystone.
 */
class Keystone_Autoload {

	private static $class_map;

	public function __construct() {

		// Register our autoloader.
		spl_autoload_register( [ $this, 'include_class_file' ] );
	}


	protected function get_path( $class_name ) {

		// If the class exists in our hardcoded array of classes
		// then get the path and return it immediately.
		// if ( ! self::$class_map ) {
		// 	self::$class_map = $this->get_class_map();
		// }
		if ( isset( self::$class_map[ $class_name ] ) ) {
			include_once self::$class_map[ $class_name ];
			return;
		}

		$template_dir_path = Keystone_Core::$template_dir_path;

    $paths = [];
    
    // Collect all class files with our themes prefix
		if ( 0 === stripos( $class_name, 'Keystone_' ) ) {

			$filename = $class_name . '.php';

			$paths[] = $template_dir_path . '/includes/classes/' . $filename;

			foreach ( $paths as $path ) {
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					return $path;
				}
			}
		}
		return false;

	}

	/**
	 * Get the path & include the file for the class.
	 */
	public function include_class_file( $class_name ) {
		$path = $this->get_path( $class_name );

		// Include the path.
		if ( $path ) {
			include_once $path;
		}
	}

	/**
	 * Get a class-map for some standard classes.
	 */
	// public function get_class_map() {
	// 	$template_dir_path = Keystone_Core::$template_dir_path;
	// 	return [
  //     'Keystone_CMB2'    => $template_dir_path . '/includes/classes/Keystone_CMB2.php',
  //     'Keystone_Modules' => $template_dir_path . '/includes/classes/Keystone_Modules.php',
  //     'Keystone_Options' => $template_dir_path . '/includes/classes/Keystone_Options.php'
	// 	];
	// }
}
