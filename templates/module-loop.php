<?php
	global $wpdb;
	$modules = $wpdb->get_results( "SELECT * FROM modules ORDER BY display_order ASC");
	foreach($modules as $m){
		if(get_the_id() == $m->page){
		//get the module instance
    $instance = $m->id;
      
    echo sprintf('<!-- Section: %s -->', ucfirst($m->module));
		//open the module container
		echo '<section id="i'.$instance.'" class="module module-'.$m->module.' module-instance-'.$m->id.'">';
				
			//get the guts of the module
			echo "<div class='module-inner'>";
        keystone_get_template('modules/'.$m->module, array('instance' => $m->id));
			echo "</div>";
			
		//close the module container
		echo '</section>';
		}
  } 
?>