<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->helper(array('form'));
	
		$this->load->view('login_view');
			$this->load->view('home_header');
	}
	 function logout()
 {
   $this->session->unset_userdata('logged_in');
   $this->load->database();
   $this->db->empty_table('order'); 
   session_destroy();
   redirect('');
 }
 
}
?>
