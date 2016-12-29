<?php
class Save_order_pizza_data extends CI_Controller{

	function save(){

      $this->load->view('home_header');
        $this->load->model('save_order_pizza_model');
        $this->save_order_pizza_model->save_model();
        $this->load->view('order_success_view');
        $this->load->view('home_header');
       // $this->load->view('navpanel');   $id= $this->uri->segment(3);
 $this->load->model("show_ordered_model");
        $data["results"] = $this->show_ordered_model->showallmodel();
 		

        //load the model
     
       $this->load->view('navpanel', $data);


    }
}

?>
