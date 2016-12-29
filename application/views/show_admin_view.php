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


      <div></div>
	</head>

	<body>

	
	
	
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">List of Admins</h1>

		

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
					'Name', 
					'Username', 
					'Password', 
					'Update','Delete' 
					)
					);
			$this->table->set_template($tmpl);

		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->username,
					$data->password,
					"<a href='".base_url()."index.php/update_admin_data/update/$data->id'> <img src= '".base_url()."icons/update.jpg' height='40' width='40'>",
					"<a href='".base_url()."index.php/delete_admin_data/delete/$data->id'> <img src= '".base_url()."icons/deladmin.jpg' height='30' width='30'>",
					)
				);
					
				}
			echo $this->table->generate();
		?>
<p></p>
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

