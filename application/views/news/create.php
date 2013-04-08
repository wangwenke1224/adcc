<div class="side_container">

  <div class="side_head">
    <p>What is XianSheng?</p>
  </div>
  
</div>

<div class="side_content">
  <p>Content</p>
</div>
  
<div class="content">

<h2>Post News</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Article Title</label> 
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<!-- <textarea name="text"> -->
	<?php 
	$this->load->helper('url');
	echo $this->load->view('wysiwyg', base_url(), true); 
	?>
	<!-- </textarea> -->
	<br />
	
	<input type="submit" name="submit" value="Create news item" /> 

</form>
</div>