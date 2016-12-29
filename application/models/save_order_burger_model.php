<?php
class Save_order_burger_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	
			
			$table_id= $this->input->post('table_id');	

			$id= $this->input->post('burger_id');

			$size= $this->input->post('size');

			$name= $this->input->post('name');

			$qty= $this->input->post('qty');

			$total= $size*$qty;
		

			$data= array('order_id'=> $id,
				'table_id'=>$table_id,
				'size' => $size,
				'name' => $name,
	        	'qty'=> $qty,
	        	'total_price'=> $total);

     		$this->db->insert('order', $data);
     		//$this->db->insert('chef_table', $data);

     		
    		
			}

			function save_model1(){
	
			
			$table_id= $this->input->post('table_id');	

			$id= $this->input->post('burger_id');

			$size= $this->input->post('size');

			$name= $this->input->post('name');

			$qty= $this->input->post('qty');

			$total= $size*$qty;
		

			$data= array('order_id'=> $id,
				'table_id'=>$table_id,
				'size' => $size,
				'name' => $name,
	        	'qty'=> $qty,
	        	'total_price'=> $total);

     		$this->db->insert('chef_table', $data);

     		
    		
			}


	}


?>