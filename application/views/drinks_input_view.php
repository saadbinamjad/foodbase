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
            <h1 class="page-header">Input Drinks Details</h1>
</div> 

      
      
    <?php
    $data = array(
                  'name'  => "myform",
                  'onsubmit' => "return validateForm()"
                   );
    ?>
    
    <?php echo form_open_multipart('save_drinks_data/save', $data);?>
  
    <div>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


    <label>Drinks</label>


    <label></label>
    <?php echo form_hidden('chicken_id');?>

    <br>
    <label>Name:</label>
    <?php echo form_input('name');?>
    <br>
    <label>Prices:</label>

    <label>Regular:</label>
    <?php echo form_input('regular');?>
    <br>

    <label>Large:</label>
    <?php echo form_input('large');?>
    <br>
    
    <label>Food Info:</label>
    <?php echo form_input('info');?>
    <br>
    
    <label>Calories:</label>
    <br>
    
    <label>Total Fat:</label>
    <?php echo form_input('total_fat');?>
    <br>

    <label>Protiens:</label>
    <?php echo form_input('protiens');?>
    <br>

    <label>Total Carbs:</label>
    <?php echo form_input('total_carbs');?>
    <br>

    <label>Calcium:</label>
    <?php echo form_input('calcium');?>
    <br>

    <label>Sodium:</label>
    <?php echo form_input('sodium');?>
    <br>

    <label>Food Image: </label>
    <?php echo form_upload('userfile');?>
    <br>

    <?php echo form_submit('mysubmit', 'Save');?>
    <br>

    </form>

    <?php echo form_submit('mysubmit', 'Save');?>
    <br>

    </form>
    </div>



    </br>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  </body>
</html>

          


