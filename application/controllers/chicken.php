<?php

class Chicken extends CI_Controller {
 
     public function Chicken_input(){
     if($this->session->userdata('logged_in'))
   	 {
      $data = $this->session->userdata('logged_in');
     $this->load->view("admin_header", $data);
     $this->load->view("chicken_input_view");
   	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('login', 'refresh');
   	}
       
}
}
?>
