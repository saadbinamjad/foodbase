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

  </head>

  <body>
<p></p>
  <div>
   <div>
   
                        <div class="col-xs-9">    
 <div class="col-xs-9">   <?php


      $config['image_library'] = 'gd2';
      $config['source_image'] = './upload';
      $config['create_thumb'] = TRUE;
      $config['maintain_ratio'] = TRUE;
      $config['width'] = 75;
      $config['height'] = 50;

      $this->load->library('image_lib', $config);

      $this->load->library('table');
      
      $tmpl = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1" class="mytable">' );

      $this->table->set_template($tmpl);

    

    foreach($results as $data) {
        $this->table->add_row(array(
          //$data->name, 
          //$data->regular,
          //$data->large,
          
          "<img src= '".base_url()."upload/$data->image' height='200' width='220'>",
          //"<a href='http://localhost/foodbasedemo/index.php/update_drinks_data/update/$data->drinks_id'> <img src= 'http://localhost/foodbase/icons/update.jpg' height='40' width='40'>",
          //"<a href='http://localhost/foodbasedemo/index.php/delete_drinks_data/delete/$data->drinks_id'> <img src= 'http://localhost/foodbase/icons/del.jpg' height='40' width='40'>",
          //"<a href='http://localhost/foodbasedemo/index.php/order_drinks_data/order/$data->drinks_id'> <img src= 'http://localhost/foodbase/icons/order.jpg' height='40' width='40'>",
          //anchor('order/order_data/'. $data->burger_id, 'Order')
          
          )
        );
           
                                  }
      echo $this->table->generate();
    ?>
    <div class="row marketing">
       

        <div class="col-lg-6">
          
          <h3><?php echo $data->name?></h3>
         

 <ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Food Info</a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Food Calories</a></li>
  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews</a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Sales</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home"> 
  <p></p>
  <?php echo $data->info?></p></div>
  
  <div role="tabpanel" class="tab-pane fade" id="profile">
<?php  $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );

      $this->table->set_template($tmpl);

      $this->table->set_heading(array(
          'Total Fat', 
          'Proteins', 
          'Total Carbs', 
          'Calcium',
          'Sodium'
          )
          );
      $this->table->set_template($tmpl);


    foreach($results2 as $data) {
        $this->table->add_row(array(
          $data->total_fat, 
          $data->proteins,
          $data->total_carbs,
          $data->calcium,
          $data->sodium
          )
        );


        } 
                                  
    
    echo $this->table->generate();
    ?>


</div>
  <div role="tabpanel" class="tab-pane fade" id="messages">
  <?php  $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );

      $this->table->set_template($tmpl);

      $this->table->set_heading(array(
          'Customer Name', 
          'Review'
          )
          );
      $this->table->set_template($tmpl);


    foreach($results4 as $data) {
        $this->table->add_row(array(
          $data->customer_name, 
          $data->review
          )
        );


        } 
                                  
    
    echo $this->table->generate();
    ?>

  </div>

  <div role="tabpanel" class="tab-pane fade" id="settings">
  <?php  $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );

      $this->table->set_template($tmpl);

      $this->table->set_heading(array(
          'Quantity ordered in the last 1 week'
          )
          );
      $this->table->set_template($tmpl);


    foreach($results3 as $data) {
        $this->table->add_row(array(
           
          $data->qty
          )
        );


        } 
                                  
    
    echo $this->table->generate();
    ?>
   </div>

</div>

<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>

        </div>

  </div>
<p></p>


      
      </div>

      <div>
 <!-- Bootstrap core JavaScript
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
</html>

