<?php

	class Delete_pizza_model extends CI_Model{
		function delete_pizza_id($pizza_id){
			$this->db->where('pizza_id', $pizza_id);
    		$this->db->delete('pizza_size');
    		$this->db->where('pizza_id', $pizza_id);
    		$this->db->delete('pizza');
    		   		
		}

	}
?>
