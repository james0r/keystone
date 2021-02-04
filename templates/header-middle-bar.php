<div id="header-middle-bar" class="header-middle-bar">
  <div class="header-middle-bar-inner">
    <div class="flex">
      <div class="logo-wrapper flex-item">
        <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_desktop_logo'))) : ?>
            <img src="<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_desktop_logo'); ?>" alt="<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_name'); ?> Logo">
        <?php else : ?>
            <img src="<?php echo Keystone::$template_dir_url . '/assets/images/no-logo-found.png' ?>" alt="Company Logo Image Missing">
        <?php endif; ?>
      </div>
      <ul class="widgets flex-item">
          <li class="widget widget-1">
            <?php $widget_1_meta = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_1')[0] ?>
            <?php error_log( print_r($widget_1_meta, TRUE) ); ?>
            <div class="flex">
              <div class="icon-wrapper flex-item">
                <?php apply_filters('keystone_render_icon', $widget_1_meta['icon']) ?>
              </div>
              <div class="widget-text-box">
                <div class="widget-cta-text">
                  <?php echo $widget_1_meta['cta-text'] ?>
                </div>
                <div class="widget-cta-bold-text">
                  <strong>
                    <?php echo $widget_1_meta['cta-bold-text'] ?>
                  </strong>
                </div>
              </div>
            </div>
          </li>
          <li class="widget widget-2">
            <?php $widget_2_meta = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_2')[0] ?>
            <div class="flex">
              <div class="icon-wrapper flex-item">
                <?php apply_filters('keystone_render_icon', $widget_2_meta['icon']) ?>
              </div>
              <div class="widget-text-box">
                <div class="widget-cta-text">
                  <?php echo $widget_2_meta['cta-text'] ?>
                </div>
                <div class="widget-cta-bold-text">
                  <strong>
                    <?php echo $widget_2_meta['cta-bold-text'] ?>
                  </strong>
                </div>
              </div>
            </div>
          </li>
          <li class="widget widget-3">
            <?php $widget_3_meta = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_3')[0] ?>
            <div class="flex">
              <div class="icon-wrapper flex-item">
                <?php apply_filters('keystone_render_icon', $widget_3_meta['icon']) ?>
              </div>
              <div class="widget-text-box">
                <div class="widget-cta-text">
                  <?php echo $widget_3_meta['cta-text'] ?>
                </div>
                <div class="widget-cta-bold-text">
                  <strong>
                    <?php echo $widget_3_meta['cta-bold-text'] ?>
                  </strong>
                </div>
              </div>
            </div>
          </li>
      </ul>
    </div>
  </div>
</div>
