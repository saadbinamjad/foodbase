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
    background-color:  white;
     background-repeat:    no repeat;
    background-size:    cover;
    background-attachment:  fixed,                fixed;
  }
  
   h1, h2, h3, h4   {color:black}
  p    {color:black}

</style>

	</head>

  <body>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=226812557432207";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <p></p>
  <p></p>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
  <h3>Share your exprience...</h3>

<style>
.rating span {
  font-size: 25px;
  cursor: pointer;
  float: right;
}
.rating span:hover, .rating span:hover ~ span{
  color: red; //gold or any other color 
}
</style>

<script>
$('.rating span').click(function(){
    alert($(this).attr('id'));
})

</script>
<?php

			$this->load->library('table');
			
			$tmpl = array ( 'table_open'  => '<table border="0" cellpadding="5" cellspacing="1" class="mytable">' );

			$this->table->set_template($tmpl);

		
			$this->table->set_template($tmpl);

		
			?>



  <?php foreach ($results1 as $data): ?>

  <?php echo form_open_multipart('save_table_data/save_review');?>

     <div> 
     <label><?php echo $data->name?></label>
     </br>
     <?php echo form_hidden('name', $data->name);?>
     <?php echo form_hidden('burger_id', $data->order_id);?>
     <?php echo form_hidden('chicken_id', $data->order_id);?>
     
    <label>Customer Name</label>
    <?php echo form_input('customer_name');?>
    </br>
    <label>Review</label>
    <?php echo form_input('review');?>
    
  <br><br>
      

<?php endforeach;?>

<input type="submit" id="submit" name="save" value="Post!">
  </form>



<div class="rating">
  <span id="5" class="glyphicon glyphicon-star"></span>
  <span id="4" class="glyphicon glyphicon-star"></span>
  <span id="3" class="glyphicon glyphicon-star"></span>
  <span id="2" class="glyphicon glyphicon-star"></span>
  <span id="1" class="glyphicon glyphicon-star"></span>
</div>

<p></p>


<p>Like or Share!</p>
<div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
</p>
<p> Or Simply just post a comment...</p>
<div class="fb-comments" data-numposts="5" data-colorscheme="light"></div>
</p>
</div>
 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<p></p>
 <?php echo anchor('login/logout', '<button type="button" class="btn btn-info">Home</button>')?>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> </body>

</html>
