<?php 

class Save_chicken_data extends CI_Controller {
 	function save(){
		 $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
		$this->load->model('save_chicken_model');
		$this->save_chicken_model->save_model();
		$this->load->view('success_view');
	}
}

?>