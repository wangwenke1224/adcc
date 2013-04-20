<div class="side_container">

	<div id="side_block"></div>
	<div id="side_content"><p>Videos</p></div>
	
		<div class="menu">
		  <ul class="media_nav">
		    <li><a href="#">2013</a></li>
		    <li><a href="#">2012</a></li>
		    <li><a href="#">2011</a></li>
		    <li><a href="#">2010</a></li>
		  </ul> 
		</div>
	
	<div id="side_block2"></div>
	<div id="side_content2"><p>Photos</p></div>
		
		<div class="menu">
		  <ul class="media_nav">
		    <li><a href="#">2013</a></li>
		    <li><a href="#">2012</a></li>
		    <li><a href="#">2011</a></li>
		    <li><a href="#">2010</a></li>
		  </ul> 
	</div>
</div>
  
<div class="media_content">
	<!--not using route to avoid repeated url-->
	<?php $this->load->helper('url');
		echo anchor('media/create', 'Add') ?>
	
	<div id = "gallery">
		<?php if(isset($images) && count($images)):
			foreach($images as $image): ?>
			
			<div class="thumb">
				<a href="<?php echo $image['url']; ?>">
					<img src="<?php echo $image['thumb_url']; ?>" />
				</a>
			</div>
		
		<?php endforeach; else: ?>
			<div id="blank_gallery"> Please upload an Image </div>
		<?php endif; ?>
	</div>
	
	
	<!--'media' contains all retrieved db data, then we call as needed-->
	<?php foreach ($media as $media_item): ?>

	    <h2><?php echo $media_item['name'] ?></h2>
	    
	    <!--actors is an array-->
	    <div id="info">
	    <p><b>Actors:</b>
	    	<?php foreach($media_item['actors'] as $actor) {
			echo '<br \>';
			echo $actor;
		} ?> </p>
	    </div>
	    
	    <div id="main">
	        <?php echo $media_item['link'] ?>
	    </div>
	    
	    <br>
	    <br>

	<?php endforeach ?>
    
</div>



	