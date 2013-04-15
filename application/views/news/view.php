<div class="side_container">

  <div class="side_head">
    <p>What is XianSheng?</p>
  </div>
  
</div>

<div class="side_content">
  <p>Content</p>
</div>
  
<div class="content">
	<p><a href="<?php 
	  		$this->load->helper('url');
	  		echo site_url('news');
	  	?>">Back to the list</a></p>
	<?php
		echo '<h2>'.$news_item[0]['title'].'</h2>';
		echo date('m/d/Y H:i',$news_item[0]['date']->sec);
		echo "<br>";
		echo $news_item[0]['text']; 
		echo "<hr>";
		echo "<h3>Comments:</h3>";
		if(isset($news_item[0]['comments']) && !empty($news_item[0]['comments']))
		{
			foreach ($news_item[0]['comments'] as $comment)
			{
				echo "<p>".$comment['name'].' says:</p>';
				echo date('m/d/Y H:i',$comment['date']->sec);
				echo "<br>";
				echo $comment['text'];
			}
		}
	?>
	<div class="submitComment" id="insertbeforMe">
		<h3>Leave a Comment</h3>

		<?php echo validation_errors(); ?>

		<form method="POST" action="">

			<label for="name">Name: </label> 
			<input type="input" name="name" /><br />

			<label for="email">Email: </label>
			<input type="input" name="email" /><br />

			<label for="text">Comment: </label>
			<textarea name="text"></textarea>
			<br />
			<input type="hidden" value="<?=base_url()?>" id="baseurl"/>
			<input type="hidden" value="<?=$news_item[0]['_id']?>" id="id"/>
	        <input type="submit" value="Submit"/>
	        <input type="reset" value="Reset"/> 

		</form>
	</div>
	<script type="text/javascript" src="<?=base_url()?>assets/js/news.js"></script>

</div>
