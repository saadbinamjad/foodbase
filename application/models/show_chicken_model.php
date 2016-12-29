<?php

class Show_chicken_model extends CI_Model
{
   
    public function record_count() {
        return $this->db->count_all('chicken');
    }
 
   function showallmodel($limit, $start){
                  
            $this->db->limit($limit, $start);
            $this->load->database();
           
            $this->db->select('chicken.*, chicken_size.*');
            $this->db->from('chicken');
            $this->db->join('chicken_size', 'Chicken.chicken_id=chicken_size.chicken_id', 'inner');
            $query= $this->db->get();


            $data= $query->result();
            return $data;

    }

}
?>