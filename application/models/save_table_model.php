<?php
class Save_table_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	
		$this->load->helper(array('form', 'url'));
		//$this->load->view('upload_form', array('error' => ' ' ));
	    
		
		
				        
	        $data= $this->input->post('table_id');
	        
			
			}
	}


?>