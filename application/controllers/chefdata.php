<?php

class Chefdata extends CI_Controller {
 
     public function chef(){
      $this->load->model('bill_model');
      $data["results"]=$this->bill_model->total_sum();

 
      $this->load->model('show_ordered_model');
      $data["results1"]= $this->show_ordered_model->showallmodel1();

      //$this->load->model('bill_save_model', $data);
      $this->load->view('home_header', $data);
      $this->load->view('chef_view', $data);
   



      

   
   
         
}
}
?>
