

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
        ">Actors</a></p>
    <?php 
    	if($this->session->userdata('validated')){
        	$this->load->helper('url');
            echo "<p><a href=\"".site_url('about/pending_view')."\">Actors-Pending</a></p>";
        }?>
    </div>
    
</div>

<div class="content">

  <h1>About</h1>
  
    <p>Who we are, we are Xiangsheng performerces.</p>

</div>