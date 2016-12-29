<?php 

class Update_pizza_data extends CI_Controller{
	
     public function update(){
         if($this->session->userdata('logged_in'))
       	 {
           $data = $this->session->userdata('logged_in');
    $this->load->view('admin_header', $data);
          $pizza_id = $this->uri->segment(3);
      		$this->load->model('update_pizza_model');
      		$data["results"]=$this->update_pizza_model->get_pizza_details($pizza_id);
      		
          $this->load->view('update_pizza_view', $data);
        	}
   
   else
   	{
     //If no session, redirect to login page
      redirect('login', 'refresh');
   	}
      
   
}
    public function update_pizza_edit(){
      if($this->session->userdata('logged_in'))
     {
         $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header, $data');
        $this->load->model('update_pizza_model');
        $this->update_pizza_model->update_model();
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