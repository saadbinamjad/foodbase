<?php

class Show_ordered_model extends CI_Model
{
   
   function showallmodel(){
          
            $this->load->database();
           	$this->db->select('*');
			$this->db->from('order');
			$query= $this->db->get();
            return $query->result();
    }


	function showallmodel1(){
          
            $this->load->database();
           	$this->db->select('*');
			$this->db->from('chef_table');
			$query= $this->db->get();
            return $query->result();
    }
}
?>