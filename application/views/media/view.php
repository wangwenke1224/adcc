  <div class="side_container">
  
      <div class="side_head">
        <p>What is XianSheng?</p>
      </div>
      
  </div>
  
  <div class="side_content">
      <p>Content</p>
  </div>
      
  <div class="content">
  	<p><a href="<?php 
  		$this->load->helper('url');
  		echo site_url('media');
  	?>">Back to the list</a></p>
		<?php
		echo '<h2>'.$media_item[0]['name'].'</h2>';
		echo date('m/d/Y', $media_item[0]['date']->sec);
		echo "<br>";
		echo $media_item[0]['intro']; ?>
		<br> 
		<br>
		<table>
			<tr><th>Programs</th></tr>
		<?php
			foreach ($media_program as $program) { ?>
				<tr>
					<td>
					<?php
						echo $program['name'];
					?>
					</td>
					<td>
					<?php
						foreach ($program['actors'] as $actor) {
							if ($actor == end($program['actors'])) {
								echo $actor;	
							}
							else {
								echo $actor;
								echo ", ";
							}
						} 
					?>
					</td>
				</tr>
			<?php } 
		?>
		</table>
  </div>