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
	<a href="media/create">Add</a>
	
	<p>
	<iframe height=616.15 width=631 src="http://player.youku.com/embed/XNDk5MjU2NTY0" frameborder=0 allowfullscreen></iframe>
	</p>
	
	<?php foreach ($media as $media_item): ?>

	    <h2><?php echo $media_item['name'] ?></h2>
	    
	    <div id="info">
	    	<?php echo $media_item['actors'] ?>
	    </div>
	    
	    <div id="main">
	        <?php echo $media_item['link'] ?>
	    </div>

	<?php endforeach ?>
    
</div>



	