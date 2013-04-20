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
    
      <h1>Recruitment Information</h1>  
      <h2>Introduction</h2>
      <p>We are going to invite and recruit people who love Xiangsheng and love to perform on the stage to join the association</p>
      <h2>Requirement</h2>
      <p>Please fill out the application form.</p>

      <div id="stylized" class="myform">
        <form id="form" name="form" method="post">
        <h1>Apply</h1>
        <p>Please fill out the form</p>
      

        <?php echo validation_errors(); ?>
        <?php echo form_open('contact/create') ?>
        <label for="name">Name<span calss="small"></span></label> 
        <input type="input" name="name" /> <br></br>

        <label for="firstname">Firstname<span calss="small"></span></label> 
        <input type="input" name="firstname" /> <br></br>

        <label for="contact">Contact<span calss="small"></span></label> 
        <input type="email" name="contact" value="applicant@xiangsheng.com" /><br></br>

        <label for="dob">Birthday<span calss="small"></span></label> 
        <input type="date" name="dob" /><br></br>

        <label for="gender">Gender<span calss="small"></span></label> 
        <input type="radio" name="gender" value="M"> Male
        <input type="radio" name="gender" value="F"> Female
        <input type="radio" name="gender" value="O"> Other<br></br>

        <label for="type">Performance Type <span class="small">check all that apply</span></label> 
        <input type="checkbox" name="type[]" value="solo"> Solo Monologue
        <input type="checkbox" name="type[]" value="two"> Two Performers
        <input type="checkbox" name="type[]" value="multi"> Multi-players<br></br>

        <label for="video_link">Video Link<span calss="small"></span></label> 
        <input type="url" name="video_link" /><br></br>
        
        <label for="intro">Introduction Letter<span class="small">Maximum: 150 words</span></label> 
        <textarea name="intro" cols="25" rows="5" /></textarea><br></br>

        <label for="resume">Resume<span calss="small"></span></label> 
        <input type="file" name="resume" /><br></br>
        
       <br />
  
        <button type="submit" name="submit">Submit</button> 
        </div>
        <div class="spacer"></div>

      </form>  
    </div>


   



 
 