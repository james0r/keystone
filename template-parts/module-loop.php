<?php
	global $wpdb;
	$modules = $wpdb->get_results( "SELECT * FROM modules ORDER BY display_order ASC");
	foreach($modules as $m){
		if(get_the_id() == $m->page){
		//get the module instance id
    $instance = $m->id;
      
    echo sprintf('<!-- Start Module: %s -->', $m->module);
		//open the module container
		echo '<section id="i'.$instance.'" class="module module-'.$m->module.' module-instance-'.$m->id.'">';
				
			//get the guts of the module and pass the instance id
			echo "<div class='module-inner'>";
        keystone_render_template('modules/'.$m->module, array('instance' => $m->id));
			echo "</div>";
			
		//close the module container
    echo '</section>';
    
    echo sprintf('<!-- End Module: %s -->', $m->module);
		}
  } 
?>