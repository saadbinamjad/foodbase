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
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/welcome">Foodbase Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class= 'active'><a href="#">Welcome <?php echo $username; ?></a></li>
                 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Add<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>index.php/burger/burger_input">Burgers</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/chicken/chicken_input">Chicken</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/pizza/pizza_input">Pizza</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/drinks/drinks_input">Drinks</a></li>
                   <li class="divider"></li>
                   <li><a href="<?php echo base_url(); ?>index.php/admin">Admin</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/user/user_input">Users</a></li>
               
                
                             </ul>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Edit<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>index.php/show_data_admin/burger">Burgers</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_data_admin/chicken">Chicken</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_data_admin/pizza">Pizza</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_data_admin/drinks">Drinks</a></li>
                   <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_admin_data/pagination_data">Admin</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/show_users_data/pagination_data">Users</a></li>
                
                             </ul>
            
            </li>            
            
            <li><?php echo anchor('welcome/logout', 'Logout')?></li>

        
                
       
        
        
          </ul>
         
          </div><!--/.nav-collapse -->
      </div>
    </nav>


    <!-- Bootstrap core JavaScript
    ================================================== -->
 
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

          
