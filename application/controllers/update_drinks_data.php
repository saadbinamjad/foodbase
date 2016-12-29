<?php 

class Update_drinks_data extends CI_Controller{
	
     public function update(){
         if($this->session->userdata('logged_in'))
       	 {
         $data = $this->session->userdata('logged_in');
   $this->load->view('admin_header', $data);
          $drinks_id = $this->uri->segment(3);
      		$this->load->model('update_drinks_model');
      		$data["results"]=$this->update_drinks_model->get_drinks_details($drinks_id);
      		
          $this->load->view('update_drinks_view', $data);
        	}
   
   else
   	{
     //If no session, redirect to login page
      redirect('login', 'refresh');
   	}
      
   
}
    public function update_drinks_edit(){
      if($this->session->userdata('logged_in'))
     {
        $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header, $data');
        $this->load->model('update_drinks_model');
        $this->update_drinks_model->update_model();
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