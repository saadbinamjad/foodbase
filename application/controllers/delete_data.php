<?php 

class Delete_data extends CI_Controller{
	function delete(){
		$burger_id = $this->uri->segment(3);
		$this->load->model('delete_model');
		$this->delete_model->delete_burger_id($burger_id);
		$this->load->view('delete_view');
	}
}

?> 