<div class="side_container">

  <div class="side_head">
    <p>What is XianSheng?</p>
  </div>
  
</div>

<div class="side_content">
  <p>Content</p>
</div>
  
<div class="content">
	<?php foreach ($news as $news_item): ?>

	    <h2><?php echo $news_item['title'] ?></h2>
	    <div id="main">
	        <?php echo $news_item['text'] ?>
	    </div>
	    <p><a href="news/<?php echo $news_item['_id'] ?>">View article</a></p>
	    <hr>

	<?php endforeach ?>

</div>