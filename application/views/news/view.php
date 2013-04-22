<div class="side_container">

	<div id="side_block"></div>
	
	<div id="side_content">
		<p>Content</p>

	</div>
</div>
<div class="content">
	<p><a href="<?php 
	  		$this->load->helper('url');
	  		echo site_url('news');
	  	?>">Back to the list</a></p>
  	
	<?php 
		if($this->session->userdata('validated')){
              	$this->load->helper('url');
              	$item = $news_item[0]['_id'];
              	echo "<p><a href='".site_url('news/edit').'/'.$item."'>Edit</a></p>";
              	// echo "<a href='".site_url('events/create')."'>Add</a>";
         }
	?>

	<div class="newsContent">
	<?php
		echo '<h2>'.$news_item[0]['title'].'</h2>';
		echo date('m/d/Y H:i',$news_item[0]['date']->sec);
		echo "<br>";
		echo $news_item[0]['text']; ?>
	</div>
	<a name='comments'></a>
	<div class="commentsContent">
	<?php
		echo "<hr>";
		echo "<h3>Comments:</h3>";
		if(isset($news_item[0]['comments']) && !empty($news_item[0]['comments']))
		{
			foreach ($news_item[0]['comments'] as $comment)
			{
				echo "<div class='commentItem'>";
				echo "<h4>".$comment['name'].' says:</h4>';
				echo "<h5>".date('m/d/Y H:i',$comment['date']->sec)."</h5>";
				echo $comment['text'];
				echo "</div>";
				echo "<br>";
			}
		}
		else{
			echo "<div class='commentItem'>";
			echo "<i>No comment yet. Do you want to be the first one to leave comments?</i>";
			echo "</div>";
		}
	?>
	</div>
	<div class="formDiv ui-widget-content" id="insertbeforMe">
		<h3>Leave a Comment</h3>
		<span style="color:#dc4704;">* is required</span>
		<?php echo validation_errors(); ?>

		<form id="commentForm" class= "ui-widget" method="POST" action="">

			<label for="name">Name: </label> 
			<input type="input" name="name" required/>

			<label for="email">Email: </label> 
			<input type="input" name="email" required/>

			<label for="text">Comment: </label> 
			<textarea name="text" required></textarea>

			<input type="hidden" value="<?=base_url()?>" id="baseurl"/>
			<input type="hidden" value="<?=$news_item[0]['_id']?>" id="id"/>
	        <!-- <input type="submit" value="Submit"/> -->
	        <!-- <input type="reset" value="Reset"/>  -->
	        <button type="reset">Reset</button>
	        <button type="submit">Submit</button>
	        
	        <script>
				$( "button" ).button();
			</script>

		</form>
	</div>
	<script type="text/javascript" src="<?=base_url()?>assets/js/news.js"></script>

</div>
