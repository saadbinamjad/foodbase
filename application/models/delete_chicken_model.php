<?php

	class Delete_chicken_model extends CI_Model{
		function delete_chicken_id($chicken_id){
			$this->db->where('chicken_id', $chicken_id);
    		$this->db->delete('chicken_size');
    		$this->db->where('chicken_id', $chicken_id);
    		$this->db->delete('chicken');
    		   		
		}

	}
?>
