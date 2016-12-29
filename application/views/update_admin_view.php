
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
<div>

 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Update Admin Details</h1>
</div> 

 
<form>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
  



    <?php
    $data = array(
                  'name'  => "myform",
                  'onsubmit' => "return validateForm()"
                   );
    ?>
    
    
      <?php foreach ($results as $data): ?>

      <?php echo form_open_multipart('update_users_data/update_users_edit');?>


  
    <div>

    <label></label>
    <?php echo form_hidden('id', $data->id);?>

    <div class="form-group">
    <label>Full Name:</label>
    <?php echo form_input('name',  $data->name);?>
    <br>
    </div>

    <div class="form-group">
    <label>username:</label>
    <?php echo form_input('username', $data->username);?>
    <br>
    </div>

    <div class="form-group">
    <label>password:</label>
    <?php echo form_password('password',  $data->password);?>
    <br>
</div>
    

<div class="form-group">

				<input type="submit" id="submit" name="save" value="Save">
				</br>
</div>
				</form>

			<?php endforeach; ?>

		</div>


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

