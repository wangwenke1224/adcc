<?php
// ini_set('display_errors', 'On');
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);
// require_once('FirePHPCore/FirePHP.class.php');
// ob_start();
class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_model'); // call about_model
		$this->load->helper('url');
		$this->load->library('encrypt');
        $this->load->library('session');
	}

	public function index()
	{
		//$data['about'] = $this->about_model->get_actors();
		$data['title'] = 'About us';

		$this->load->view('templates/header', $data);
		$this->load->view('about/index', $data);
		$this->load->view('templates/footer');
	}


	public function view()
	{
		$id = "all_actors";
		$data['actors'] = $this->about_model->get_actors($id);
		$data['media'] = $this->about_model->get_media($id);
		// $this->load->helper('video');
		$data['title'] = 'About us';

		$this->load->view('templates/header', $data);
		$this->load->view('about/view', $data);
		$this->load->view('templates/footer');
	}

	public function pending_view()
	{
		if(! $this->session->userdata('validated')){
              redirect('login');}
              
		$id = "all_actors";
		$data['actors'] = $this->about_model->get_actors($id);
		$data['media'] = $this->about_model->get_media($id);
		// $this->load->helper('video');
		$data['title'] = 'About us';

		$this->load->view('templates/header', $data);
		$this->load->view('about/pending_view', $data);
		$this->load->view('templates/footer');
	}


	public function edit($id)
	{
    	if(! $this->session->userdata('validated')){
              redirect('login');}
              
    	$this->load->helper('form');
		$this->load->library('form_validation');

    	// $id = $this->input->post('edit_id');
    	//$data['actors'] = $this->about_model->edit_actors($id);
		$data['actors'] = $this->about_model->get_actors($id);
		$data['title'] = 'About us - Edit';

		// $this->load->view('templates/header');	
		// $this->load->view('about/edit', $data);
		// $this->load->view('templates/footer');

		
		// different from here//
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');	
			$this->load->view('about/edit', $data);
			$this->load->view('templates/footer');
			
		}
		else
		{
			
			$data['update_data']=$this->about_model->set_about($id);
			

			$this->load->view('templates/header', $data);
			$this->load->view('about/edit_success', $data);
			$this->load->view('templates/footer');
		}
	}

		public function delete($id)
	{
		// $firephp = FirePHP::getInstance(true);
 
		// $var = 'outside';
		// echo $id;
		// $firephp->log($id,'test');
		if(isset($id) && !empty($id))
        {
        	// $firephp->log($id,'test');
			$this->about_model->delete_actors($id);
		}
	}
    	
} 














