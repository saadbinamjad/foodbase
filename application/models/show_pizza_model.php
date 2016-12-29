<?php

class Show_pizza_model extends CI_Model
{
   
    public function record_count() {
        return $this->db->count_all('pizza');
    }
 
   function showallmodel($limit, $start){
                  
            $this->db->limit($limit, $start);
            $this->load->database();
           
            $this->db->select('pizza.*, pizza_size.*');
            $this->db->from('pizza');
            $this->db->join('pizza_size', 'pizza.pizza_id=pizza_size.pizza_id', 'inner');
            $query= $this->db->get();


            $data= $query->result();
            return $data;

      }

}
?>