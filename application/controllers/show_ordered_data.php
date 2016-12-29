<?php

class Show_ordered_data extends CI_Controller {
 
     public function ordered_data(){

    
        $this->load->model("show_ordered_model");
        $id= $this->uri->segment(3);

        $data["results"] = $this->show_ordered_model->showallmodel();
 		$this->load->view('order_success_view');
 		$this->load->view('home_header');
 		
        $this->load->view('navpanel', $data);

           
    }
       
}

?>

