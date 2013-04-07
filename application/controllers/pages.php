<?php

	class Pages extends CI_Controller{
		
		public function view($page = 'home'){
			
			if (!file_exists('application/views/pages/'.$page.'.php')) {
				show_404();
			}
						
			$data['news'] = 'News';
			$data['upcoming'] = 'Upcoming Events';
			$data['media'] = 'Media';
			$data['about'] = 'About';
			$data['contact'] = 'Contact';
			//'title' => ucfirst($page);
			
			
			//['title'] = ucfirst($page); //Capitalize the first letter
				
			$this->load->helper('html');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}

//for recruitment input
 		function input(){
    		$this->load->helper('form');  
    		$this->load->helper('html');      
    		$this->load->model('recruitment_model');
    		
    		if($this->input->post('mysubmit'))
    		{
        	$this->books_model->entry_insert();}   
		    $data = $this->books_model->general();
		    $this->load->view('books_input',$data);  
			 }}



	}
?>

<!--/* End of file pages.php */-->
<!--/* Location: ./application/controllers/pages.php */-->