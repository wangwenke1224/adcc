<?php
class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Contact';

		//add for upload resume
		$config['upload_path'] = 'assets/media';
		$config['allowed_types'] = 'pdf|doc|docs';
		$this->load->library('upload', $config);


		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		$this->form_validation->set_rules('resume', 'Resume', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('contact/index', $data);
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->contact_model->set_contact();

			// if ($this->input->post('submit')) {
			// 	// let the method do_upload inside Gallery_model do all the work
			// 	$this->contact_model->do_upload();
			// }
			//$data['images'] = $this->contact_model->get_images();
			
			$this->load->view('templates/header', $data);
			$this->load->view('contact/success', $data);
			$this->load->view('templates/footer');
		
		
		
		
		}
	}

	


}