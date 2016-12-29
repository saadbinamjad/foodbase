<?php
class Save_order_drinks_data extends CI_Controller{

	function save(){
      $this->load->view('home_header');
        $this->load->model('save_order_drinks_model');
        $this->save_order_drinks_model->save_model();
        $this->load->view('order_success_view');
        $id= $this->uri->segment(3);
        $this->load->model("show_ordered_model");
        $data["results"] = $this->show_ordered_model->showallmodel();
 		

        //load the model
     
       $this->load->view('navpanel', $data);

       // $this->load->view('navpanel');

    }
}

?>
