<?php 

class Save_user_data extends CI_Controller {
 	function save(){
 		$data = $this->session->userdata('logged_in');
		$this->load->model('save_user_model');
		$this->save_user_model->save_model();
		$this->load->view('admin_header', $data);
		$this->load->view('success_view');
	}
}

?>