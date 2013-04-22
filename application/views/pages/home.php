    <div class="side_container">
    
        <div id="side_block"></div>
        
        <div id="side_content">
        <p>What is XianSheng?</p>
        
        <p>Content</p>
        <p>This is some text to fill up the description</p>
        </div>
        
    </div>
        
    <div class="content">
    
      <img src="<?=base_url()?>assets/element/group.jpg" alt="Group Picture" width="470" height="313">
      <br><br/>
      
      <h1>Recent News</h1>
      
        <?php 
            // ini_set('display_errors', 'On');
            // error_reporting(E_ALL | E_STRICT);
            // require_once('FirePHPCore/FirePHP.class.php');
            // ob_start();
            // $firephp = FirePHP::getInstance(true);
            // $firephp->log($news_items[0]['date'],'news');
            foreach ($news_items as $news_item): 
                $news_date = new DateTime(date('m/d/Y',$news_item['date']->sec));
                $today = new DateTime(); //today

                $interval=$news_date->diff($today);
                $diff = $interval->format('%m');
                if ($diff<3) {     
        ?>
    
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
            <p><a href="<?=site_url()?>/news/<?=$news_item['_id']?>">More&gt;&gt;</a></p>
            <br>

            <hr>
        </div>
    <?php 
        }
        endforeach;
    ?>
    
    </div>