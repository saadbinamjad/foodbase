<?php
class Save_user_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	 
	        $data= array(
	        	'username'=>$this->input->post('username'),
	        	'password'=>$this->input->post('password'),
	        	'name'=>$this->input->post('name'),
	        	'email'=>$this->input->post('email'),
	    'mobile'=>$this->input->post('mobile'),
	    'address'=>$this->input->post('address'),
	    
	    	);
			
			$this->db->insert('users', $data);
	 		
			}
	}


?>