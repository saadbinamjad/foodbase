<?php
class Order_drinks_model extends CI_Model{

    
   
    function get_drinks_calories($drinks_id){
  
      
        $this->db->select('drinks.*, drinks_calories.*');
       
        $this->db->where('drinks.drinks_id', $drinks_id );
         $this->db->distinct();
        $this->db->from('drinks');
       
        $this->db->join('drinks_calories', 'drinks.drinks_id=drinks_calories.drinks_id', 'right');
       
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_drinks_sales($drinks_id){
  
      
        $this->db->select('drinks.*, sales.*');
       
        $this->db->where('drinks.drinks_id', $drinks_id );
         $this->db->distinct();
        $this->db->from('drinks');
       
        $this->db->join('sales', 'drinks.drinks_id=sales.drinks_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_drinks_reviews($drinks_id){
  
      
        $this->db->select('drinks.*, reviews.*');
       
        $this->db->where('drinks.drinks_id', $drinks_id );
         $this->db->distinct();
        $this->db->from('drinks');
       
        $this->db->join('reviews', 'drinks.drinks_id=reviews.drinks_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }

    function get_drinks_price($drinks_id){
  
      
        $this->db->select('drinks.*, drinks_size.*');
        $this->db->where('drinks.drinks_id', $drinks_id );
        $this->db->from('drinks');
        $this->db->join('drinks_size', 'drinks.drinks_id=drinks_size.drinks_id', 'inner');
       // $this->db->join('drinks_calories', 'drinks.drinks_id=drinks_calories.drinks_id', 'inner');
        //$this->db->join('reviews', 'drinks.drinks_id=reviews.drinks_id', 'inner');
        $query= $this->db->get();


        $results = $query->result();



         return $results;
  
     }



    
    
}
?>
