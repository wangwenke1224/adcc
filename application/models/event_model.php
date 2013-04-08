<?php
class Event_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongo_db');
	}
	
	public function get_event($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->mongo_db->get('events');
			return $query;
		}
		
		$query = $this->mongo_db->where(array('_id' => $id))->get('events');
		return $query;
	}

	public function get_programs($event)
	{
		$query = $this->mongo_db->where_in('_id', $event['programs'])->get('programs');
		return $query;
	}
}
