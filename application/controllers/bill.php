<?php

class Bill extends CI_Controller {
 
     public function billing(){
     	$this->load->view('home_header');
      
      $this->load->model('bill_model');
      $data["results"]=$this->bill_model->total_sum();

 
      $this->load->model('show_ordered_model');
      $data["results1"]= $this->show_ordered_model->showallmodel();
      $this->load->view('billing_view', $data);
    
      
         
}
}
?>
