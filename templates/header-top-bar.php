


<div id="header-top-bar" class="header-top-bar">
  <div class="header-top-bar-inner">
    <div class="flex">
      <div class="top-bar-message">
        <?php apply_filters('keystone_render_icon', $template_args['header-style-group']['top-bar-message-icon']) ?>
        <span>
          <?php echo $template_args['header-style-group']['top-bar-message-text'] ?>
        </span>
      </div>
      <?php var_dump($template_args) ?>
    </div>
  </div>
</div>

<?php if ($template_args['header-advanced-group']['cmb2_id_header_override_top_bar_color']) : ?>
  <style>
    .header-top-bar {
      background-color: <?php echo $template_args['header-advanced-group']['cmb2_id_header_top_bar_override_color'] ; ?> !important;
    }
  </style>
<?php endif; ?>