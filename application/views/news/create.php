<?php echo $this->tinyMce;?>
<div class="side_container">

  <div class="side_head">
    <p>What is XianSheng?</p>
  </div>
  
</div>

<div class="side_content">
  <p>Content</p>
</div>
  
<div class="content">



<?php echo validation_errors(); ?>

<?php 
	if (isset($news_item) && !empty($news_item)) {

	echo form_open('news/edit/'.$news_item[0]['_id']) ?>

	<h2>Update News</h2>
	<label for="title">Article Title</label> 
	<input type="input" name="title" value="<?=$news_item[0]['title']?>" required/><br />

	<label for="text">Text</label><br>
	<textarea name="text" id="text" class="tinyMce" required><?=$news_item[0]['text']?>
	</textarea>
	<script type="text/javascript">
		var defaulttext="<?=$news_item[0]['text']?>";
		tinyMCE.get('text').setContent(defaulttext);
	</script>

	<br />
	<input type="submit" name="submit" value="Update news item" /> 
<?php
	}
	else{
		echo form_open('news/create');
?>
	<h2>Post News</h2>
	<label for="title">Article Title</label> 
	<input type="input" name="title" required/><br />

	<label for="text">Text</label><br>
	<textarea name="text" class="tinyMce" required>
	</textarea>
	<br />
	<input type="submit" name="submit" value="Create news item" /> 
<?php } ?>

</form>
</div>