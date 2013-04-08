<?php
class News_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongo_db');
	}
	
	public function get_news($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->mongo_db->get('news');
			return $query;
		}
		
		$query = $this->mongo_db->where(array('_id' => new MongoId($id)))->get('news');
		return $query;
	}

	public function set_news()
	{
		$this->load->helper('url');
		
		$data = array(
			'title' => $this->input->post('title'),
			"date" => date('m/d/Y H:M'),
			'text' => $this->input->post('text')
		);
		
		return $this->mongo_db->insert('news', $data);
	}

}
