<?php

class Show_sales_model extends CI_Model
{
   
    public function record_count() {
 		return $this->db->count_all('sales');
        }
 
   function showallmodel($limit, $start){
                    
            $this->db->limit($limit, $start);
            $this->load->database();
           
            $this->db->select('*');
            $this->db->from('sales');
         
            $query= $this->db->get();


            $data= $query->result();
            return $data;

   
    }

}
?>