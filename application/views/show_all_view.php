<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">

		<title>Foodbase</title>
		 <?  
      $this->load->library('table');
      $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="10" cellspacing="0" class="mytable">' );
      $this->table->set_template($tmpl);
      $this->table->add_row(array(anchor('welcome', 'Home'),
       anchor('welcome/logout', 'Log Out')));
      echo $this->table->generate();
      ?><div></div>

	</head>

	<body>

	<div>
		<h1</h1>
	</div>
	
	<div>

		<?php
		$this->load->view('show_burger_view');
		$this->load->view('show_pizza_view');
		$this->load->view('show_chicken_view');
		$this->load->view('show_drinks_view');
		

		?>

			<p><?php echo $links; ?></p>
  		</div>

  		<div>
  			<p> <?php echo anchor('welcome', '<br/>Home') ?></p>
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

