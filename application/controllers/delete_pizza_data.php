<?php 

class Delete_pizza_data extends CI_Controller{
	
     public function delete(){
         if($this->session->userdata('logged_in'))
   	 {
     $data = $this->session->userdata('logged_in');
   $this->load->view('admin_header', $data);
     $pizza_id = $this->uri->segment(3);
		$this->load->model('delete_pizza_model');
		$this->delete_pizza_model->delete_pizza_id($pizza_id);
		$this->load->view('delete_pizza_view');
	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('login', 'refresh');
   	}
       
}
}

?> 