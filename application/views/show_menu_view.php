<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Foodbase</title>
          <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
      <h1>Foodbase Admin Panel</h1>
       <?  
      $this->load->library('table');
      $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="10" cellspacing="0" class="mytable">' );
      $this->table->set_template($tmpl);
      $this->table->add_row(array(anchor('welcome', 'Home'),
       anchor('welcome/logout', 'Log Out')));
      echo $this->table->generate();
      ?>
 	
	</head>

	<body>
<p></p>
	<div>
	 <div>
         <h>Burgers</h>              

		<?php


			$config['image_library'] = 'gd2';
			$config['source_image'] = './upload';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 75;
			$config['height'] = 50;

			$this->load->library('image_lib', $config);

			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

			$this->table->set_template($tmpl);

			$this->table->set_heading(array(
					'Food', 
					'Kids', 
					'Single', 
					'Doubles',
					'Images',
					//'Admin',
					'Delete' 
					)
					);
			$this->table->set_template($tmpl);


		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->kids,
					$data->single,
					$data->doubles,
					"<img src= 'http://localhost/foodbasedemo/upload/$data->image' height='100' width='120'>",
					//anchor('update_burger_data/update/'. $data->burger_id, 'Update'),
					"<a href='http://localhost/foodbasedemo/index.php/delete_burger_data/delete/$data->burger_id'> <img src= 'http://localhost/foodbase/icons/del.jpg' height='30' width='30'>",
					//anchor('order/order_data/'. $data->burger_id, 'Order')
					
					)
				);
					 
            }
			echo $this->table->generate();
?></div>
<div>
<h>Chicken</h> 

			<?

			$config['image_library'] = 'gd2';
			$config['source_image'] = './upload';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 75;
			$config['height'] = 50;

			$this->load->library('image_lib', $config);

			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

			$this->table->set_template($tmpl);
	
			$this->table->set_heading(array(
					'Food', 
					'Kids', 
					'Party', 
					'Combo',
					'Images',
					//'Admin',
					'Delete' 
					)
					);
			$this->table->set_template($tmpl);

		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->kids,
					$data->combo,
					$data->party,
					"<img src= 'http://localhost/foodbasedemo/upload/$data->image' height='100' width='120'>",
					//anchor('update_data/update/'. $data->chicken_id, 'Update'),
					"<a href='http://localhost/foodbasedemo/index.php/delete_chicken_data/delete/$data->chicken_id'> <img src= 'http://localhost/foodbase/icons/del.jpg' height='30' width='30'>",
					///anchor('delete_data/delete/'. $data->chicken_id, 'Delete')
					)
				);
					
				}
			echo $this->table->generate();
			

?>
</div>

			<p><?php echo $links; ?></p>
  		</div>

  		<div>
  			
  			 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
	</body>

</html>

