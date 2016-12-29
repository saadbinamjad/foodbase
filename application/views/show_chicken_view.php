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
					'Kids', 
					'Party', 
					'Combo',
					'Click For Food Details',
					//'Update',
					//'Delete',
					//Order' 
					)
					);
			$this->table->set_template($tmpl);

		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->kids,
					$data->combo,
					$data->party,
					"<a href='".base_url()."index.php/order_chicken_data/order/$data->chicken_id'><img src= '".base_url()."upload/$data->image' height='' width=''>",
					//"<a href='http://localhost/foodbasedemo/index.php/update_chicken_data/update/$data->chicken_id'> <img src= 'http://localhost/foodbase/icons/update.jpg' height='40' width='40'>",
					//"<a href='http://localhost/foodbasesdemo/index.php/delete_chicken_data/delete/$data->chicken_id'> <img src= 'http://localhost/foodbase/icons/del.jpg' height='30' width='30'>",
					
					//"<a href='".base_url()."index.php/order_chicken_data/order/$data->chicken_id'> <img src= '".base_url()."icons/order.png' height='40' width='40'>"///anchor('delete_data/delete/'. $data->chicken_id, 'Delete')
					)
				);
					
				}
			echo $this->table->generate();
		?>

			<p><?php echo $links; ?></p>
  		</div>
 
   
	</body>

</html>

