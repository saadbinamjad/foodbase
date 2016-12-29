<?php 

class Delete_chicken_data extends CI_Controller{
	
     public function delete(){
         if($this->session->userdata('logged_in'))
   	 {
     $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
     $chicken_id = $this->uri->segment(3);
		$this->load->model('delete_chicken_model');
		$this->delete_chicken_model->delete_chicken_id($chicken_id);
		$this->load->view('delete_chicken_view');
	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('login', 'refresh');
   	}
       
}
}

?> 