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

     <script>
  function validateForm() {
    var x = document.forms["myform"]["name"].value;
    if (x==null || x=="") {
        alert("Fill the first name.");
        return false;
    }
    
    }
  }
  </script>

 </head>
 
    <?php
    $data = array(
                  'name'  => "myform",
                  'onsubmit' => "return validateForm()"
                   );
    ?>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Add New User </h1>
    <?php echo form_open('save_user_data/save', $data);?>
	
    <div>

<div class="form-group">
    <label>Full Name:</label>
    <?php echo form_input('name');?>
    <br>
    </div>

    <div class="form-group">
    <label>Username:</label>
    <?php echo form_input('username');?>
    <br></div>

<div class="form-group">
    <label>Password:</label>
    <?php echo form_password('password');?>
    </div>

<div class="form-group">
    <label>Email:</label>
    <?php echo form_input('email');?>
    <br>
    </div>

    <div class="form-group">
    <label>Mobile:</label>
    <?php echo form_input('mobile');?>
    <br>  </div>

        <div class="form-group">
    <label>Address:</label>
    <?php echo form_input('address');?>
    <br>
</div>

 <div class="form-group">
    <?php echo form_submit('mysubmit', 'Save');?>
    <br>
</div>
    </form>
    </div>



    </br>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> 

  </body>
</html>

