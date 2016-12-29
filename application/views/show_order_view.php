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
    
    </head>
<body>

    <?php $options = array(
                  'Kids'  => 'Kids',
                  'Single'    => 'Single',
                  'Doubles'   => 'Doubles',
               
                );

$size = array('small', 'large');

?>

<?php echo form_open('save_order_burger_data/save');?>
    <label></label>
    <?php echo form_hidden('id');?>
    <br>
    <label>Size</label>
    <?php echo form_dropdown('size', $options, 'large');?>
   
    <label>Quantity</label>
    <?php echo form_input('qty');?>
    <br>
    
    <?php echo form_submit('mysubmit', 'Save Order Item');?>
    <br>

</body>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
</html>