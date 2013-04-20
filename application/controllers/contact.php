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

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('contact/index', $data);
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->contact_model->set_contact();
			
			$this->load->view('templates/header', $data);
			$this->load->view('contact/success', $data);
			$this->load->view('templates/footer');
		
		
		
		
		}
	}

	/*function do_upload()
	{
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'pdf|docs|doc';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('contact/index', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('contact/success', $data);
		}
	}*/


}