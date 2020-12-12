<?php
/**
* These functions build out the admin page for adding and arranging dynamic modules.
*/

add_action('edit_form_after_editor', 'generate_block_cta');

function generate_block_cta($post) {
    ?>
<?php if (get_post_type() == 'page'): ?>
<div class="block-cta postbox">
  <h2><?php _e('Keystone Dynamic Sections', 'keystone') ?>
  </h2>
  <div class="inside clearfix">
    <?php if (!empty($_GET['post'])) { ?>
    <p><?php _e('Add and order sections from the Keystone Dynamic Sections Library.', 'keystone') ?>
    </p>
    <a href="/wp-admin/admin.php?page=manage-modules&editing=<?php echo $_GET['post']; ?>"
      class="button button-primary button-large">Manage Dynamic Sections</a>
    <?php } else { ?>
    <p><?php _e('Please publish this post or save to a draft before adding sections.', 'keystone') ?>
    </p>
    <?php } ?>
  </div>
</div>
<?php endif; ?>
<?php
}

add_action('admin_menu', 'homepage_menu');

function homepage_menu() {
    add_submenu_page(
        'Hidden!',
        'Manage Modules',
        'Hidden!',
        'manage_options',
        'manage-modules',
        'render_modules'
    );
}

function render_modules() { ?>

<?php
      global $wpdb;
      $editing = $_GET['editing'];
     ?>

<div class="wrap module-manager">

  <div class="mm-header clearfix">
    <h1><?php _e('Manage Dynamic Sections', 'keystone') ?>:
      <span><?php echo get_the_title($editing); ?></span></h1>
    <a href="/wp-admin/post.php?post=<?php echo $editing; ?>&action=edit"
      class="page-title-action"><?php _e('Page Editor', 'keystone') ?></a>
  </div>

  <div class="row">

    <div class="columns four">
      <div class="mm-form">
        <form method="post"
          action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
          <h2><?php _e('Keystone Dynamic Sections Library', 'keystone') ?>
          </h2>
          <label><?php _e('Section Template', 'keystone') ?></label>
          <select name="module_name">
            <option value="" disabled selected>-- <?php _e('Choose a Template', 'keystone')?>
              --</option>
            <option value="about"><?php _e('About', 'keystone') ?>
            </option>
            <option value="services-style-1"><?php _e('Services Style 1', 'keystone') ?>
            </option>
            <option value="" disabled>-- <?php _e('Divider Sections', 'keystone') ?>
              --</option>
            <option value="certs"><?php _e('Certificates', 'keystone') ?>
            </option>
            <option value="countup"><?php _e('Countup', 'keystone') ?>
            </option>
            <option value="cta-divider-3-column"><?php _e('CTA Divider 3 Column', 'keystone') ?>
            </option>
            <option value="cta-divider-appointment"><?php _e('CTA Divider Appointment', 'keystone') ?>
            </option>
            <option value="home-boxes-style-1"><?php _e('Home Boxes Style 1', 'keystone') ?>
            </option>
            <option value="home-boxes-style-2"><?php _e('Home Boxes Style 2', 'keystone') ?>
            </option>
            <option value="home-boxes-style-3"><?php _e('Home Boxes Style 3', 'keystone') ?>
            </option>
            <option value="" disabled>-- <?php _e('Hero Sections', 'keystone') ?>
              --</option>
            <option value="hero-slider-swiper"><?php _e('Hero Slider Swiper Style', 'keystone') ?>
            </option>
          </select>
          <label><?php _e('Section Name', 'keystone') ?></label>
          <input type="text" name="module_display_name" />
          <p><?php _e('Both Fields are required. The section name is for your own reference.', 'keystone') ?>
          </p>
          <input type="hidden" name="editing"
            value="<?php echo $editing; ?>" />
          <input type="hidden" name="action" value="add_module">
          <button type="submit" class="button button-primary button-large"><?php _e('Add Section', 'keystone') ?>
          </button>
        </form>
      </div>
    </div>


    <div class="columns eight" id="sortable">

      <?php
                $modules = $wpdb->get_results('SELECT * FROM modules WHERE page = ' . $editing . ' ORDER BY display_order ASC');
                foreach ($modules as $m) { ?>
      <div class='hp-module-block'
        data-instance="<?php echo $m->id; ?>">
        <h2><?php echo $m->name; ?>
        </h2>
        <?php
                            $str = $m->module;
                            $str = str_replace('_', ' ', $str);
                            $str = ucwords(strtolower($str));
                        ?>
        <p>Template: <?php echo $str; ?>
        </p>
        <form method="post"
          action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
          <input type="hidden" name="instance"
            value="<?php echo $m->id; ?>" />
          <input type="hidden" name="editing"
            value="<?php echo $editing; ?>" />
          <input type="hidden" name="action" value="delete_module">
          <button type="submit" class="module-trash page-title-action">x</button>
        </form>
      </div>
      <?php } ?>

    </div>


  </div><!-- .wrap -->

  <?php }

add_action('admin_post_add_module', 'add_module');

function add_module() {
    global $wpdb;
    $editing = $_POST['editing'];
    $wpdb->insert(
        'modules',
        [
            'module' => $_POST['module_name'],
            'name'   => $_POST['module_display_name'],
            'page'   => $editing
        ],
        ['%s', '%s', '%d']
    );

    wp_redirect('/wp-admin/admin.php?page=manage-modules&editing=' . $editing);
    exit;
}

add_action('admin_post_delete_module', 'delete_module');

function delete_module() {
    global $wpdb;
    $editing = $_POST['editing'];
    $wpdb->delete(
        'modules',
        [
            'id' => $_POST['instance']
        ],
        ['%d']
    );

    wp_redirect('/wp-admin/admin.php?page=manage-modules&editing=' . $editing);
    exit;
}
add_action('wp_ajax_update_module_order', 'update_module_order');
function update_module_order() {
    global $wpdb;
    $result = $wpdb->update(
        'modules',
        [
            'display_order' => $_REQUEST['order']
        ],
        [
            'id' => $_REQUEST['instance']
        ],
        ['%d'],
        ['%d']
    );
    if ($result === false) {
        echo 'error';
    } else {
        echo 'success';
    }
}
