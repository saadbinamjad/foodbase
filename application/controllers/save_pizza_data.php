<?php 

class Save_pizza_data extends CI_Controller {
 	function save(){
		 $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
		$this->load->model('save_pizza_model');
		$this->save_pizza_model->save_model();
		$this->load->view('admin_header');
		$this->load->view('success_view');
	}
}

?>