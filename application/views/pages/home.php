    <div class="side_container">
    
        <div id="side_block"></div>
        
        <div id="side_content">
        <p>What is XianSheng?</p>
        
        <p>Content</p>
        <p>This is some text to fill up the description</p>
        </div>
        
    </div>
        
    <div class="content">
    
      <img src="../assets/element/group.jpg" alt="Group Picture" width="470" height="313">
      <br><br/>
      
      <h1>News</h1>
      
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
            <br>

            <hr>
        </div>
    <?php endforeach ?>
    
    </div>