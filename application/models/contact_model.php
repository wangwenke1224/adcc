<?php
class Contact_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongo_db');
		//$this->resume_path=realpath(APPPATH.'../assets/uploads');
	}
	

	public function set_contact()
	{
		$this->load->helper('url');
		$this->load->helper('inflector');
		$this->load->helper('string');
		
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$name=$firstname." ".$lastname;
		$str = $name;
		$str=strtolower(str_replace(" ","",$str)); 
		
		$data = array(	
			'_id' => $str,
			'fullname' => $name,
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'contact' => $this->input->post('contact'),
			"dob" => date('Y-m-d'),
			'gender' => $this->input->post('gender'),
			'type' => $this->input->post('type'),
			
			'intro' => $this->input->post('intro'),
			'resume' => $this->input->post('resume'),
			'link' =>$this->input->post('video_link'),
			
			'status'=> 'Pending'
			
		);
	
		return $this->mongo_db->insert('actors', $data);

		/*$data = array(
			'actors' => $this->input->post('name'), 
			'link' =>$this->input->post('video_link')
			);
		return $this->mongo_db->insert('media', $data);
		*/


	}
	
	// public function do_upload() {
		
	// 	//$config['file_name'] = "test";

	// 	$config1 = array(
	// 		'allowed_types' => 'pdf|doc|docs',
	// 		'upload_path' => $this->resume_path . '/resumes/',

	// 	);
		
	// 	$this->load->library('upload');
	// 	$this->upload->initialize($config1);
	// 	$this->upload->do_upload();
	// 	$this->upload->display_errors();
		
	// 	// fetch data of uploaded image
	// 	// returns array, includes full_path key
	// 	$resume_data=$this->upload->data();
	// 	//return $resume_data;
		
	// 	// $config2 = array(
	// 	// 	// read image, process to create thumbnail
	// 	// 	// full path to uploaded file
	// 	// 	'source_image' => $image_data['full_path'],
	// 	// 	// path to the new file for thumbnail
	// 	// 	'new_image' => $this->gallery_path . '/thumbs',
	// 	// 	'maintain_ratio' => true,
	// 	// 	'width' => 150,
	// 	// 	'height' => 100
	// 	// );
		
	// 	// $this->load->library('image_lib', $config2);
	// 	// // resize operation
	// 	// $this->image_lib->resize();
	// }	
}
