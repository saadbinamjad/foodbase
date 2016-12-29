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

<ul>
<h1>Order Menu</h1>
<p></p>

                           

		<?php


			
			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table border="0"  width= "100%"  cellpadding="10px" text align= "left" cellspacing="1" class="mytable">' );

    
			$this->table->set_template($tmpl);

			$this->table->set_heading(array(
					
					'Name', 
					'Small', 
					'Medium', 
					'Large'
					)
					);
			$this->table->set_template($tmpl);


		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name,
					$data->small,
					$data->medium,
					$data->large
					)
				);
					 
                           				}
			echo $this->table->generate();
		?>

					
  		</div>


    <?php $values = array(
                  'pizza_id'=> $data->pizza_id,
                  'name'=> $data->name,
                  'small'  => $data->small,
                  'medium'    => $data->medium,
                  'large'   => $data->large,
               
                );



?>

<?php echo form_open('save_order_pizza_data/save');?>
    <label></label>
    <?php echo form_hidden('pizza_id', $values['pizza_id']);?>
    <label></label>
    <?php echo form_hidden('name', $values['name']);?>
    <br>
     <label>Select:</label>
   
   <select name= 'size'>
    <option value= "<?php echo $values['small']?>?selected=selected">Small</option>
        <option value= "<?php echo $values['medium']?>?selected=selected">Medium</option>
    <option value= "<?php echo $values['large']?>?selected=selected">Large</option>
  </select>



   <?php //echo form_dropdown('size', $values,);?>
   <br>
    <label>Quantity:</label>
    <?php echo form_input('qty');?>
    <br><br>
    
    <?php echo form_submit('mysubmit', 'Save Order Item');?>
    <br>

  		<div>
  		
    
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

