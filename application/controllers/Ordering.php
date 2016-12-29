<?php

class Ordering extends CI_Controller{
	public function __construct(){
	parent:: __construct();
	$this->load->library('cart');
	$this->load->model('billing_method');
	}
	public function index(){
		$data['food_items'] = $this->billing_model->get_all();
		$this->load->view('ordering_view', $data);
	}

	function add()
	{
		$insert_data=array(
			'id'=>$this->input->post('order_id');
			'name'=>$this->input->post('name');
			'price'=>$this->input->post('price');
			'qty'=>1;
			);

		$this->cart->insert($insert_data);

		redirect('ordering');
	}
	function remove($rowid){
		if($rowid=='all'){
			$this->cart->destroy();
		}else{
			$data=array(
				'rowid'=>$rowid,
				'qty'=>0);
		$this->cart->update($data);

		}
		redirect('ordering');
		}
	function update_order(){
		$order_info- $POST['cart'];
		for_each($order_info as $id=>$cart)
		{
			$rowid= $cart['rowid'];
			$price= $cart['price'];
			$amount= $price * $cart['qty'];
			$qty= $cart ['qty'];

			$data= array(
				'rowid'=>$rowid,
				'price'=>$price,
				'amount'=>$amount,
				'qty'=>$qty);
			
		}
		redirect('ordering');
	}

	function billing_view(){
		$this->load->view('billing_view');

	}

	public function save_order()
{

$ord_id = $this->billing_model->insert_order($order);

if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$order_detail = array(
'orderid' => $ord_id,
'productid' => $item['id'],
'quantity' => $item['qty'],
'price' => $item['price']
);

$cust_id = $this->billing_model->insert_order_detail($order_detail);
endforeach;
endif;
$this->load->view('billing_success');
}
}
?>