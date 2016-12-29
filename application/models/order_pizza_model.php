<?php
class Order_pizza_model extends CI_Model{

    
   
    function get_pizza_calories($pizza_id){
  
      
        $this->db->select('pizza.*, pizza_calories.*');
       
        $this->db->where('pizza.pizza_id', $pizza_id );
         $this->db->distinct();
        $this->db->from('pizza');
       
        $this->db->join('pizza_calories', 'pizza.pizza_id=pizza_calories.pizza_id', 'right');
       
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_pizza_sales($pizza_id){
  
      
        $this->db->select('pizza.*, sales.*');
       
        $this->db->where('pizza.pizza_id', $pizza_id );
         $this->db->distinct();
        $this->db->from('pizza');
       
        $this->db->join('sales', 'pizza.pizza_id=sales.pizza_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }


    function get_pizza_reviews($pizza_id){
  
      
        $this->db->select('pizza.*, reviews.*');
       
        $this->db->where('pizza.pizza_id', $pizza_id );
         $this->db->distinct();
        $this->db->from('pizza');
       
        $this->db->join('reviews', 'pizza.pizza_id=reviews.pizza_id', 'right');
        $query= $this->db->get();


        $results = $query->result();



        return $results;
    }

    function get_pizza_price($pizza_id){
  
      
        $this->db->select('pizza.*, pizza_size.*');
        $this->db->where('pizza.pizza_id', $pizza_id );
        $this->db->from('pizza');
        $this->db->join('pizza_size', 'pizza.pizza_id=pizza_size.pizza_id', 'inner');
       // $this->db->join('pizza_calories', 'pizza.pizza_id=pizza_calories.pizza_id', 'inner');
        //$this->db->join('reviews', 'pizza.pizza_id=reviews.pizza_id', 'inner');
        $query= $this->db->get();


        $results = $query->result();



         return $results;
  
     }



    
    
}
?>
