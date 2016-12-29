<?php

class Bill_save_model extends CI_Model
{
   
   function index(){
  
   $this->load->database();
   

   foreach($results1 as $data) {
   	$data= array(
				'name'=> $data->name, 
				'size'=> $data->size, 
				'qty' => $data->qty, 
			 'total_price'=> $data->total_price);
					}



	$this->db->insert('bill_number', $data);
	 		
	        
	/*$id= $this->db->insert_id();

	$data1= array(	'bill_number'=> $id,
 			 'total_price'=> $data['results']['total_price'], 
			 'vat_amount' =>  $total_price*(15/100), 
			 'grand_total'=>  $total_price+$vat_amount);

	$this->db->insert('bill_details', $data1);
*/
}
}

				