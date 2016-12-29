<?php

class Show_admin_chicken_data extends CI_Controller {
 
     public function pagination_data(){
    $data = $this->session->userdata('logged_in');
     $this->load->view('admin_header', $data);
      $this->load->helper("url");
        $this->load->model("show_chicken_model");
        $this->load->library("pagination");
        
        $config = array();
        $config["base_url"] = base_url() . "index.php/show_data_admin/chicken";
        $config["total_rows"] = $this->show_chicken_model->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->show_chicken_model->showallmodel($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       
        $this->load->view("show_chicken_view_admin", $data);
        
    
       
}
}

?>

