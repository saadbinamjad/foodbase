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
  
    <style>
  body
  {
    background-color:   #183026;
    background-image:   url('<?php echo base_url(); ?>/images/chefview.jpg');
    background-repeat:    no repeat;
    background-size:    cover;
    background-attachment:  fixed,                fixed;
  }
  
   h1, h2, h3, h4   {color:white}
  p    {color:white}

</style>
  <body>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


<br><br>
<br><br>
  
<h1 class="page-header">Welcome to Foodbase!</h1>
<br><br>

      
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
            <?php echo form_submit('mysubmit', 'Log in');?>
          </div>
          </form>

         
    </div> <!-- /container -->



   

    
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

  
