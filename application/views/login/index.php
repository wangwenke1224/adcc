<div class="side_container">
    
        <div id="side_block"></div>
        <div id="side_content">
        <p>Contact Information</p>
                
        <p>Website Maintainer</p>
        <p>Name Name Name</p>
        <p>Phone: 7777777777</p>
        <p>Email: XIANGSHENG@XXX.COM</p>
        </div>
        
</div>
        
<div class="content">
<h1><a href="
        <?php $this->load->helper('url');
        echo site_url('login/login_view');?>
        ">Login Here</a></h1>
<h1><a href="
        <?php $this->load->helper('url');
        //need to know how to log out!!!!!!!!!!!!!!!!!!!!
        echo site_url('login/view');?>
        ">Logout Here</a></h1>

</div>

echo 'Congratulations, you are logged in.';
        // Add a link to logout
        echo '<br /><a href=''.base_url().'login/do_logout'>Logout</a>';