<?php 

class Save_burger_data extends CI_Controller {
 	function save(){
		 $data = $this->session->userdata('logged_in');
        $this->load->view('admin_header', $data);
		$this->load->model('save_burger_model');
		$this->save_burger_model->save_model();
		$this->load->view('success_view');
	}
}

?>