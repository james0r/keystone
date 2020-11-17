<?php
	global $wpdb;
	$modules = $wpdb->get_results( "SELECT * FROM modules ORDER BY display_order ASC");
	foreach($modules as $m){
		if(get_the_id() == $m->page){
		//get the module instance
    $instance = $m->id;
    	
		//open the module container
		echo '<div id="i'.$instance.'" class="module '.$m->module.'">';
				
			//get the guts of the module
			echo "<div class='module-content'>";
        keystone_get_template('modules/'.$m->module, array('instance' => $m->id));
			echo "</div>";
			
		//close the module container
		echo '</div>';
		}
  } 
?>