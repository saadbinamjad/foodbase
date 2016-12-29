<?php 

class Update_burger_data extends CI_Controller{
	
     public function update(){
         if($this->session->userdata('logged_in'))
       	 {
          $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header', $data);
          $burger_id = $this->uri->segment(3);
      		$this->load->model('update_burger_model');
      		$data["results"]=$this->update_burger_model->get_burger_details($burger_id);
      		
          $this->load->view('update_burger_view', $data);
        	}
   
   else
   	{
     //If no session, redirect to login page
      redirect('login', 'refresh');
   	}
      
   
}
    public function update_burger_edit(){
      if($this->session->userdata('logged_in'))
     {
        $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header', $data);
        $this->load->model('update_burger_model');
        $this->update_burger_model->update_model();
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