<?php
class Save_table_data extends CI_Controller{

    
    function save(){
  
      $table_id= $this->input->post('table_id');  
     
      $this->load->model('bill_model');
      $data["results"]=$this->bill_model->total_sum();
      $this->load->model('show_ordered_model');
      $data["results1"]= $this->show_ordered_model->showallmodel();
      $data3["results1"]= $this->show_ordered_model->showallmodel();
      
      $a= $data["results1"];
      
      foreach ($a as $data): 
    
      $data1= array('table_id'=> $table_id,
              'name' => $data->name,
              'size'=> $data->size,
              'qty'=> $data->qty
              );
      $this->db->insert('chef_table', $data1);

      $data2= array(
              'burger_id' => $data->order_id,
              'chicken_id' => $data->order_id,
              'pizza_id' => $data->order_id,
              'drinks_id' => $data->order_id,
              'name' => $data->name,
              'size'=> $data->size,
              'qty'=> $data->qty
              );
 
      $this->db->insert('sales', $data2);
      
      endforeach; 
 
    
      $this->load->view('waiting_view', $data3);


    }

     function save_review(){
  


     $this->load->model('save_review_model');
    $this->save_review_model->save_model();
     $this->load->view('review_view');
      
     
    
     
    }
}

?>
