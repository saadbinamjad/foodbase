<?php 

class Update_admin_data extends CI_Controller{
	
     public function update(){
         if($this->session->userdata('logged_in'))
       	 {
          $data = $this->session->userdata('logged_in');
   $this->load->view('admin_header', $data);
          $id = $this->uri->segment(3);
      		$this->load->model('update_admin_model');
      		$data["results"]=$this->update_admin_model->get_admin_details($id);
      		
          $this->load->view('update_admin_view', $data);
        	}
   
   else
   	{
     //If no session, redirect to login page
      redirect('login', 'refresh');
   	}
      
   
}
    public function update_admin_edit(){
      if($this->session->userdata('logged_in'))
     {
        $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header, $data');
        $this->load->model('update_users_model');
        $this->update_admin_model->update_model();
        $this->load->view('success_view');

   }
   
   else
    {
     //If no session, redirect to login page
     redirect('login', 'refresh');
    }

  
}
}
?> 