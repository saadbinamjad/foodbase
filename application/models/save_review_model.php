<?php
class Save_review_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	
		
		//$this->load->view('upload_form', array('error' => ' ' ));
	   
				        
	        $data= array('name'=> $this->input->post('name'),
	        	'burger_id'=> $this->input->post('burger_id'),
	        	'chicken_id'=> $this->input->post('burger_id'),
	        	'drinks_id'=> $this->input->post('burger_id'),
	        	'pizza_id'=> $this->input->post('burger_id'),
	           	'customer_name'=>$this->input->post('customer_name'),
	        	'review'=>$this->input->post('review'));
			
			$this->db->insert('reviews', $data);
	 		
	            		
			
	}
}

?>