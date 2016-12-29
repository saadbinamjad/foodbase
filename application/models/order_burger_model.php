<?php
class Order_burger_model extends CI_Model{

    
   
    function get_burger_calories($burger_id){
  
      
        $this->db->select('burger.*, burger_calories.*');
       
        $this->db->where('burger.burger_id', $burger_id );
         $this->db->distinct();
        $this->db->from('burger');
       
        $this->db->join('burger_calories', 'burger.burger_id=burger_calories.burger_id', 'right');
       
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_burger_sales($burger_id){
  
      
        $this->db->select('burger.*, sales.*');
       
        $this->db->where('burger.burger_id', $burger_id );
         $this->db->distinct();
        $this->db->from('burger');
       
        $this->db->join('sales', 'burger.burger_id=sales.burger_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_burger_reviews($burger_id){
  
      
        $this->db->select('burger.*, reviews.*');
       
        $this->db->where('burger.burger_id', $burger_id );
         $this->db->distinct();
        $this->db->from('burger');
       
        $this->db->join('reviews', 'burger.burger_id=reviews.burger_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }

    function get_burger_price($burger_id){
  
      
        $this->db->select('burger.*, burger_size.*');
        $this->db->where('burger.burger_id', $burger_id );
        $this->db->from('burger');
        $this->db->join('burger_size', 'burger.burger_id=burger_size.burger_id', 'inner');
       // $this->db->join('burger_calories', 'burger.burger_id=burger_calories.burger_id', 'inner');
        //$this->db->join('reviews', 'burger.burger_id=reviews.burger_id', 'inner');
        $query= $this->db->get();


        $results = $query->result();



         return $results;
  
     }



    
	
}
?>
