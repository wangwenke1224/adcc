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
   <?php 
    	if($this->session->userdata('validated')){
        	$this->load->helper('url');
            echo "<p><a href=\"".site_url('about/pending_view')."\">Actors-Pending</a></p>";
        }?>
    </div>
    
</div>

<div class="content">
   <h1>About</h1>
    

   <?php foreach ($actors as $actors_item):
         if($actors_item['status']=="Pending") {continue;}?>
   
        <div class="bearContent">
            
              <img src=<?php echo base_url()."assets/uploads/img/".$actors_item['_id'].".jpg" ?> alt=<?php echo $actors_item['_id']?> 
              width="100" height="150"/>
              <h2><?php echo $actors_item['fullname'] ?></h2>
              <p><?php echo $actors_item['intro'] ?></p>
              
            

<!-- 
              "<iframe height=486.39 width=631 src=\"http://you.video.sina.com.cn/api/sinawebApi/outplayrefer.php/vid=99562990_1878795600_OkzmSio7C2PK+l1lHz2stqlF+6xCpv2xhGu8vFqjLAtfVQyYJMXNb9QO5S/UCcZC5yoUEJU2fPsg1RQkaA/s.swf\" f
              rameborder=0 allowfullscreen></iframe> -->
              <p><?php 
                    foreach ($media as $media_item):
                
                 
                  $link=preg_split("/[\s,]+/",$media_item['link']);
                  if(isset($link[3])){$return_link=$link[3];} 
                  //echo $return_link;
                 
                    if ($media_item['actors'][0]==$actors_item['fullname'])
                      {
                        echo "<iframe height=243.19 width=315.5 ".$return_link."reborder=0 allowfullscreen></iframe>";
                      }
                    if (isset($media_item['actors'][1]))
                      {
                        if ($media_item['actors'][1]==$actors_item['fullname'])
                        {
                         echo "<iframe height=243.19 width=315.5 ".$return_link."reborder=0 allowfullscreen></iframe>";

                        }
                      } 
                     if (isset($media_item['actors'][2]))
                      {
                        if ($media_item['actors'][2]==$actors_item['fullname'])
                        {
                          echo "<iframe height=243.19 width=315.5 ".$return_link."reborder=0 allowfullscreen></iframe>";
                        }
                      } 
                    
               ?></p>
            <?php endforeach ?>
              

          
            <?php if($this->session->userdata('validated')){
              $this->load->helper('url');
              echo "<p><a href=\"".site_url('about/edit/'.$actors_item['_id'])."\">Edit</a></p>";
              echo "<p><a href=\"".$actors_item['_id']."class=\"deleteActors\">Delete</a><p>";

             }?>
              
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



  

 



