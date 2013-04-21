<div class="side_container">

    <div id="side_block">
    </div>
    
    <div id="side_content">
    <p>About</p>
    <p><a href="
    	<?php $this->load->helper('url');
  		echo site_url('about');?>
  		">About us</a></p>
    <p><a href="
    	<?php $this->load->helper('url');
  		echo site_url('about/view');?>
  		">Actors- Enrolled</a></p>
    <p><a href="
      <?php $this->load->helper('url');
      echo site_url('about/pending_view');?>
      ">Actors- Pending</a></p>
    </div>
    
</div>

<div class="content">
   <h1>About</h1>
   <?php foreach ($actors as $actors_item):
         if($actors_item['status']=="Enrolled") {continue;}?>
   
        <div class="bearContent">
              <img src="/private/bear1.jpg" alt="" />
              <h2><?php echo $actors_item['fullname'] ?></h2>
              <p><?php echo $actors_item['intro'] ?></p>
              
              <!-- <h2><?php 
              //echo $media_item['actors'][0] ?></h2> -->
              <p><?php 
                    foreach ($media as $media_item):
                    if ($media_item['actors'][0]==$actors_item['fullname'])
                      {
                        echo $media_item['link'];
                      }
                    if (isset($media_item['actors'][1]))
                      {
                        if ($media_item['actors'][1]==$actors_item['fullname'])
                        {
                          echo $media_item['link'];
                        }
                      } 
                     if (isset($media_item['actors'][2]))
                      {
                        if ($media_item['actors'][2]==$actors_item['fullname'])
                        {
                          echo $media_item['link'];
                        }
                      } 
                    
               ?></p>
            <?php endforeach ?>
              

              <p><a href="
                <?php
                  $this->load->helper('url');
                  echo site_url('about/edit/'.$actors_item['_id']);
                ?>
                 
                ">Edit</a></p>

            <p><a href="<?=$actors_item['_id']?>" class="deleteActors">Delete</a><p>
               
            <hr>       
  <?php endforeach ?>
        </div>

      <input type="hidden" value="<?=base_url()?>" id="baseurl"/>
    <!-- dialog box -->
    <div class="deleteActorsConfirm" title="Confirm">
        <p>Are you sure?</p>
        
    </div>
    <!-- end dialog box -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/actors.js"></script>

</div>

  

 



