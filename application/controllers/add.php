<?php 

class Add extends CI_Controller {
 	function index(){
 		 if($this->session->userdata('logged_in'))
   	 {
     $data = $this->session->userdata('logged_in');
     $this->load->view("admin_header", $data);
     $this->load->view('add_view');
   	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('', 'refresh');
   	}
 		
   }
 
} 	
?>