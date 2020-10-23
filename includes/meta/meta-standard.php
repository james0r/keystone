<?php

// Post & Page SEO Overrides

$cmb = new_cmb2_box( array(
  'id'            => 'cmb_post_seo_meta',
  'title'         => __( 'SEO META', 'cmb2' ),
  'object_types'  => array( 'page', 'post' ), // Post type
  'context'       => 'normal',
  'priority'      => 'high',
  'show_names'    => true, // Show field names on the left
  // 'cmb_styles' => false, // false to disable the CMB stylesheet
  // 'closed'     => true, // Keep the metabox closed by default
) );

$cmb->add_field( array(
  'name'       => __( 'SEO Title Override (Optional)', 'cmb2' ),
  'desc'       => __( 'If empty, default page title will be used.', 'cmb2' ),
  'id'         => 'cmb_seo_title_override',
  'type'       => 'text'
) );

$cmb->add_field( array(
  'name'       => __( 'SEO Description Override (Optional)', 'cmb2' ),
  'desc'       => __( 'If empty, site-wide SEO description will be used.', 'cmb2' ),
  'id'         => 'cmb_seo_description_override',
  'type'       => 'textarea_small'
) );

$cmb->add_field( array(
  'name'       => __( 'SEO Image Override (Optional)', 'cmb2' ),
  'desc'       => __( 'If empty, featured image will be used. If featured image is empty, site desktop logo from Theme Options will be used.', 'cmb2' ),
  'id'         => 'cmb_seo_image_override',
  'type'       => 'file'
) );