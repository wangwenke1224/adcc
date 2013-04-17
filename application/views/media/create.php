<div class="side_container">

	<div id="side_block"></div>
	<div id="side_content"><p>Some content</p></div>
	
 </div>
 
<div class="content">
	<script>
	$(function() {
	    $( ".datepicker" ).datepicker();
	});
	</script>

	<h2>Create Media Item</h2>
	
	<?php echo validation_errors(); ?>
	
	<!--renders the form element and adds extra functionality-->
	<?php echo form_open_multipart('media/create') ?>

		Name<br><input type="text" name="name" /><br />
		<br />
		Link<br><input type="text" name="link" /><br />
		<br />
		Year<br><input type="text" name="year" /><br />
		<br />
		
		<script src="http://localhost/adcc/assets/js/addInput.js" language="Javascript" type="text/javascript"></script>
			
			<div id="dynamicInput">
				<!--make sure actors is an array-->
				Actor<br><input type="text" name="actors[]" />
			</div>
		
		<input type="button" value="Add another actor" onClick="addInput('dynamicInput');"><br />
		<br />
	
	<!--File uploads require a multipart form-->
	<?php /*echo form_open_multipart('media/gallery');*/
	
		echo form_upload('userfile');
		echo "\n";
		echo form_submit('upload', 'Create Media Item');
		echo form_close()
	?>
		
		<!--Photo<br><input type="file" name="userfile" size="20" /><br />		
		<br />-->
		
		<!--shell_exec("ffmpeg -i ".$video_url."  -y -an -sameq -f image2 -s 400x270 path/of/thumb/mythumb.jpg");-->
		
		<!--<h3>Programs</h3>-->
		<!--<label for="program">Program</label>
		<div id="programs"><input type="input" name=""></div>-->
		
		<!--<input type="submit" name="submit" value="Create Media Item" /> -->

	</form>
    
</div>



	