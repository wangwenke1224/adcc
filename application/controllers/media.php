<?php
class Media extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('media_model');
		$this->load->model('gallery_model');
	}
	
	// to view all media
	public function index()
	{
		//all the data is retireved to 'media' and later called by Index view
		$data['media'] = $this->media_model->get_media();
		$data['images'] = $this->gallery_model->get_images();
		$data['title'] = 'Media';
	  	
		$this->load->view('templates/header', $data);
		$this->load->view('media/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function create() {
		
		// load the form helper and the form validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$config['upload_path'] = 'assets/media';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		
		$data['title'] = 'Create Media';
		
		// set rules for form validation
		// 3 fields: name of the input field, the name to be used in error messages, and the rule
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');
		$this->form_validation->set_rules('actors', 'Actors', 'required');
		
		// if it was submitted and passed all the rules, the model is called
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('media/create', $data);
			$this->load->view('templates/footer');
		}
		else {
			$data['media'] = $this->media_model->set_media();
			$data['media'] = $this->media_model->get_media();
			
			if ($this->input->post('upload')) {
				// let the method do_upload inside Gallery_model do all the work
				$this->gallery_model->do_upload();
			}
			
			$data['images'] = $this->gallery_model->get_images();
			
			$data['video_thumb'] = $this->gallery_model->get_youtube('link');
		
			$this->load->view('templates/header');
			$this->load->view('media/index', $data);
			$this->load->view('templates/footer');
		}

		
	}
	
	// to view specific media item
	//public function view($id)
	//{
	//	//all the data with $id is retireved to 'media_item' and later called by View
	//	$data['media_item'] = $this->media_model->get_media($id);
	//	
	//	if (empty($data['media_item'])) {
	//		show_404();
	//	}
	//	
	//	$data['media_program'] = $this->media_model->get_programs($data['media_item'][0]);
	//	$data['title'] = $data['media_item'][0]['name'];
	//
	//	$this->load->view('templates/header', $data);
	//	$this->load->view('media/view', $data);
	//	$this->load->view('templates/footer');
	//}

}