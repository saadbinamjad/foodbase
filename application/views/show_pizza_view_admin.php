<!DOCTYPE html>

<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Foodbase</title>
          
    <!-- Bootstrap core CSS --> 
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/cover.css" rel="stylesheet">

	</head>

	<body>
<p></p>
	<div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

		<?php


			$config['image_library'] = 'gd2';
			$config['source_image'] = './upload';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 75;
			$config['height'] = 50;

			$this->load->library('image_lib', $config);

			$this->load->library('table');
	$tmpl = array ( 'table_open'  => '<table class="table table-hover">' );
	$this->table->set_template($tmpl);

			$this->table->set_heading(array(
					'Food', 
					'Small', 
					'Medium', 
					'Large',
					'Images',
					'Update',
					'Delete', 
					//'Order'
					)
					);
			$this->table->set_template($tmpl);

		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->small,
					$data->medium,
					$data->large,
					"<img src= '".base_url()."upload/$data->image' height='200' width='220'>",
					"<a href='".base_url()."index.php/update_pizza_data/update/$data->pizza_id'> <img src= '".base_url()."icons/update.png' height='40' width='40'>",
					"<a href='".base_url()."index.php/delete_pizza_data/delete/$data->pizza_id'> <img src= '".base_url()."icons/deladmin.png' height='30' width='30'>",
					//"<a href='http://localhost/foodbasedemo/index.php/order_pizza_data/order/$data->pizza_id'> <img src= 'http://localhost/foodbasedemo/icons/order.jpg' height='40' width='40'>",
					)
				);
					
				}
			echo $this->table->generate();
		?>

			<p><?php echo $links; ?></p>
  		</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
	</body>

</html>

