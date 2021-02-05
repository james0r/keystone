<?php
  $link_prefix_map = array(
    'email'            => 'mailto:',
    'phone'            => 'tel:',
    'website'          => '',
    'physical-address' => 'http://maps.google.com/?q='
  );
?>

<div id="header-middle-bar" class="header-middle-bar">
  <div class="header-middle-bar-inner">
    <div class="flex">
      <div class="logo-wrapper flex-item">
        <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_logo_wide'))) : ?>
        <img
          src="<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_logo_wide'); ?>"
          alt="<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_name'); ?> Logo">
        <?php else : ?>
        <img
          src="<?php echo Keystone::$template_dir_url . '/assets/images/no-logo-found.png' ?>"
          alt="Company Logo Image Missing">
        <?php endif; ?>
      </div>
      <ul class="widgets flex-item flex">
        <li class="widget widget-1">
          <?php $widget_1_meta = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_1')[0] ?>
          <?php error_log(print_r($widget_1_meta, true)); ?>
          <div class="flex">
            <div class="icon-wrapper flex-item">
              <?php apply_filters('keystone_render_icon', $widget_1_meta['icon'], 'aria-hidden="true"') ?>
            </div>
            <div class="widget-text-box">
              <div class="widget-cta-text">
                <?php echo $widget_1_meta['cta-text'] ?>
              </div>
              <?php if ($widget_1_meta['make-link'] != 'plain-text') : ?>
              <div class="widget-cta-bold-text">
                <a href="<?php echo $link_prefix_map[$widget_1_meta['make-link']] . $widget_1_meta['cta-bold-text'] ?>"
                  <?php if ($widget_3_meta['make-link'] == 'physical-address' || $widget_3_meta == 'website') : ?>target="_blank"
                  rel="noopener"<?php endif; ?>>
                  <strong>
                    <?php echo $widget_1_meta['cta-bold-text'] ?>
                  </strong>
                </a>
              </div>
              <?php else : ?>
              <div class="widget-cta-bold-text">
                <strong>
                  <?php echo $widget_1_meta['cta-bold-text'] ?>
                </strong>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </li>
        <li class="widget widget-2">
          <?php $widget_2_meta = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_2')[0] ?>
          <div class="flex">
            <div class="icon-wrapper flex-item">
              <?php apply_filters('keystone_render_icon', $widget_2_meta['icon'], 'aria-hidden="true"') ?>
            </div>
            <div class="widget-text-box">
              <div class="widget-cta-text">
                <?php echo $widget_2_meta['cta-text'] ?>
              </div>
              <?php if ($widget_2_meta['make-link'] != 'plain-text') : ?>
              <div class="widget-cta-bold-text">
                <a href="<?php echo $link_prefix_map[$widget_2_meta['make-link']] . $widget_2_meta['cta-bold-text'] ?>"
                  <?php if ($widget_3_meta['make-link'] == 'physical-address' || $widget_3_meta == 'website') : ?>target="_blank"
                  rel="noopener"<?php endif; ?>>
                  <strong>
                    <?php echo $widget_2_meta['cta-bold-text'] ?>
                  </strong>
                </a>
              </div>
              <?php else : ?>
              <div class="widget-cta-bold-text">
                <strong>
                  <?php echo $widget_2_meta['cta-bold-text'] ?>
                </strong>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </li>
        <li class="widget widget-3">
          <?php $widget_3_meta = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_3')[0] ?>
          <div class="flex">
            <div class="icon-wrapper flex-item">
              <?php apply_filters('keystone_render_icon', $widget_3_meta['icon'], 'aria-hidden="true"') ?>
            </div>
            <div class="widget-text-box">
              <div class="widget-cta-text">
                <?php echo $widget_3_meta['cta-text'] ?>
              </div>
              <?php if ($widget_3_meta['make-link'] != 'plain-text') : ?>
              <div class="widget-cta-bold-text">
                <a href="<?php echo $link_prefix_map[$widget_3_meta['make-link']] . $widget_3_meta['cta-bold-text'] ?>"
                  <?php if ($widget_3_meta['make-link'] == 'physical-address' || $widget_3_meta == 'website') : ?>target="_blank"
                  rel="noopener"<?php endif; ?>>
                  <strong>
                    <?php echo $widget_3_meta['cta-bold-text'] ?>
                  </strong>
                </a>
              </div>
              <?php else : ?>
              <div class="widget-cta-bold-text">
                <strong>
                  <?php echo $widget_3_meta['cta-bold-text'] ?>
                </strong>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </li>
      </ul>
      <div class="cta-button-wrapper">
        <button class="btn btn-flat btn-primary">
          <?php echo cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_cta')[0]['button-text'] ?>
        </button>
      </div>
      <div class="search-form-wrapper">
        <form role="search" method="get" id="headerSearchForm" class="searchform" action="/">
          <div>
            <label class="sr-only" for="s">Search for:</label>
            <input type="text" value="" name="s" id="s" placeholder="Enter your search" />
            <!-- <input type="submit" id="searchsubmit" value="Search" /> -->
          </div>
        </form>
        <?php apply_filters('keystone_render_icon', 'fas fa-search', 'aria-hidden="true" onclick="document.getElementById(\'headerSearchForm\').submit()"') ?>
      </div>
    </div>
  </div>
</div>