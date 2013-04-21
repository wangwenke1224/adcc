<?php
class About_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongo_db');
	}
	
	
	public function get_actors($id) //call get_about function
	{
		if ($id == "all_actors")
		{
			$query = $this->mongo_db->get('actors');
			return $query;
		}
		else{
			//$query = $this->mongo_db->where(array('_id' => new MongoId($id)))->get('actors');
			//return $query;
			//$query = $this->mongo_db->findOne(array('_id' => new MongoId($id)));
			//$query = $this->mongo_db->where_in('_id', $id)->get('actors');
			$query = $this->mongo_db->where(array('_id' => $id))->get('actors');
			return $query;
		}
	}

	public function get_media($id) //call get_media function
	{
		if ($id == "all_actors")
		{
			$media_query = $this->mongo_db->get('media');
			return $media_query;
		}
		else{
			//$query = $this->mongo_db->where(array('_id' => new MongoId($id)))->get('actors');
			//return $query;
			//$query = $this->mongo_db->findOne(array('_id' => new MongoId($id)));
			//$query = $this->mongo_db->where_in('_id', $id)->get('actors');
			$media_query = $this->mongo_db->where(array('_id' => $id))->get('media');
			return $media_query;
		}
	}
	
	
	
	public function set_about($id)
	{
		$this->load->helper('url');
		$this->load->helper('inflector');
		$this->load->helper('string');
		
		//$str = $this->input->post('name');
		//$str=strtolower(str_replace(" ","",$str)); 
		//$id=$str;

		$update_data = array(	
			'fullname' => $this->input->post('name'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'contact' => $this->input->post('contact'),
			"dob" => date('m/d/Y'),
			'birthplace'=>$this->input->post('birthplace'),
			'gender' => $this->input->post('gender'),
			'type' => $this->input->post('type'),
			"joindate" => date('Y-m-d'),
			'intro' => $this->input->post('intro'),
			'resume' => $this->input->post('resume'),
			'link' =>$this->input->post('video_link'),
			'status'=> $this->input->post('status')
			
		);
		
		// return $update_data;

		return $this->mongo_db->where(array('_id' => $id))->set($update_data)->update('actors');
		

	}

	public function delete_actors($id)
	{	
		$this->mongo_db->where(array('_id'=> $id))->delete('actors');
	}

}
	






