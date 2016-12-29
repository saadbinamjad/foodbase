<?php
class Order_burger_data extends CI_Controller {
  function order()
  {
  		$burger_id = $this->uri->segment(3);
    	$this->load->model('order_burger_model');
       

  $results= $this->order_burger_model->get_burger_price($burger_id);
   $data1['results']=$results;
        
   $this->load->view('show_order_burger_view',$data1);

   
         $results2= $this->order_burger_model->get_burger_calories($burger_id);
        $data['results2']=$results2;
        $results3= $this->order_burger_model->get_burger_sales($burger_id);
        $data['results3']=$results3;
          $results4= $this->order_burger_model->get_burger_reviews($burger_id);
        $data['results4']=$results4;
        





        $this->load->view('home_header');
     
        $this->load->view('show_burger_view_order', $data);
    }
}?>


