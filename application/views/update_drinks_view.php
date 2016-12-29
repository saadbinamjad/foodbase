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

				<?php echo form_open_multipart('update_drinks_data/update_drinks_edit');?>

	<label>Drinks</label>


    <label></label>
    <?php echo form_hidden('drinks_id', $data->drinks_id);?>

    <br>
    <label>Name:</label>
    <?php echo form_input('name', $data->name);?>
    <br>
    <label>Prices:</label>


    <label>Regular:</label>
    <?php echo form_input('regular', $data->regular);?>
    <br>

    <label>Large:</label>
    <?php echo form_input('single',  $data->large);?>
    <br>

    <label>Reload Food Image: </label>
    <?php echo form_upload('userfile', $data->image);?>
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
