<?php
// ini_set('display_errors', 'On');
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);
// require_once('FirePHPCore/FirePHP.class.php');
// ob_start();
// $firephp = FirePHP::getInstance(true);
class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('event_model');
		$this->load->helper('url');
	}

	public function index($year=2013,$month=04)
	{
		if(is_null($year)&& is_null($month)){
			$year=(int)date('Y');
			$month=(int)date('m');
		};
		$data['event'] = $this->event_model->get_event();
		$data['title'] = 'Upcoming events';

		$prefs=array(
				'show_next_prev' => TRUE,
				'next_prev_url' => site_url('events')
			);
	  	$this->load->library('calendar',$prefs);
	  	
		$this->load->view('templates/header', $data);
		$this->load->view('events/index', $data);

		$this->load->view('templates/footer');
	}
	public function view($id)
	{
		$prefs=array(
				'show_next_prev' => TRUE,
				'next_prev_url' => site_url('events')
			);
	  	$this->load->library('calendar',$prefs);
		$data['event_item'] = $this->event_model->get_event($id);
		$data['events'] = $this->event_model->get_event();
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

	public function create()
	{
		$this->load->model('about_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create an event item';
		$data['actors'] = $this->about_model->get_actors("all_actors");
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('starttime', 'Start Time', 'required');
		// $this->form_validation->set_rules('place', 'Address', 'required');
		$this->form_validation->set_rules('intro', 'Introduction', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('events/create',$data);			
			$this->load->view('templates/footer');
			
		}
		else
		{
			// $firephp->log('in here','test');
			$id=$this->event_model->set_events();
			redirect('events/detail/'.$id, 'refresh');
		}
	}
}