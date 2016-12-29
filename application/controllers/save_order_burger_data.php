<?php
class Save_order_burger_data extends CI_Controller{

	function save(){
            $this->load->view('home_header');
    
        $this->load->model('save_order_burger_model');
        $this->save_order_burger_model->save_model();
      
         $id= $this->uri->segment(3);
 $this->load->model("show_ordered_model");
        $data["results"] = $this->show_ordered_model->showallmodel();
       $this->load->view('navpanel', $data);
        $this->load->view('order_success_view');
    

        //load the model

    }
    function save1(){
        $this->load->model('save_order_burger_model');
        $this->save_order_burger_model->save_model1();
      
         $id= $this->uri->segment(3);
 $this->load->model("show_ordered_model");
        $data["results"] = $this->show_ordered_model->showallmodel();
       
      $this->load->model('bill_model');
      $data["results"]=$this->bill_model->total_sum();

 
      $this->load->model('show_ordered_model');
      $data["results1"]= $this->show_ordered_model->showallmodel();

      //$this->load->model('bill_save_model', $data);
      $this->load->view('home_header');
      $this->load->view('billing_view', $data);
   

        //load the model

    }
}

?>
