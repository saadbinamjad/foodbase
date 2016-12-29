<?php

class Show_admin_model extends CI_Model
{
   
    public function record_count() {
        return $this->db->count_all('admin');
    }
 
   function showallmodel($limit, $start){
            $this->db->limit($limit, $start);
            $this->load->database();
            $query= $this->db->get('admin');
            return $query->result();
    }

}
?>