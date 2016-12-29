<?php

class Show_drinks_model extends CI_Model
{
   
    public function record_count() {
        return $this->db->count_all('drinks');
    }
 
   function showallmodel($limit, $start){
            
            $this->db->limit($limit, $start);
            $this->load->database();
           
    		$this->db->select('drinks.*, drinks_size.*');
    		$this->db->from('drinks');
    		$this->db->join('drinks_size', 'drinks.drinks_id=drinks_size.drinks_id', 'inner');
    		$query= $this->db->get();


			$data= $query->result();
			return $data;

   
  

    }
	

}
?>
