<?php

class Show_data_admin extends CI_Controller {
 
    public function burger(){

  
        
        $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
        $this->load->helper("url");
        $this->load->model("show_burger_model");
        $this->load->library("pagination");
        
        $config = array();
        
        $config["base_url"] = base_url() . "index.php/show_admin_burger_data/pagination_data";
        $config["total_rows"] = $this->show_burger_model->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->show_burger_model->showallmodel($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       
        $this->load->view("show_burger_view_admin", $data);
        
   
}

    public function chicken(){

  
     
        $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
        $this->load->helper("url");
        $this->load->model("show_chicken_model");
        $this->load->library("pagination");
        
        $config = array();
        
        $config["base_url"] = base_url() . "index.php/show_admin_chicken_data/pagination_data";
        $config["total_rows"] = $this->show_chicken_model->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->show_chicken_model->showallmodel($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
       
        $this->load->view("show_chicken_view_admin", $data);
        
   
}

    public function drinks(){

  
        $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
        $this->load->helper("url");
        $this->load->model("show_drinks_model");
        $this->load->library("pagination");
        
        $config = array();
        
        $config["base_url"] = base_url() . "index.php/show_admin_drinks_data/pagination_data";
        $config["total_rows"] = $this->show_drinks_model->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->show_drinks_model->showallmodel($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        
        $this->load->view("show_drinks_view_admin", $data);
        
   
}

      public function pizza(){

  
        $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
        $this->load->helper("url");
        $this->load->model("show_pizza_model");
        $this->load->library("pagination");
        
        $config = array();
        
        $config["base_url"] = base_url() . "index.php/show_pizza_data/pagination_data";
        $config["total_rows"] = $this->show_pizza_model->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->show_pizza_model->showallmodel($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
     
        $this->load->view("show_pizza_view_admin", $data);
        
   
}
}

?>

