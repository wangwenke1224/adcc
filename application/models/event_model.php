<?php
// ini_set('display_errors', 'On');
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);
// require_once('FirePHPCore/FirePHP.class.php');
// ob_start();
	
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

	public function set_events()
	{
		// $firephp = FirePHP::getInstance(true);
		$this->load->helper('url');
		$query = $this->mongo_db->order_by(array('_id' => -1))->get('events');
		$eventstr='';
		$eventid = (int)$query[0]['_id'];
		if ($eventid<9) {
			$eventstr='0'.($eventid+1);
		}		
		else $eventstr=$eventid+1;
		// $firephp->log($eventid,'id'); 
		// $firephp->log($eventstr,'str'); 
		$programids = array();
		foreach($this->input->post() as $name => $value)
		{
			// $firephp->log($name,'programname'); 
		   if(strpos($name, 'programname')===0 && !empty($value)) {	
		   		
		   		preg_match_all('!\d+!', $name, $matches);
		   		if ($matches[0][0]<10) {
		   			$id = $eventstr.'0'.$matches[0][0];
		   		}
				else $id = $eventstr.$matches[0][0];	
				// $firephp->log($id,'id');      
		      	$programname = $value;
		      	// $firephp->log($programname,'programname');
		      	$actors = $this->input->post('actors_'.$matches[0][0]);
		      	// $firephp->log($actors[0],'actors');
		      	$data_program = array(
					'_id' => $id,
					'name' => $programname,
					'actors' => $actors,
					'length' =>""
				);
				$this->mongo_db->insert('programs', $data_program);
				array_push($programids, $id);   	
		   }

		} 
		
		// $firephp->log(date('H:i',$this->input->post('starttime')->sec),'time');
		// $firephp->log($this->input->post('starttime'),'post');
		$d=DateTime::CreateFromFormat('m/d/Y',$this->input->post('date'));
		$data_event = array(
			'_id' =>(string)$eventstr,
			'name' => $this->input->post('name'),
			'date' => new MongoDate(strtotime($this->input->post('date'))),
			'startTime' => new MongoDate(strtotime($this->input->post('starttime'))),
			'intro' => $this->input->post('intro'),
			// 'place_id'
			'programs' => $programids
		);
		
		 $this->mongo_db->insert('events', $data_event);
		return $eventstr;
	}

	public function get_programs($event)
	{
		$query = $this->mongo_db->where_in('_id', $event['programs'])->get('programs');
		return $query;
	}
}
