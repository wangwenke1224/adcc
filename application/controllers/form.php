
<?php

class Site extends CI_Controller
	{
	function index()
	{
	$this->load->view('form.php');// loading form view
	}

	function insert_to_db()
		{
		$this->load->model('site_model');	
		$this->site_model->insert_to_db();
		$this->load->view('success');//loading success view
		}
	}
?>