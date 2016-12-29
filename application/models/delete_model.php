<?php

	class Delete_model extends CI_Model{
		function delete_burger_id($burger_id){
			$this->db->where('burger_id', $burger_id);
    		$this->db->delete('burger_size');
    		$this->db->where('burger_id', $burger_id);
    		$this->db->delete('burger');
    		   		
		}

	}
?>
