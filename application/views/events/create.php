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

		<?php echo validation_errors(); 
			$attributes = array('class' => 'ui-widget'); 
			echo form_open('events/create',$attributes); 
		?>

			<label for="name">Name</label> 
			<input type="input" name="name" /><br>

			<label for="date">Date</label>
			<input type="text" name="date" value="" placeholder="MM/DD/YYYY" class="date datepicker" /><br>

			<label for="starttime">Start Time</label>
			<input id="starttime" name="starttime" class="time ui-timepicker-input" type="text" placeholder="hh:mm" autocomplete="off"/><br>

			<label for="intro">Introduction</label>		
			<textarea name="text"></textarea><br>
			<!-- <input type="hidden" value="<?=$actors?>" id="actors"/> -->
			<div class='programs'>
				<h3>Programs</h3>
				<p id='add'>
				<a href='' class='addProgram' style='font-size:14px;'>Add new program</a>
				</p>
			</div>

			<button type="submit">Create Event</button>
	        <button type="submit">Cancel</button>

	        <script>
	        	$( ".datepicker" ).datepicker();
	        	$('#starttime').timepicker({ 'timeFormat': 'H:i' });
	        	$(".chzn-select").chosen();
	        	$( ".addProgram" ).button({
					icons: {
					primary: "ui-icon-plus"
					}
					})
	        	$( ".deleteProgram" ).button({
					icons: {
					primary: "ui-icon-trash"
					},
					text: false
					})
				$( "button" ).button();
			</script> 

		</form>
    </div>
    
</div>



	