<?php

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
	  $this->load->view('homepage');
	  //$this->load->view('banner');
	 // $this->load->view('navpanel');
	 // $this->load->view('login_view');
	
	}
}
?>
