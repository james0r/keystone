<?php
/**
* THIS FILE CONTAINS FUNCTIONS FOR DYANMIC MODULES
*/

add_action( 'edit_form_after_editor', 'generate_block_cta' );
	
function generate_block_cta( $post ) {
?>
  <?php if (get_post_type() == 'page'): ?>
  <div class="block-cta postbox">
	  <h2>Keystone Dynamic Sections</h2>
	  <div class="inside clearfix">
		  <?php if(!empty($_GET['post'])){ ?>
	  		<p>Add and order sections from the Keystone Dynamic Sections library.</p>
				<a href="/wp-admin/admin.php?page=manage-modules&editing=<?php echo $_GET['post']; ?>" class="button button-primary button-large">Manage Dynamic Sections</a>
			<?php } else { ?>
				<p>Please publish this post or save to a draft before adding sections.</p>
			<?php } ?>
	  </div>
  </div>
  <?php endif; ?>
<?php }

add_action( 'admin_menu', 'homepage_menu' );

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

function render_modules(){ ?>

	<?php
	  global $wpdb;
	  $editing = $_GET['editing'];
	 ?>
	
	<div class="wrap module-manager">
		
		<div class="mm-header clearfix">
    	<h1>Manage Dynamic Sections: <span><?php echo get_the_title($editing); ?></span></h1>
    	<a href="/wp-admin/post.php?post=<?php echo $editing; ?>&action=edit" class="page-title-action">Page Editor</a>
		</div>
		
		<div class="row">
			
			<div class="columns four">
				<div class="mm-form">
					<form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">
						<h2>Add Dynamic Section</h2>
						<label>Section Template</label>
						<select name="module_name">
							<option value="" disabled selected>-- Choose a Template --</option>
							<option value="name">Name</option>
							<option value="date">Date</option>
						</select>
						<label>Section Name</label>
						<input type="text" name="module_display_name" />
						<p>Both Fields are required. The section name is for your own reference.</p>
						<input type="hidden" name="editing" value="<?php echo $editing; ?>" />
						<input type="hidden" name="action" value="add_module">
						<button type="submit" class="button button-primary button-large">Add Section</button>
    			</form>
				</div>
			</div>
			
			
			<div class="columns eight" id="sortable">
				
				<?php
				$modules = $wpdb->get_results( "SELECT * FROM modules WHERE page = ".$editing." ORDER BY display_order ASC");
				foreach($modules as $m){ ?>
					<div class='hp-module-block' data-instance="<?php echo $m->id; ?>">
						<h2><?php echo $m->name; ?></h2>
						<?php
							$str = $m->module;
							$str = str_replace("_"," ",$str);
							$str = ucwords(strtolower($str));
						?>
						<p>Template: <?php echo $str; ?></p>
						<form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">
							<input type="hidden" name="instance" value="<?php echo $m->id; ?>" />
							<input type="hidden" name="editing" value="<?php echo $editing; ?>" />
							<input type="hidden" name="action" value="delete_module">
							<button type="submit" class="module-trash page-title-action">x</button>
    				</form>
					</div>
				<?php } ?>
				
			</div>

 
	</div><!-- .wrap -->
	
<?php }
	
	
	
add_action( 'admin_post_add_module', 'add_module' );

function add_module() {
  
  global $wpdb;
  $editing = $_POST['editing'];
  $wpdb->insert( 
	  "modules", 
	  	array(  
	  		'module' => $_POST['module_name'],
	  		'name' => $_POST['module_display_name'],
	  		'page' => $editing
	  	), 
	  	array('%s','%s','%d') 
	);
	
	wp_redirect( '/wp-admin/admin.php?page=manage-modules&editing='.$editing );
	exit;
    
}


add_action( 'admin_post_delete_module', 'delete_module' );

function delete_module() {
  
  global $wpdb;
  $editing = $_POST['editing'];
  $wpdb->delete( 
	  "modules", 
	  	array(  
	  		'id' => $_POST['instance']
	  	), 
	  	array('%d') 
	);
	
	wp_redirect( '/wp-admin/admin.php?page=manage-modules&editing='.$editing );
	exit;
    
}


add_action("wp_ajax_update_module_order", "update_module_order");
function update_module_order() {

  global $wpdb;
  $result = $wpdb->update( 
	  "modules", 
	  	array(  
	  		'display_order' => $_REQUEST['order']
	  	),
	  	array(  
	  		'id' => $_REQUEST['instance']
	  	), 
	  	array('%d'),
	  	array('%d')
	);
	if($result===FALSE){
		echo 'error';
	}else{
		echo 'success';
	}

}

?>