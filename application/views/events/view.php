<div class="side_container">

	<div id="side_block"></div>
	
	<div id="side_content">
		<p>Calendar</p>

	  <?php
		//echo $this->calendar->generate();
	  	$year=date('Y',$event_item[0]['date']->sec); 
	  	$month=date('m',$event_item[0]['date']->sec);
	  	// $day=date('d',$event_item[0]['date']->sec);
	  	$data = array();
		foreach ($events as $event): 
    		if (date('Y',$event['date']->sec)==$year && date('m',$event['date']->sec)==$month) {
    			$day = date('d',$event['date']->sec);
    			$url = site_url('events/detail/').'/'.$event['_id'];
    			$data[(int)$day]=$url;
			};
		endforeach;
		echo $this->calendar->generate($year,$month,$data);
	  ?>
	</div>
</div>
      
  <div class="content">
  	<p><a href="<?php 
  		$this->load->helper('url');
  		echo site_url('events/2013/04');
  	?>">Back to the list</a></p>
		<?php
			$date = date('m/d/Y',$event_item[0]['date']->sec);
    		$time = date('H:i',$event_item[0]['startTime']->sec);
    		$datetime = $date ." ".$time;
		echo '<h2>'.$event_item[0]['name'].'</h2>';
		echo $datetime;
		echo "<br><br>";
		echo $event_item[0]['intro']; ?>
		<br> 
		<br>
		<table>
			<tr><th>Programs</th><th>Actors</th></tr>
		<?php
			foreach ($event_program as $program) { ?>
				<tr>
					<td style='font-weight:bold; padding-right:10px; text-align:right;'>
					<?php
						echo $program['name'];
					?>
					</td>
					<td>
					<?php
						foreach ($program['actors'] as $actor) {
							if ($actor == end($program['actors'])) {
								echo $actor;	
							}
							else {
								echo $actor;
								echo ", ";
							}
						} 
					?>
					</td>
				</tr>
			<?php } 
		?>
		</table>
  </div>