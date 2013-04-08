
<p><a href="<?php 
  		$this->load->helper('url');
  		echo site_url('news');
  	?>">Back to the list</a></p>
<?php
echo '<h2>'.$news_item[0]['title'].'</h2>';
echo $news_item[0]['text'];
