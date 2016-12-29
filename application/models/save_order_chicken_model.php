<?php
class Save_order_chicken_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function save_model(){
	
			

			$id= $this->input->post('chicken_id');

			$size= $this->input->post('size');

			$name= $this->input->post('name');

			$qty= $this->input->post('qty');

			$total= $size*$qty;
		

			$data= array('order_id'=> $id,
				'size' => $size,
				'name' => $name,
	        	'qty'=> $qty,
	        	'total_price'=> $total);

     		$this->db->insert('order', $data);
    		
			}
	}


?>