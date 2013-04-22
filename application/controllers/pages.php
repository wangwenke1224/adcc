<?php

	class Pages extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('about_model'); // call about_model
			$this->load->helper('url');
			$this->load->library('encrypt');
	        $this->load->library('session');
	      //  $this->check_isvalidated();
		}
		
		public function view($page = 'home'){
			
			if (!file_exists('application/views/pages/'.$page.'.php')) {
				show_404();
			}
				
			$data['home'] = 'Home';		
			$data['news'] = 'News';
			$data['upcoming'] = 'Upcoming Events';
			$data['media'] = 'Media';
			$data['about'] = 'About';
			$data['contact'] = 'Contact';
			//'title' => ucfirst($page);
			
			
			$data['title'] = ucfirst($page); //Capitalize the first letter
				
			$this->load->helper('html');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}

	}


/* End of file pages.php */
/* Location: ./application/controllers/pages.php */