<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Login_index extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('encrypt');
        $this->load->library('session');
        $this->check_isvalidated();
    }
    
    public function index(){
        $data['title']='Login';
        $this->load->view('templates/header');
        $this->load->view('login/login_success');
        $this->load->view('templates/footer');
        //echo 'Come to login_index';
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 }
 ?>