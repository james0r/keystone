<?php
/**
 * Handles image logic for the Keystone theme
 */

class Keystone_Images {
    public function __construct() {
        // Image sizes are registered in the Keystone_Images class

        add_filter('render_image_template', [$this, 'filter_render_image_template']);
        add_filter('render_title_image', [$this, 'filter_render_title_image']);
    }

    public function filter_render_image_template($value, $alt = 'decorative image') {
        $is_url = Keystone_Helpers::is_url($value);

        if ($is_url) {
            echo sprintf('<img src="%s" alt="%s">', $value, $alt);
        } else {
            echo wp_get_attachment_image($value);
        }
    }

    public function filter_render_title_image($value, $alt = 'decorative image') {
        $value = $value ? $value : Keystone::$template_dir_url . '/assets/images/title-icon.png';

        $this->filter_render_image_template($value, $alt);
    }

    public function keystone_get_attachment_image() {
        $args = func_get_args();
        return wp_get_attachment_image(...$args);
    }

    public function keystone_get_attachment_image_url() {
        $args = func_get_args();
        return wp_get_attachment_image_url(...$args);
    }

    public function keystone_add_image_to_media_library($image_url) {
        $upload_dir = wp_upload_dir();

        $image_data = file_get_contents($image_url);

        $filename = basename($image_url);

        if (wp_mkdir_p($upload_dir['path'])) {
            $file = $upload_dir['path'] . '/' . $filename;
        } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
        }

        file_put_contents($file, $image_data);

        $wp_filetype = wp_check_filetype($filename, null);

        $attachment = [
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name($filename),
            'post_content'   => '',
            'post_status'    => 'inherit'
        ];

        $attach_id = wp_insert_attachment($attachment, $file);
        require_once ABSPATH . 'wp-admin/includes/image.php';
        $attach_data = wp_generate_attachment_metadata($attach_id, $file);
        wp_update_attachment_metadata($attach_id, $attach_data);
        return $attach_id;
    }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
