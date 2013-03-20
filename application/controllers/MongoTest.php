<?php
 
class MongoTest extends CI_Controller {
 
    public function index() {
        $this->load->model('usermodel');
        $result = $this->usermodel->createUser("myuser", "mypassword");
 
        $this->load->view('mongodbtest_view');
    }
 
}
 
?>