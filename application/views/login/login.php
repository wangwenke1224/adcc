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
    <form action='<?php echo base_url()."index.php/";?>login/process' method='post' name='process'>
        <h2>User Login</h2>
        <br />
        <?php if(! is_null($msg)) echo $msg;?>            
        <label for='username'>Username</label>
        <input type='text' name='username' id='username' size='25' /><br />
        
        <label for='password'>Password</label>
        <input type='password' name='password' id='password' size='25' /><br />                            
        
        <input type='Submit' value='Login' />            
    </form>
</div>
