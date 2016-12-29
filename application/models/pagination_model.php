<?php

class Show_all_model extends CI_Model{
   
    public function record_count(){
        return $this->db->count_all("employees");
    }
 
    public function fetch_employees($limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get("employees");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
                }
            return $data;
            }
        return false;
   }
}
?>