<div class="side_container">

	<div class="side_head">
		<p>Calendar</p>
	</div>

	<div class="side_content">
	  <?php
		echo $this->calendar->generate();
	  ?>
	</div>
</div>
  
<div class="content">
	<a href="events/create">Add</a>
    <?php foreach ($event as $event_item): ?>

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
	        <?php echo $event_item['place_id'] ?>
	    </div>
	    <p><a href="events/<?php echo $event_item['_id'] ?>">View event</a></p>
	    <hr>

	<?php endforeach ?>
    
</div>



	