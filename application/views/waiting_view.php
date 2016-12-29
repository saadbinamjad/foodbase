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
 
  <h1>Happy Waiting!</h1>
  <h3>Chef will be serving shortly</h3>

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


<p></p>
 <?php echo anchor('review/comment', '<button type="button" class="btn btn-info">Post a review</button>')?>
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
