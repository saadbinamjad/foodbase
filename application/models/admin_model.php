<?php
class Admin_model extends CI_Model {

	function save_model(){
	
	 		   $data= array(
	        	'name'=>$this->input->post('name'),
	        	'username'=>$this->input->post('username'),
	        	'password'=>$this->input->post('password'),
	        	
	       	);
			
			$this->db->insert('admin', $data);
	 		
	 }

}


?>