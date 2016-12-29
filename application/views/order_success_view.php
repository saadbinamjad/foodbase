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
	
   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

		<h3>Your Orders Are Noted.</h3>			
    <h4>Want to add any further items?</h4>
   
  
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href='<?php echo base_url(); ?>/index.php/show_burger_data/pagination_data'><img src="<?php echo base_url(); ?>images/baconmcdouble.png" class="e" height= "120" width= "120"></a>
              <a href='<?php echo base_url(); ?>/index.php/show_chicken_data/pagination_data'><img src="<?php echo base_url(); ?>images/chicken.png" class="e" height= "120" width= "120"></a>
              <a href='<?php echo base_url(); ?>/index.php/show_pizza_data/pagination_data'><img src="<?php echo base_url(); ?>images/pizza1.png" class="e" height= "120" width= "120"></a>
              <a href='<?php echo base_url(); ?>/index.php/show_drinks_data/pagination_data'><img src="<?php echo base_url(); ?>images/VanillaShake.png" class="e" height= "120" width= "120"></a>

    <h4>Or want to empty entire order list and start again?</h4>
    
    <?php echo anchor('login/logout', '<button type="button" class="btn btn-info">Empty Order List</button>')?>
  
   <div>

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