<?php 

class Delete_users_data extends CI_Controller{
	
     public function delete(){
         if($this->session->userdata('logged_in'))
       	 {
          $data = $this->session->userdata('logged_in');
   $this->load->view('admin_header', $data);
          $id = $this->uri->segment(3);
      		$this->load->model('delete_users_model');
      		$data["results"]=$this->delete_users_model->delete_model($id);
      		
          $this->load->view('delete_users_view', $data);
        	}
   
   else
   	{
     //If no session, redirect to login page
      redirect('login', 'refresh');
   	}
      
   
}
}
?> 