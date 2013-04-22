<?php
class Media_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//make database available
		$this->load->library('mongo_db');
		
	}
	
	public function get_media($id = FALSE)
	{
		// if the variable is empty, get all media records
		if ($id === FALSE)
		{
			//fetching the media table
			$query = $this->mongo_db->order_by(array('date' => -1))->get('media');
			return $query;
		}
		
		// else, only get record item where $id = $_id
		$query = $this->mongo_db->where(array('_id' => $id))->get('media');
		return $query;
	}

	public function set_media() {
		$this->load->helper('url');
		
		// strips down the string you pass it, replacing all spaces
		// by dashes (-) and makes sure everything is in lowercase characters
		$id = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'id' => $id,
			'name' => $this->input->post('name'),
			'link' => $this->input->post('link'),
			'year' => $this->input->post('year'),
			'actors' => $this->input->post('actors')
		);
		
		return $this->mongo_db->insert('media', $data);
	}
	
	public function get_actors($media)
	{
		$query = $this->mongo_db->where_in('_id', $media['actors'])->get('actors');
		return $query;
	}
}
