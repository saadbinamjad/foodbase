
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
    var x = document.forms["save"]["userfile"].value;
    if (x==null || x=="") {
        alert("Please upload a picture.");
        return false;
    }
    
    }
  }
  </script>

 </head>
<body>
        
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Update Burger Details</h1>
</div> 

			
			<?php foreach ($results as $data): ?>

				<?php echo form_open_multipart('update_burger_data/update_burger_edit');?>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


	<label>Burgers</label>


    <label></label>
    <?php echo form_hidden('burger_id', $data->burger_id);?>

    <br>
    <div class="form-group">
    <label>Name:</label>
    <?php echo form_input('name', $data->name);?>
    <br>
    </div>

    <div class="form-group">
    <label>Prices:</label>
    </div>


    <div class="form-group">
    <label>Kids:</label>
    <?php echo form_input('kids', $data->kids);?>
    <br>

    <div class="form-group">
    <label>Single:</label>
    <?php echo form_input('single',  $data->single);?>
    <br>
</div>
<div class="form-group">

    <label>Doubles:</label>
    <?php echo form_input('doubles',  $data->doubles);?>
    <br>
</div>

<div class="form-group">

    <label>Food Info:</label>
    <?php echo form_input('info',  $data->info);?>
    <br>
</div>

<div class="form-group">
    <label>Food Image: </label>
    <?php echo form_upload('userfile', $data->image);?>
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
