<?php 

class Checkout extends CI_Controller {
 	function index(){
 	 $session_data = $this->session->userdata('logged_in');
     $this->load->model('show_ordered_model');
     $data["results1"]= $this->show_ordered_model->showallmodel();
     $this->load->model->checkout_model->save_model($data);
     $this->load->view('login_sview');

  }
   
 		

} 	
?>