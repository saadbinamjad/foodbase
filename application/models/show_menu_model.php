<?php

class Show_menu_model extends CI_Model
{
   
    public function record_count() {
 		$a= $this->db->count_all('burger');
 		$b= $this->db->count_all('chicken');
        $c= $this->db->count_all('pizza');
        $d= $this->db->count_all('drinks');

        $all= $a+$b+$c+$d;

        return $all;
               }
 
   function showallmodel($limit, $start){
            $this->db->limit($limit, $start);
            $this->load->database();
            $query= $this->db->get('burger, burger_size, chicken, chicken_size, drinks, drinks_size, pizza, pizza_size');
            return $query->result();

    }

}
?>