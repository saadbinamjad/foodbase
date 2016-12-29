<?php 

class Delete_order_data extends CI_Controller{
	
     public function delete(){
        
   	 
     $session_data = $this->session->userdata('logged_in');
    $id = $this->uri->segment(3);
		$this->load->model('delete_order_model');
		$this->delete_order_model->delete_order_id($id);
       $id= $this->uri->segment(3);
 $this->load->model("show_ordered_model");
        $data["results"] = $this->show_ordered_model->showallmodel();
    

        //load the model
       $this->load->view('navpanel', $data);
    
    $this->load->view('home_header');
    $this->load->view('order_success_view');
  
    

     
	}
   
}

?> 