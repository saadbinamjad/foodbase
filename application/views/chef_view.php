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
  <p></p>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 <h3>Chef Panel</h3>
  
  <h4>You have new orders:</h4>

<?php

			$this->load->library('table');
			
		
			$tmpl = array ( 'table_open'  => '<table class="table table-hover">' );	$this->table->set_template($tmpl);

			$this->table->set_heading(array(
			        'Table Number: ', 
					'Name',
					'Size',
					'Quantity',
					'' 
					//'Admin','Admin' 
					)
					);
			$this->table->set_template($tmpl);

			foreach($results1 as $data) {
				$this->table->add_row(array(
					$data->table_id, 
					$data->name, 
					$data->size, 
					$data->qty, 
				    "<a href='".base_url()."index.php/delete_chef_data/delete/$data->id'> <button type='button' class='btn btn-info'>Serve</button>",
		//$data->total_price,
					)
				);
				
				}

			
			?>


			
<p></p>
		
</table>


<?php echo $this->table->generate();?>

<p></p>



</div></div>



</body>
</html>
