<?php

class Show_all_model extends CI_Model
{
   
    public function record_count() {
        return $this->db->count_all('burger');
    }
 
   function showallmodel($limit, $start){
            $this->db->limit($limit, $start);
            $this->load->database();
            $query= $this->db->get('burger');
            return $query->result();
    }

}
?>