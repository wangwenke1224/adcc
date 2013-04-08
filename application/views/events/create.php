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
	<script>
        $(function() {
            $( ".datepicker" ).datepicker();
        });
    </script>

	<h2>Create a news item</h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('events/create') ?>

		<label for="name">Name</label> 
		<input type="input" name="name" /><br />

		<label for="date">Date</label>
		<input type="text" name="date" value="" placeholder="Date of Event" class="datepicker" />

		<label for="intro">Introduction</label>
		<textarea name="text"></textarea><br />
		<h3>Programs</h3>
		<label for="program">Program</label>
		<div id="prgrams">
			<input type="input" name="">
		</div>
		<input type="submit" name="submit" value="Create news item" /> 

	</form>
    
</div>



	