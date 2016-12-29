<?php

class Show_burger_model extends CI_Model
{
   
    public function record_count() {
 		return $this->db->count_all('burger');
        }
 
   function showallmodel($limit, $start){
                    
            $this->db->limit($limit, $start);
            $this->load->database();
           
            $this->db->select('burger.*, burger_size.*');
            $this->db->from('burger');
            //$this->db->join('burger_calories', 'burger.burger_id=burger_calories.burger_id', 'inner');
            //$this->db->join('reviews', 'burger.burger_id=reviews.burger_id', 'inner');
            $this->db->join('burger_size', 'burger.burger_id=burger_size.burger_id', 'inner');
           
            $query= $this->db->get();


            $data= $query->result();
            return $data;

   
    }

}
?>