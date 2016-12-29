<?php

class Show_all_data extends CI_Controller {
 
     public function pagination_data(){

    if($this->session->userdata('logged_in'))
     {
        $session_data = $this->session->userdata('logged_in');
      $this->load->helper("url");
        $this->load->model("show_all_model");
        $this->load->library("pagination");
        
        $config = array();
        $config["base_url"] = base_url() . "index.php/show_all_data/pagination_data";
        $config["total_rows"] = $this->show_all_model->record_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->show_all_model->showallmodel($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view("show_all_view", $data);
    }
   
   else
    {
     //If no session, redirect to login page
     redirect('login', 'refresh');
    }
       
}
}

?>

