<div class="side_container">

    <div id="side_block">
    </div>
    
    <div id="side_content">
    <p>What is XianSheng?</p>
    
    <p>Content</p>
    <p>This is some text to fill up the description</p>
    </div>
    
</div>

<div class="content">

  <h1>News</h1>
  
    <?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    
    <div id="main">
	<?php echo $news_item['text'] ?>
    </div>
    
    <p><a href="news/<?php echo $news_item['_id'] ?>">View article</a></p>
    <hr>

    <?php endforeach ?>

</div>