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
					'Single', 
					'Double',
					'Click For Food Details',
					//'Info',
					
					//'Update',
					//'Delete',
					//'Order' 
					)
					);
			$this->table->set_template($tmpl);


		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->kids,
					$data->single,
					$data->doubles,
				
					"<a href='".base_url()."index.php/order_burger_data/order/$data->burger_id'> <img src= '".base_url()."upload/$data->image' height='200' width='220' data-toggle='modal' data-target='#bs@(item.id)'>",
					//$data->info,
					//"<a href='http://localhost/foodbasedemo/index.php/update_burger_data/update/$data->burger_id'> <img src= 'http://localhost/foodbase/icons/update.jpg' height='40' width='40'>",
					//"<a href='http://localhost/foodbasedemo/index.php/delete_burger_data/delete/$data->burger_id'> <img src= 'http://localhost/foodbase/icons/del.jpg' height='40' width='40'>",
					//"<a href='".base_url()."index.php/order_burger_data/order/$data->burger_id'> <img src= '".base_url()."icons/order.png' height='40' width='40'>",
					//anchor('order/order_data/'. $data->burger_id, 'Order')
					
					)
				);


				} 
                           				
		
		echo $this->table->generate();
		?>

<div class="modal fade bs-example-modal-sm" id= "bs@(item.id)" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    		 <div class="modal-header">
    		 <h1>Food Info</h1>
    		 </div>
    		 <div class="modal-body">
			<?php echo "<img src= 'http://localhost/foodbasedemo/upload/$data->image' height='100%' width='100%'>"?>
			<?php echo $data->info?>
			</div>
         </div>
  </div>
</div>

<nav>
  <ul class="pagination">
       <li><a href="#"><?php echo $links; ?></a></li>
        
  </ul>
</nav>

  		</div>

  		<div>
 
    
	</body>

</html>
