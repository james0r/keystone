<?php
/**
 * @package      CMB2\Field_Font
 * @author       Ruben Garcia <rubengcdev@gmail.com>
 * @copyright    Copyright (c) Ruben Garcia
 *
 * Plugin Name: CMB2 Field Type: Font
 * Plugin URI: https://github.com/rubengc/cmb2-field-font
 * GitHub Plugin URI: https://github.com/rubengc/cmb2-field-font
 * Description: CMB2 field type to allow pick a Google font.
 * Version: 1.0.0
 * Author: Ruben Garcia <rubengcdev@gmail.com>
 * Author URI: https://gamipress.com
 * License: GPLv2+
 */


// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

if( !class_exists( 'CMB2_Field_Font' ) ) {
    /**
     * Class CMB2_Field_Font
     */
    class CMB2_Field_Font {

        /**
         * Current version number
         */
        const VERSION = '1.0.0';

        /**
         * Initialize the plugin by hooking into CMB2
         */
        public function __construct() {
            add_action( 'admin_enqueue_scripts', array( $this, 'setup_admin_scripts' ) );

            add_action( 'cmb2_render_font', array( $this, 'render' ), 10, 5 );
        }

        /**
         * Render field
         */
        public function render( $field, $value, $object_id, $object_type, $field_type ) {

            // Parse args
            $attrs = $field_type->parse_args( 'select', array(
                'class'             => 'cmb2_select',
                'name'              => $field_type->_name(),
                'id'                => $field_type->_id(),
                'data-selected'     => $value,
                'data-placeholder'  => ( $field->args( 'placeholder' ) ? $field->args( 'placeholder' ) : '' )
            ) );

            echo sprintf( '<select%s></select>%s',
                $field_type->concat_attrs( $attrs ),
                $field_type->_desc( true )
            );
        }

        /**
         * Enqueue scripts and styles
         */
        public function setup_admin_scripts() {
          
        }

    }

    $cmb2_field_font = new CMB2_Field_Font();
}
