<div class="side_container">

	<div class="side_head">
		<p>Calendar</p>
	</div>

	<div class="side_content">
	  <?php
		//echo $this->calendar->generate();
	  ?>
	</div>
</div>
  
<div class="content">
    <div class="formDiv ui-widget-content" id="newEventForm">
		<h2>Create a new event</h2>

		<?php 
		// ini_set('display_errors', 'On');
		// ini_set('display_errors', 'On');
		// error_reporting(E_ALL | E_STRICT);
		// require_once('FirePHPCore/FirePHP.class.php');
		// ob_start();
			// $firephp = FirePHP::getInstance(true);
			$str='';
			foreach ($actors as $actor) {
				$str .="<option value='".$actor['fullname']."'>".$actor['fullname']."</option>";
				// $firephp->log($str,'test');
			};
		
			echo validation_errors(); 
			$attributes = array('class' => 'ui-widget'); 
			echo form_open('events/create',$attributes); 
		
		?>

			<label for="name">Name</label> 
			<input type="input" name="name" required/><br>

			<label for="date">Date</label>
			<input type="text" name="date" value="" placeholder="MM/DD/YYYY" class="date datepicker" required/><br>

			<label for="starttime">Start Time</label>
			<input id="starttime" name="starttime" class="time ui-timepicker-input" type="text" placeholder="hh:mm" autocomplete="off" required/><br>

			<!-- <label for="place">Address</label> 
			<input type="input" name="place" required/><br> -->

			<label for="intro">Introduction</label>		
			<textarea name="intro" required></textarea><br>
			<input type="hidden" value="<?=$str?>" id="actors"/>
			<div class='programs'>
				<h3>Programs</h3>
				<a href='#programs' id='addProgram' name="programs" style='font-size:14px;'>Add new program</a>
			</div>

			<button type="submit">Create Event</button>
	        <button type="submit">Cancel</button>

		</form>
		
		<script type="text/javascript" src="<?=base_url()?>assets/js/events.js"></script>
    </div>
    
</div>