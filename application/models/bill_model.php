
<?php

class Bill_model extends CI_Model{

	 
	function total_sum(){
		 $this->load->database();
		 $this->db->select_sum('total_price');
   		 $query = $this->db->get('order');
   		 $total_price= $query->result();
   	
  	return $total_price; 
	}

   }
?>

    