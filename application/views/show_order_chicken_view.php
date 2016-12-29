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
					'Kids', 
					'Combo', 
					'Party',
					)
					);
			$this->table->set_template($tmpl);


		foreach($results as $data) {
				$this->table->add_row(array(
					$data->name,
					$data->kids,
					$data->combo,
					$data->party,
					)
				);
					 
                           				}
			echo $this->table->generate();
		?>

					
  		</div>


    <?php $values = array(
                  'chicken_id'=> $data->chicken_id,
                  'name'=> $data->name,
                  'kids'  => $data->kids,
                  'combo'    => $data->combo,
                  'party'   => $data->party,
               
                );



?>

<?php echo form_open('save_order_chicken_data/save');?>
    <label></label>
    <?php echo form_hidden('chicken_id', $values['chicken_id']);?>
    <label></label>
    <?php echo form_hidden('name', $values['name']);?>
    <br>
    <label>Select:</label>
      
    <select name= 'size'>
    <option value= "<?php echo $values['kids']?>?selected=selected">Kids</option>
    <option value= "<?php echo $values['combo']?>?selected=selected">Combo</option>
	<option value= "<?php echo $values['party']?>?selected=selected">Party</option>
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

