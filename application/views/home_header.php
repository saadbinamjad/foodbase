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

  </head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>#">Foodbase</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>index.php/show_burger_data/pagination_data">Burgers</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_chicken_data/pagination_data">Chicken</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_pizza_data/pagination_data">Pizza</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_drinks_data/pagination_data">Drinks</a></li>
                
            </ul>
            </li>  
        
            <li><a href="<?php echo base_url(); ?>index.php/show_reviews_data/pagination_data">Reviews</a></li>  
            <li><a href="<?php echo base_url(); ?>index.php/show_sales_data/pagination_data">Sales Board</a></li> 
          <li><a href="<?php echo base_url(); ?>index.php/about/contact">About Us</a></li>

            <li><a href "#" data-toggle="modal" data-target="#myModal">Log In</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Admin Panel.</h3>
        
      </div>
      <div class="modal-body">
      <h4> Please fill in the details to log in.</h4>
        <div id="login">
            <?php echo validation_errors(); ?>  
            <?php echo form_open('verify_login');?>
            <?php echo form_hidden('id');?>
            <label>Username:</label>
            <?php echo form_input('username');?>
            <br> 
            <label>Password:</label>
            <?php echo form_password('password');?>
            <br>      
            </div>
      </div>
      
      <div class="modal-footer">
         <?php echo form_submit('mysubmit', 'Log in');?>
          </form>
      </div>
    </div>
  </div>
</div>
   
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> </body>
  </body>
</html>

          
