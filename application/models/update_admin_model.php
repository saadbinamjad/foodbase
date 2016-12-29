<?php

	class Update_admin_model extends CI_Model{
		function get_admin_details($id){
			$this->load->database();
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('id', $id);
            $query= $this->db->get();
            $data= $query->result();
            return $data;
    		
    		   		
		}

	function update_model(){

		

		    $id= $this->input->post('id');

		   	$data= array('id'=> $id,
				'name' => $this->input->post('name'),
	        	'username'=> $this->input->post('username'),
	        	'password'=> $this->input->post('password')
	        	);
     		
     		$this->db->where('id', $id);
     		$this->db->update('admin', $data);
	       		

	}

}


?>
