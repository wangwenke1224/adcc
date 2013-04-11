<?php
class Media extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('media_model');
	}

	public function index()
	{
		$data['media'] = $this->media_model->get_media();
		$data['title'] = 'Media';
	  	
		$this->load->view('templates/header', $data);
		$this->load->view('media/index', $data);

		$this->load->view('templates/footer');
	}
	public function view($id)
	{
		$data['media_item'] = $this->media_model->get_media($id);
		if (empty($data['media_item']))
		{
			show_404();
		}
		$data['media_program'] = $this->media_model->get_programs($data['media_item'][0]);
		$data['title'] = $data['media_item'][0]['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('media/view', $data);
		$this->load->view('templates/footer');
	}

}