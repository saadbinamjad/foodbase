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

<div></div>
<script>
  function validateForm() {
    var x = document.forms["mysubmit"]["username"].value;
    if (x==null || x=="") {
        alert("Fill the Username.");
        return false;
    }
    
    }
  }
  </script>

 </head>
 
  
</div> 
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Add New Admin</h1>
<?php
    $data = array(
                  'name'  => "mysubmit",
                  'onsubmit' => "return validateForm()"
                   );
 echo form_open('save_admin_data/save', $data);?>
	
    <div>

   <div class="form-group">

    <label>Name:</label>
    <?php echo form_input('name');?>
    <br>
</div>

<div class="form-group">

    <label>username:</label>
    <?php echo form_input('username');?>
    <br>
</div>
<div class="form-group">

    <label>password:</label>
    <?php echo form_password('password');?>
    <br>
</div>
<div class="form-group">

 
    <?php echo form_submit('mysubmit', 'Save');?>
    <br>
</div>
    </form>
    </div>



    </br>
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>

  


          