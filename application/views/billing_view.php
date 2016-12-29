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
 

  <h3> Bill for Your Table: </h3>
<?php

			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table class="table table-condensed">' );

			$this->table->set_template($tmpl);

			$this->table->set_heading(array(
			       // 'Order ID', 
					'Name',
					'Item Price',
					'Quantity',
					'Price in BDT' 
					//'Admin','Admin' 
					)
					);
			$this->table->set_template($tmpl);

			foreach($results1 as $data) {
				$this->table->add_row(array(
					//$data->order_id, 
					$data->name, 
					$data->size, 
					$data->qty, 
					$data->total_price,
					)
				);
				
				}

			?>

	
  		<div>
    <br>
      
    <?php 
			echo $this->table->generate();?>


			<?php $name= $data->name?>
			<?php $qty= $data->qty?>
			<?php $size= $data->size?>

<p></p>
			<?php 

			$this->table->set_heading(array(
					'Total Price', '15% VAT', 'Grand Total in BDT' 
					)
					);
			$this->table->set_template($tmpl);



			foreach($results as $data) {
				$this->table->add_row(array(
					$a=$data->total_price,
					$b=$data->total_price*(15/100),
					$c= $a+$b
				)
				);
				
			}

			echo $this->table->generate();
?>
</table>



	<?php echo form_open_multipart('save_table_data/save');?>



     <diV> 
     <label>Table Number:</label>

    <?php echo form_input('table_id');?>
    
	<br><br>
    	
	<input type="submit" id="submit" name="save" value="Check Out">
	</br>

	</form>



<p></p>


 <?php echo anchor('show_ordered_data/ordered_data', '<button type="button" class="">Back</button>')?>
 
</div></div>



</body>
</html>
