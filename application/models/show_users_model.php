<?php

class Show_users_model extends CI_Model
{
   
    public function record_count() {
        return $this->db->count_all('users');
    }
 
   function showallmodel($limit, $start){
            $this->db->limit($limit, $start);
            $this->load->database();
            $query= $this->db->get('users');
            return $query->result();
    }

}
?>