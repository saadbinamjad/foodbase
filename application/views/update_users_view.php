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

    
    </head>
<body>
		<p> Update Drinks Data:</p> </br>
			
			<?php foreach ($results as $data): ?>

				<?php echo form_open_multipart('update_users_data/update_users_edit');?>


     <diV> 

    <label>User</label>

    <label></label>
    <?php echo form_hidden('id', $data->id);?>
    <br>

    <label>username:</label>
    <?php echo form_input('username', $data->username);?>
    <br>

    <label>password:</label>
    <?php echo form_password('password',  $data->password);?>
    <br>

    <label>Full Name:</label>
    <?php echo form_input('name',  $data->name);?>
    <br>

    <label>Email:</label>
    <?php echo form_input('email', $data->email);?>
    <br>
    
    <label>Mobile:</label>
    <?php echo form_input('mobile', $data->mobile);?>
    <br>
    
    <label>Address:</label>
    <?php echo form_input('address', $data->address);?>
    <br>



				<input type="submit" id="submit" name="save" value="Save">
				</br>

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
