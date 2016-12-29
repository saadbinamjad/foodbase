<?php
class Order_pizza_data extends CI_Controller {
  function order()
  {
      $pizza_id = $this->uri->segment(3);
      $this->load->model('order_pizza_model');
       
$results= $this->order_pizza_model->get_pizza_price($pizza_id);
   $data1['results']=$results;
  
  $this->load->view('show_order_pizza_view',$data1);
   
         $results2= $this->order_pizza_model->get_pizza_calories($pizza_id);
        $data['results2']=$results2;
        $results3= $this->order_pizza_model->get_pizza_sales($pizza_id);
        $data['results3']=$results3;
          $results4= $this->order_pizza_model->get_pizza_reviews($pizza_id);
        $data['results4']=$results4;
        





        $this->load->view('home_header');
     
        $this->load->view('show_pizza_view_order', $data);
    }
}?>


