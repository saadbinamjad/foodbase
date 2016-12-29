<!DOCTYPE html>

<html lang="en">
  <head>
	   <meta charset="utf-8">
	   <title>Foodbase</title>
     <script src="js/jquery.min.js"></script>
    
 </head>
 
  <body>
  
    <div>
	     <h1>Welcome to Foodbase Admin Panel</h1>
  	<div>

  	<?php
			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

			$this->table->set_template($tmpl);

			$this->table->set_heading(array(
					'Burger', 
					'Pizza', 
					'Drinks', 
					'Chicken'
					)
					);
			$this->table->set_template($tmpl);

		foreach($results as $data) {
				$this->table->add_row(array(
					$this->load->view('burger_input_view'),
					$this->load->view('pizza_input_view'),
					$this->load->view('drinks_input_view'),
					$this->load->view('chicken_input_view')
					)
				);
					
				}
			echo $this->table->generate();
?>
