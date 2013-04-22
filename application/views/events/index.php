<div class="side_container">

	<div id="side_block"></div>
	
	<div id="side_content">
	
		<p>Calendar</p>

		<?php
		$year = $this->uri->segment(2);
    	$month = $this->uri->segment(3);
		$data = array();
		foreach ($event as $event_item): 
    		if (date('Y',$event_item['date']->sec)==$year && date('m',$event_item['date']->sec)==$month) {
    			$day = date('d',$event_item['date']->sec);
    			$url = site_url('events/detail/').'/'.$event_item['_id'];
    			$data[(int)$day]=$url;
			};
		endforeach;
		echo $this->calendar->generate($this->uri->segment(2),$this->uri->segment(3),$data);
		?>
	</div>
</div>
  
<div class="content">

	<?php 
		if($this->session->userdata('validated')){
              	$this->load->helper('url');
              	// echo "<p><a href=\"".site_url('about/pending_view')."\">Actors-Pending</a></p>";
              	echo "<a href='".site_url('events/create')."'>Add</a>";
         }

    	$flag = 0;
    	foreach ($event as $event_item): 
    		if (date('Y',$event_item['date']->sec)==$year && date('m',$event_item['date']->sec)==$month) {
    ?>

	    <h2><?php echo $event_item['name'] ?></h2>
	    <div id="info">
	    	<?php 
	    		$date = date('m/d/Y',$event_item['date']->sec);
	    		$time = date('H:i',$event_item['startTime']->sec);
	    		$datetime = $date ." ".$time;
	    		echo $datetime;
	    	?>
	    </div>
	    <div id="main">
	        <?php //echo $event_item['place_id'] ?>
	    </div>
	    <p><a href="<?php echo site_url('events/detail').'/'.$event_item['_id'] ?>">View event</a></p>
	    <hr>

	<?php 
			$flag += 1;
		}
	endforeach; 
		if ($flag==0) {
			?>
		<h2>Sorry, no show this month.</h2>
			<?php
		}
		?>
    
</div>



	