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
			$query = $this->mongo_db->order_by(array('date' => -1))->get('news');
			return $query;
		}
		
		$query = $this->mongo_db->where(array('_id' => new MongoId($id)))->get('news');
		return $query;
	}

	public function set_news()
	{
		$this->load->helper('url');
		$date = new MongoDate();
		
		$data = array(
			'title' => $this->input->post('title'),
			'date' => $date,
			'text' => $this->input->post('text')
		);
		
		return $this->mongo_db->insert('news', $data);
	}

	public function delete_news($id)
	{	
		$this->mongo_db->where(array('_id'=> new MongoId($id)))->delete('news');
	}

    public function insert_comment($id)
    {
        if(!empty($_POST))
        {
        	$date = new MongoDate();
            $name = $this->input->post('name');
            $email    = $this->input->post('email');
            $text = $this->input->post('text');
            
            $commentArray = array(
              'name' =>   $name,
              'date' => $date,
              'email'    =>   $email,
              'text'  =>   $text              
            );
            $this->mongodb->where(array('_id'=> new MongoId($id)))->push('comments',$commentArray)->update('news');
            return $this->returnMarkup($name,$email,$text);
         }
       
        
    }
     private function returnMarkup($name,$email,$text)
     {
         
         return '<div><p>Username : '.$name.'</p>
                <p>email : '.$email.'</p>
                <p>Message : '.$text.'</p>
        </div>';
     }

}
