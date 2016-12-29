<?php 

class Save_login_data extends CI_Controller {
 	function save(){
		$this->load->model('login_model');
		$this->login_model->save_model();
		$this->load->view('success_view');
	}
}

?>

