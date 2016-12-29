<?php

	class Update_users_model extends CI_Model{
		function get_users_details($id){
			$this->load->database();
            $this->db->select('*');
            $this->db->from('users');
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
	        	'password'=> $this->input->post('password'),
	        	'email'=>$this->input->post('email'),
	        	'mobile'=>$this->input->post('mobile'),
	        	'address'=>$this->input->post('address'),
	        	);
     		
     		$this->db->where('id', $id);
     		$this->db->update('users', $data);
	       		

	}

}


?>
