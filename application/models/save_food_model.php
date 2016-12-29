<?php
class Save_food_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	
		$this->load->helper(array('form', 'url'));
		//$this->load->view('upload_form', array('error' => ' ' ));
	    error_reporting(E_ALL);
		
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '';
		$config['max_width']  = '';
		$config['max_height']  = '';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		//	$this->load->view('upload_form', $error);
			}
		else{
			$data = array('upload_data' => $this->upload->data());
			$image= $data['upload_data']['file_name'];
			$image1= $_SERVER['DOCUMENT_ROOT'].'/upload/'.$image;   

		    $mine['image_library'] = 'gd2';
			$mine['source_image'] = $image1;
			$mine['create_thumb'] = TRUE;
			$mine['maintain_ratio'] = TRUE;
			$mine['new_image'] = $_SERVER['DOCUMENT_ROOT'].'/upload/';
			$mine['thumb_marker'] = '_thumb';
			$mine['width'] = '75';
			$mine['height'] = '50';
		    $this->load->library('image_lib', $mine);
			/*	if ( ! $this->image_lib->resize()){
			    echo $this->image_lib->display_errors();
				}
			else{
				echo 'success';
				}

			*/        
	        $data= array('food_id'=> $this->input->post('food_id'),
	        	'name'=>$this->input->post('name'),
	        	'category'=>$this->input->post('category'),
	        	'price'=>$this->input->post('price'),
	        	'info'=>$this->input->post('info'),
	    	'image'=>$image);
			
			$this->db->insert('food', $data);
	 		
	        
			}
	}
}

?>