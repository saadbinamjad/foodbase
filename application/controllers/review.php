<?php

class Review extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function comment(){
	  $this->load->model('show_ordered_model');
      $data["results1"]= $this->show_ordered_model->showallmodel();
      $this->load->view('home_header');
      $this->load->view('comment_view', $data);


	}
 }

?>
