<?php
// ini_set('display_errors', 'On');
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);
// require_once('FirePHPCore/FirePHP.class.php');
// ob_start();
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
		$this->load->library('encrypt');
       	$this->load->library('session');
		
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}
	public function view($id)
	{
		$this->load->library('form_validation');
		$data['news_item'] = $this->news_model->get_news($id);
		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['title'] = $data['news_item'][0]['title'];

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{
		// $firephp = FirePHP::getInstance(true);
 
		// $var = 'outside';
		 
		// $firephp->log($var,'test');
		if(isset($id) && !empty($id))
        {
        	//echo "inside";
			$this->news_model->delete_news($id);
		}
	}

	public function edit($id)
	{
		$this->tinyMce = '
		<!-- TinyMCE -->
		<script type="text/javascript" src="'. base_url().'assets/js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
			tinyMCE.init({
				// General options
				mode : "textareas",
				theme : "simple"
			});
		</script>
		<!-- /TinyMCE -->
		';
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Edit a news item';
		$data['news_item'] = $this->news_model->get_news($id);

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('news/create',$data);			
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->news_model->update_news($id);
			redirect('news/'.$id, 'refresh');
		}
	}
	
	public function create()
	{
		$this->tinyMce = '
			<!-- TinyMCE -->
			<script type="text/javascript" src="'. base_url().'assets/js/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
					// General options
					mode : "textareas",
					theme : "simple"
				});
			</script>
			<!-- /TinyMCE -->
			';
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a news item';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('news/create');			
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->news_model->set_news();
			redirect('news/', 'refresh');
		}
	}

	//insert comments
	function insertcomments($id)
    {
    	echo $this->news_model->insert_comment($id);
    }
}