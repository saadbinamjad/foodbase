<?php 

class Delete_drinks_data extends CI_Controller{
	
     public function delete(){
         if($this->session->userdata('logged_in'))
   	 {
     $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
     $drinks_id = $this->uri->segment(3);
		$this->load->model('delete_drinks_model');
		$this->delete_drinks_model->delete_drinks_id($drinks_id);
		$this->load->view('delete_drinks_view');
	}
   
   else
   	{
     //If no session, redirect to login page
     redirect('login', 'refresh');
   	}
       
}
}

?> 