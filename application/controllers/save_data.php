<?php 

class Save_data extends CI_Controller {
 	function save(){
		$this->load->model('save_burger_model');
		$this->save_data_model->save_model();
		$this->load->view('success_view');
	}
}

?>
