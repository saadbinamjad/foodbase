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

</div>
		 <?  
      $this->load->library('table');
      $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="10" cellspacing="0" class="mytable">' );
      $this->table->set_template($tmpl);
      $this->table->add_row(array(anchor('welcome', 'Home'),
       anchor('welcome/logout', 'Log Out')));
      echo $this->table->generate();
      ?>
<div></div>


		<div>
			
		</div>
		
		<div>
		<p>	Chicken Data successfully deleted.</p>
		
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