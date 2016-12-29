<?php

class Pizza extends CI_Controller {
 
     public function pizza_input(){
         if($this->session->userdata('logged_in'))
   	 {
      $data = $this->session->userdata('logged_in');
     $this->load->view("admin_header", $data);
     $this->load->view("pizza_input_view");
   	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('', 'refresh');
   	}
       
}
}
    
?>
