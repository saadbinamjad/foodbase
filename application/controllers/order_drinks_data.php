<?php
class Order_drinks_data extends CI_Controller {
  function order()
  {
      $drinks_id = $this->uri->segment(3);
      $this->load->model('order_drinks_model');
       
$results= $this->order_drinks_model->get_drinks_price($drinks_id);
   $data1['results']=$results;
  
  $this->load->view('show_order_drinks_view',$data1);
   
         $results2= $this->order_drinks_model->get_drinks_calories($drinks_id);
        $data['results2']=$results2;
        $results3= $this->order_drinks_model->get_drinks_sales($drinks_id);
        $data['results3']=$results3;
          $results4= $this->order_drinks_model->get_drinks_reviews($drinks_id);
        $data['results4']=$results4;
        





        $this->load->view('home_header');
     
        $this->load->view('show_drinks_view_order', $data);
    }
}?>


