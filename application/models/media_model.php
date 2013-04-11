<?php
class Media_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongo_db');
	}
	
	public function get_media($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->mongo_db->get('media');
			return $query;
		}
		
		$query = $this->mongo_db->where(array('_id' => $id))->get('media');
		return $query;
	}

	public function get_programs($media)
	{
		$query = $this->mongo_db->where_in('_id', $media['program_id'])->get('program_id');
		return $query;
	}
	
	public function get_actors($media)
	{
		$query = $this->mongo_db->where_in('_id', $media['actors'])->get('actors');
		return $query;
	}
}
