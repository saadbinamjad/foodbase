<?php

	class Delete_order_model extends CI_Model{
		function delete_order_id($id){
			$this->db->where('id', $id);
    		$this->db->delete('order');
    	
    		   		
		}

	}
?>
