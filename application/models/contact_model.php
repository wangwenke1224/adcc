<?php
class Contact_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongo_db');
	}
	

	public function set_contact()
	{
		$this->load->helper('url');
		$this->load->helper('inflector');
		$this->load->helper('string');
		
		$str = $this->input->post('name');
		$str=strtolower(str_replace(" ","",$str)); 
		
		$data = array(	
			'_id' => $str,
			'fullname' => $this->input->post('name'),
			'firstname' => $this->input->post('firstname'),
			'contact' => $this->input->post('contact'),
			"dob" => date('Y-m-d'),
			'gender' => $this->input->post('gender'),
			'type' => $this->input->post('type'),
			
			'intro' => $this->input->post('intro'),
			'resume' => $this->input->post('resume'),
			'link' =>$this->input->post('video_link'),
			
			'status'=> 'Pending'
			
		);



    	if (isset($_POST['submit']))
    	{
       
            // Specify configuration for File 1
            $config['upload_path'] = 'assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|pdf';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768'; 

            $this->load->library('upload', $config);      
 
 
            // Upload file 1
            if ($this->upload->do_upload('resume'))
            {
                $data = $this->upload->data();
            }
            else
            {
                echo $this->upload->display_errors();
            }
 
        }
 
	
		
		return $this->mongo_db->insert('actors', $data);

		/*$data = array(
			'actors' => $this->input->post('name'), 
			'link' =>$this->input->post('video_link')
			);
		return $this->mongo_db->insert('media', $data);
		*/


	}

}
