<?php
class Order_chicken_model extends CI_Model{

    
   
    function get_chicken_calories($chicken_id){
  
      
        $this->db->select('chicken.*, chicken_calories.*');
       
        $this->db->where('chicken.chicken_id', $chicken_id );
         $this->db->distinct();
        $this->db->from('chicken');
       
        $this->db->join('chicken_calories', 'chicken.chicken_id=chicken_calories.chicken_id', 'right');
       
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_chicken_sales($chicken_id){
  
      
        $this->db->select('chicken.*, sales.*');
       
        $this->db->where('chicken.chicken_id', $chicken_id );
         $this->db->distinct();
        $this->db->from('chicken');
       
        $this->db->join('sales', 'chicken.chicken_id=sales.chicken_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_chicken_reviews($chicken_id){
  
      
        $this->db->select('chicken.*, reviews.*');
       
        $this->db->where('chicken.chicken_id', $chicken_id );
         $this->db->distinct();
        $this->db->from('chicken');
       
        $this->db->join('reviews', 'chicken.chicken_id=reviews.chicken_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }

    function get_chicken_price($chicken_id){
  
      
        $this->db->select('chicken.*, chicken_size.*');
        $this->db->where('chicken.chicken_id', $chicken_id );
        $this->db->from('chicken');
        $this->db->join('chicken_size', 'chicken.chicken_id=chicken_size.chicken_id', 'inner');
       // $this->db->join('chicken_calories', 'chicken.chicken_id=chicken_calories.chicken_id', 'inner');
        //$this->db->join('reviews', 'chicken.chicken_id=reviews.chicken_id', 'inner');
        $query= $this->db->get();


        $results = $query->result();



         return $results;
  
     }



    
    
}
?>
