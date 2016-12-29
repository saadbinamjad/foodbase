<?php

	class Update_burger_model extends CI_Model{
		function get_burger_details($burger_id){
			$this->load->database();
            $this->db->select('burger.*, burger_size.*');
            $this->db->from('burger');
            $this->db->where('burger.burger_id', $burger_id);
            $this->db->join('burger_size', 'burger.burger_id=burger_size.burger_id', 'inner');
            $query= $this->db->get();
            $data= $query->result();
            return $data;
    		
    		   		
		}

	function update_model(){

			
		$this->load->helper(array('form', 'url'));
		//$this->load->view('upload_form', array('error' => ' ' ));
	    //error_reporting(E_ALL);
		
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '';
		$config['max_width']  = '';
		$config['max_height']  = '';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
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

		    $hello= $this->input->post('burger_id');

		   	$data1= array('burger_id'=> $hello,
				'kids' => $this->input->post('kids'),
	        	'single'=> $this->input->post('single'),
	        	'doubles'=>$this->input->post('doubles'));
     		
     		$this->db->where('burger_id', $hello);
     		$this->db->update('burger_size', $data1);
	        
	 		
	        			

     		 $data= array('burger_id'=> $this->input->post('burger_id'),
	        	'name'=>$this->input->post('name'),
	        	'info'=>$this->input->post('info'),
	    	'image'=>$image);
			
			$this->db->where('burger_id', $hello);
	 		$this->db->update('burger', $data);
		

	}

	}
}

?>
