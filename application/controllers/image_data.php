<?php

	class Image_data extends CI_Controller{
		public function view_image($id){
     	$this->load->model('image_view_model');
	    $data['image'] = $this->image_view_model->get_image();
	    $this->load->view('Image_view',$data);

	}
}
?>
