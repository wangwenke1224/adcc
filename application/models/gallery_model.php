<?php

class Gallery_model extends CI_Model {

	var $gallery_path;
	var $gallery_path_url;
	
	// constructor function same name as class
	// every time media_model loads, this function is called first
	public function Gallery_model() {
		
		 parent::__construct(); 
		
		// APPPATH sets to the path of application folder
		// realpath returns full path to folder
		$this->gallery_path=realpath(APPPATH.'../uploads');
		//$this->load->helper('url');
		//$this->gallery_path_url=base_url().'images/';
	}

	public function do_upload() {
		
		$config1 = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path . '/images',
			'max_size' => 2048
		);
		
		$this->load->library('upload');
		$this->upload->initialize($config1);
		$this->upload->do_upload();
		
		// fetch data of uploaded image
		// returns array, includes full_path key
		$image_data = $this->upload->data();
		
		$config2 = array(
			// read image, process to create thumbnail
			// full path to uploaded file
			'source_image' => $image_data['full_path'],
			// path to the new file for thumbnail
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ratio' => true,
			'width' => 150,
			'height' => 100
		);
		
		$this->load->library('image_lib', $config2);
		// resize operation
		$this->image_lib->resize();
	}
	
	public function get_images() {
		
		$files = scandir($this->gallery_path . '/thumbs');
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images[] = array(
				'url'=>$this->gallery_path.$file,
				'thumb_url'=>$this->gallery_path.'thumbs/'.$file
			);
		}
		
		return $images;
	}
}

?>