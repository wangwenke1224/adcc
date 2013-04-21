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
	<h1>Edit Cast</h1> 
	<div id="stylized" class="myform">
        <form id="form" name="form" method="post">
   		        	 
       <!--  <?php //echo validation_errors(); ?>
        <?php //echo form_open('about/edit') ?> -->
        
        <label>ID: <?php echo $actors[0]['_id']?></label><br></br>
       <!--  <label for="name">Name<span calss="small"></span></label> 
        <input type="input" name="name" value="<?php echo $actors[0]['fullname']?>"/> <br></br>
 -->

        <label for="status">Status<span calss="small"></span></label> 
        <select>
            <option name="status" value="Enrolled" selected=
                <?if(isset ($actors[0]['status'])){
                    if ($actors[0]['status']=='Enrolled')
                    {echo "selected";}
                ;}?>>Enrolled</option>
            <option name="status" value="Pending" selected= 
                <?if(isset ($actors[0]['status'])){
                    if ($actors[0]['status']=='Pending')
                    {echo "selected";}
                ;}?>>Pending</option>
        </select><br></br></h3>



     
        <label for="firstname">First Name<span calss="small"></span></label> 
        <input type="input" name="firstname" 
        	value="<?php 
        	if(isset ($actors[0]['firstname'])){
        	echo $actors[0]['firstname'];}
        	else{
        	echo "";}?>" required/> <br></br>

		<label for="lastname">Last Name<span calss="small"></span></label> 
        <input type="input" name="lastname" 
        	value="<?php 
        	if(isset ($actors[0]['lastname'])){
        	echo $actors[0]['lastname'];}
        	else{
        	echo "";}?>"/> <br></br>

        <label for="contact">Contact<span calss="small"></span></label> 
        <input type="email" name="contact" 
        	value="<?php 
        	if(isset ($actors[0]['contact'])){
        	echo $actors[0]['contact'];}
        	else{
        	echo "";}?>" }/><br></br>

        <label for="dob">Birthday<span calss="small"></span></label> 
        <input type="date" name="dob" 
        	value=""/><br></br>

        	<?/*php 
        		if(isset ($actors[0]['dob'])){
        		 	$source=$actors[0]['dob'];
        		 	echo $source;
        		 	$newdate = preg_split('[/]', $source, -1, PREG_SPLIT_NO_EMPTY);
        	 	 	//list($month, $day, $year) = preg_split('[/]', $source);
			 	 	//$newdate = $year.'-'.$month.'-'.$day;
			 	 	echo $newdate[1];
        		}
			 	else {
			 		echo "";}*/?>
        <label for="birthplace">Birth Place<span calss="small"></span></label> 
        <input type="input" name="birthplace" 
        	value="<?php 
        	if(isset ($actors[0]['birthplace'])){
        	echo $actors[0]['birthplace'];}
        	else{
        	echo "";}?>" /><br></br>
        
        <label for="gender">Gender<span calss="small"></span></label> 

        <input type="radio" name="gender" value="M" <?php if ($actors[0]['gender']=='M') echo 'checked';?> > Male
        <input type="radio" name="gender" value="F" <?php if ($actors[0]['gender']=='F') echo 'checked';?> > Female
        <input type="radio" name="gender" value="O" <?php if ($actors[0]['gender']=='O') echo 'checked';?> > Other<br></br>

		<label for="type">Performance Type <span class="small">check all that apply</span></label> 
        <input type="checkbox" name="type[]" 
        	value="solo" <?php 
        		if(isset ($actors[0]['type'][0])=='solo')
        			echo 'checked';?> 
        	> Solo Monologue
        <input type="checkbox" name="type[]" 
        	value="two" <?php 
        		if(isset ($actors[0]['type'][0])=='two')
        			{echo 'checked'; }
        		elseif(isset ($actors[0]['type'][1])=='two')
        			{echo 'checked';}?> 
        	> Two Performers
        <input type="checkbox" name="type[]" 
        	value="multi" <?php 
        		if(isset ($actors[0]['type'][0])=='multi')
       				{echo 'checked';}			
        		elseif(isset ($actors[0]['type'][1])=='multi')
        			{echo 'checked';}	
        		elseif(isset ($actors[0]['type'][2])=='multi')
        			{echo 'checked';}	
        		?> 
        	> Multi Performers <br></br>
        
        <label for="video_link">Video Link<span calss="small"></span></label> 
        <input type="url" name="video_link" 
        	value="<?php 
        	if(isset ($actors[0]['link'])){
        	echo $actors[0]['link'];}
        	else{
        	echo "";}?>" /><br></br>
        
        <label for="intro">Introduction Letter<span class="small">Maximum: 150 words</span></label> 
        <textarea name="intro" cols="25" rows="5" /><?php 
        	if(isset ($actors[0]['intro'])){
        	echo $actors[0]['intro'];}
        	else{
        	echo "";}?></textarea><br></br>

		<label for="joindate">Join Date<span calss="small"></span></label> 
        <input type="date" name="joindate" 
        	value="<?/*php 
        	 if(isset ($actors[0]['joindate'])){
        	 	$source = $actors[0]['joindate'];
				$date = new DateTime($source);
				echo $date->format('Y-m-d'); 
        	 	}
        	 else{
        	 echo "";}*/?>" /><br></br>

        <label for="resume">Resume<span calss="small"></span></label> 
        <input type="file" name="resume" 
        	title="<?php 
        	if(isset ($actors[0]['resume'])){
        	echo $actors[0]['resume'];}
        	else{
        	echo "";}?>"/><br></br>

        <label for="img">Image<span calss="small"></span></label> 
        

        <input type="file" name="img" 
        	title="<?php 
        	if(isset ($actors[0]['img'])){
        	echo $actors[0]['img'];}
        	else{
        	echo "";}?>"/><br></br>


		<br />
  
        <button type="submit" name="submit">Submit</button> 

      </form>  
	</div>
	<div class="spacer"></div>
</div>



