<?php
 
class UserModel extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 
    function getUser($username) {
        $this->load->library('mongo_db');
 
        $user = $this->mongo_db->get_where('users', array('username' => $username));
        return $user;
    }
 
    function createUser($username, $password) {
        $this->load->library('mongo_db');
        $user = array('username' => $username,
            'password' => $password);
 
        $this->mongo_db->insert('users', $user);
    }
 
}
 
?>