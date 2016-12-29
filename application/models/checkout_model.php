<?php
class checkout_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	
			

			$size= $this->input->post('size');
			$name= $this->input->post('name');
			$qty= $this->input->post('qty');
			$total= $size*$qty;
			$a=$this->input->post('total_price');
			$b=$data->total_price*(15/100),
			$grand_total=$a+$b
			$data= array(
				'size' => $size,
				'name' => $name,
	        	'qty'=> $qty,
	        	'total'=> $total,
	        	''
	        	'vat_amount'=>$b,
	        	'grand_total'=>$grand_total);

     		$this->db->insert('proccessed_order', $data);

 			$this->session->unset_userdata('logged_in');
  			$this->load->database();
   			$this->db->empty_table('order'); 
   			session_destroy();
   
    		
			}
	}


?>