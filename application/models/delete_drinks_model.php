<?php

	class Delete_drinks_model extends CI_Model{
		function delete_drinks_id($drinks_id){
			$this->db->where('drinks_id', $drinks_id);
    		$this->db->delete('drinks_size');
    		$this->db->where('drinks_id', $drinks_id);
    		$this->db->delete('drinks');
    		   		
		}

	}
?>
