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
  <a href="news/create">Add</a>
    <?php foreach ($news as $news_item): ?>
        <div id="news<?=$news_item['_id']?>">
            <h2><?php echo $news_item['title'] ?></h2>
            <p><?php echo date('m/d/Y H:i',$news_item['date']->sec) ?></p>      
        	<?php 
                $line=$news_item['text'];
                if (preg_match('/^.{1,150}\b/s', $news_item['text'], $match))
                {
                    $line=$match[0];
                }
                echo $line.'... '; 

            ?>
            <p><a href="news/<?=$news_item['_id']?>">More&gt;&gt;</a></p>
            <p><a href="news/<?=$news_item['_id']?>">Comments(<?php
                if(isset($news_item['comments']) && !empty($news_item['comments']))
                {
                    echo count($news_item['comments']);
                }
                else echo 0;

            ?>)</a></p>
            <p><a href="<?=$news_item['_id']?>" class="deleteNews">Delete</a><p>
            <hr>
        </div>
    <?php endforeach ?>
    <input type="hidden" value="<?=base_url()?>" id="baseurl"/>
    <!-- dialog box -->
    <div class="deleteNewsConfirm" title="Confirm">
        <p>Are you sure?</p>
        
    </div>
    <!-- end dialog box -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/news.js"></script>

</div>