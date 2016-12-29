<?php 

class Delete_burger_data extends CI_Controller{
	
     public function delete(){
         if($this->session->userdata('logged_in'))
   	 {
     $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header', $data);
     $burger_id = $this->uri->segment(3);
		$this->load->model('delete_burger_model');
		$this->delete_burger_model->delete_burger_id($burger_id);
    
		$this->load->view('delete_burger_view');
	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('login', 'refresh');
   	}
       
}
}

?> 