    <div class="side_container">
    
        <div id="side_block">
        </div>
        
        <div id="side_text">
        <p>Contact Information</p>
  
        <p>Website Maintainer</p>
        <p>Name Name Name</p>
        <p>Phone: 7777777777</p>
        <p>Email: XIANGSHENG@XXX.COM</p>
        </div>
        
    </div>
        
    <div class="content">
    
      <h1>Recruitment Information</h1>  
      <h2>Introduction</h2>
      <p>We are going to invite and recruit people who love Xiansheng and love to perform on the stage to join the association</p>
      <h2>Requirement</h2>
      <p>Please fill out the application form.</p>
      <br></br>
      <h1>Apply</h1>
      
      
      <form action="<?php echo base_url();?>index.php/site/insert_into_db" method="post">
       <p>Name <input type = 'text' name='name'></p>
       <p>Contact <input type = 'text' name='contact'></p> 
       <p>Birthday <input type = 'text' name='f3'></p>
       <p>Gender <input type = 'text' name='f1'></p>
       <p>Style <input type = 'text' name='f2'></p> 
       <p>Video Link = <input type = 'text' name='f3'></p>
       <?php echo form_open_multipart('upload/do_upload');?>
       <p>Intro Letter <input type="file" name="userfile" size="20" />
       <p>Resume <input type="file" name="userfile" size="20" />
       <br /><br />
       <input type="submit" value="upload" />
      </form>
      
     
      
    </div>