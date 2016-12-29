<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
	 <div>
                           

		<?php


			
			$this->load->library('table');
			
		$tmpl = array ( 'table_open'  => '<table border="0"  width= "100%"  cellpadding="10px" text align= "left" cellspacing="1" class="mytable">' );

    
			$this->table->set_template($tmpl);

			$this->table->set_heading(array(
					
					'Kids', 
					'Single', 
					'Doubles',
					)
					);
			$this->table->set_template($tmpl);


		foreach($results as $data) {
				$this->table->add_row(array(
					$data->kids,
					$data->single,
					$data->doubles,
					)
				);
					 
                           				}
			echo $this->table->generate();
		?>

					
  		</div>


    <?php $options = array(
                  'Kids'  => 'Kids',
                  'Single'    => 'Single',
                  'Doubles'   => 'Doubles',
               
                );

$size = array('small', 'large');

?>

<?php echo form_open('save_order/save');?>
    <label></label>
    <?php echo form_hidden('id');?>
    <br>
    <label>Size</label>
    <?php echo form_dropdown('size', $options, 'large');?>
   
    <label>Quantity</label>
    <?php echo form_input('qty');?>
    <br>
    
    <?php echo form_submit('mysubmit', 'Order');?>
    <br>

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

