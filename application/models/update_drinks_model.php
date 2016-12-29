<?php

	class Update_drinks_model extends CI_Model{
		function get_drinks_details($drinks_id){
			$this->load->database();
            $this->db->select('drinks.*, drinks_size.*');
            $this->db->from('drinks');
            $this->db->where('drinks.drinks_id', $drinks_id);
            $this->db->join('drinks_size', 'drinks.drinks_id=drinks_size.drinks_id', 'inner');
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

		    $hello= $this->input->post('drinks_id');

		   	$data1= array('drinks_id'=> $hello,
	        	'regular'=> $this->input->post('regular'),
	        	'large'=>$this->input->post('large'));
     		
     		$this->db->where('drinks_id', $hello);
     		$this->db->update('drinks_size', $data1);
	        
	 		
	        			

     		 $data= array('drinks_id'=> $this->input->post('drinks_id'),
	        	'name'=>$this->input->post('name'),
	    	'image'=>$image);
			
			$this->db->where('drinks_id', $hello);
	 		$this->db->update('drinks', $data);
		

	}

	}
}

?>
