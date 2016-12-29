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

  <style>
  body
  {
    background-color:   #183026;
    background-image:   url('<?php echo base_url(); ?>/images/about.jpg');
    background-repeat:    no repeat;
    background-size:    cover;
    background-attachment:  fixed,                fixed;
  }
  
   h1, h2, h3, h4   {color:white}
  p    {color:white}

</style>

	</head>


  <body>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
  <h1>Review Posted</h1>
  <h3>Thanks for your insights!</h3>

<?php echo anchor('login/logout', '<button type="button" class="btn btn-info">Home</button>')?>
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
