<?php 

class Save_admin_data extends CI_Controller {
 	function save(){
 		$data = $this->session->userdata('logged_in');
     	$this->load->view('admin_header', $data);
		$this->load->model('admin_model');
		$this->admin_model->save_model();
		$this->load->view('success_view');
	}
}

?>

