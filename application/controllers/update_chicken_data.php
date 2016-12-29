<?php 

class Update_chicken_data extends CI_Controller{
	
     public function update(){
         if($this->session->userdata('logged_in'))
       	 {
          $data = $this->session->userdata('logged_in');
   $this->load->view('admin_header', $data);
          $chicken_id = $this->uri->segment(3);
      		$this->load->model('update_chicken_model');
      		$data["results"]=$this->update_chicken_model->get_chicken_details($chicken_id);
      		
          $this->load->view('update_chicken_view', $data);
        	}
   
   else
   	{
     //If no session, redirect to login page
      redirect('login', 'refresh');
   	}
      
   
}
    public function update_chicken_edit(){
      if($this->session->userdata('logged_in'))
     {
         $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header, $data');
        $this->load->model('update_chicken_model');
        $this->update_chicken_model->update_model();
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