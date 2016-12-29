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

<style type="text/css">

#navpanel {
display: block;
color: grey;
height: 100%;
right: 0px;
overflow-x: hidden;
overflow-y: auto;
position: fixed;
top: 50px;
width: 350px;
z-index: 10000;
background: rgb(49,49,49);

}
</style>


<section id="navpanel">
<ul><h1>Order Menu</h1></ul>
<p></p>
<ul>



<?php





			
			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table class="table">' );

		
			$this->table->set_template($tmpl);

			$this->table->set_heading(array(
					//'Order ID', 
					'Name',
					'Item Price',
					'Qty',
					'Price',
					'Del' 
					)
					);
			$this->table->set_template($tmpl);

		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name, 
					$data->size, 
					$data->qty, 
					$data->total_price,
					"<a href='".base_url()."index.php/delete_order_data/delete/$data->id'> <img src= '".base_url()."icons/1.jpg' height='30' width='30'>"
					)
				);
					
				}
			echo $this->table->generate();
		?>
		<p></p>




    <?php echo anchor('bill/billing', '<button type="button" class="btn btn-primary">Proceed to check out</button>')?>


<p></p>
   
</ul>
</section>

</html>

  
</ul>
</section>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   

</html>

