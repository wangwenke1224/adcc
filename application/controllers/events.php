<?php
class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('event_model');
	}

	public function index()
	{
		$data['event'] = $this->event_model->get_event();
		$data['title'] = 'Upcoming events';

	  	$this->load->library('calendar');
	  	
		$this->load->view('templates/header', $data);
		$this->load->view('events/index', $data);

		$this->load->view('templates/footer');
	}
	public function view($id)
	{
		$data['event_item'] = $this->event_model->get_event($id);
		if (empty($data['event_item']))
		{
			show_404();
		}
		$data['event_program'] = $this->event_model->get_programs($data['event_item'][0]);
		$data['title'] = $data['event_item'][0]['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('events/view', $data);
		$this->load->view('templates/footer');
	}
}