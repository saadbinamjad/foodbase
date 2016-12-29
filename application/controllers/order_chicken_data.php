<?php
class Order_chicken_data extends CI_Controller {
  function order()
  {
      $chicken_id = $this->uri->segment(3);
      $this->load->model('order_chicken_model');
       
$results= $this->order_chicken_model->get_chicken_price($chicken_id);
   $data1['results']=$results;
  
  $this->load->view('show_order_chicken_view',$data1);
   
         $results2= $this->order_chicken_model->get_chicken_calories($chicken_id);
        $data['results2']=$results2;
        $results3= $this->order_chicken_model->get_chicken_sales($chicken_id);
        $data['results3']=$results3;
          $results4= $this->order_chicken_model->get_chicken_reviews($chicken_id);
        $data['results4']=$results4;
        





        $this->load->view('home_header');
     
        $this->load->view('show_chicken_view_order', $data);
    }
}?>


