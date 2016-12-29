<!DOCTYPE html>

<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Foodbase</title>
          
    <!-- Bootstrap core CSS --> 
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylee.css" />
    

    

          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">Admin Panel</h3>
            <h4>Hi <?php echo $username; ?>! Feel free to customise, update the database! </h4>
            
              
                   
            <div class="col-xs-6 col-sm-3 placeholder">
              <p></p>
              <p></p>


          
   

    <img src="<?php echo base_url(); ?>images/admin.png" class="img-responsive" height= "150" width= "150">
              <h4>Admin</h4>
              <?php echo anchor('admin', '<button type="button" class="btn btn-primary">Add</button>')?>
              <?php echo anchor('show_admin_data/pagination_data', '<button type="button" class="btn btn-info">View</button>')?>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="<?php echo base_url(); ?>images/users.png" class="img-responsive" height= "150" width= "150">
              <h4>Users</h4>
              <?php echo anchor('user/user_input', '<button type="button" class="btn btn-primary">Add</button>')?>
              <?php echo anchor('show_users_data/pagination_data', '<button type="button" class="btn btn-info">View</button>')?>
            </div>


          </div>         
     
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
            <h3>Menu</h3>  
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="<?php echo base_url(); ?>images/baconmcdouble.png" class="e" height= "150" width= "150">
              <h4>Burgers</h4>
              <?php echo anchor('burger/burger_input', '<button type="button" class="btn btn-primary">Add</button>')?>
              <?php echo anchor('show_data_admin/burger', '<button type="button" class="btn btn-info">View</button>')?>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="<?php echo base_url(); ?>images/chicken.png" class="" height= "150" width= "150">
              <h4>Chicken</h4>
              <?php echo anchor('chicken/chicken_input', '<button type="button" class="btn btn-primary">Add</button>')?>
              <?php echo anchor('show_data_admin/chicken', '<button type="button" class="btn btn-info">View</button>')?>
            </div>

            
        
         <div class="col-xs-6 col-sm-3 placeholder">
              <img src="<?php echo base_url(); ?>images/pizza1.png" class="" height= "150" width= "150">
              <h4>Pizza</h4>
              <?php echo anchor('pizza/pizza_input', '<button type="button" class="btn btn-primary">Add</button>')?>
              <?php echo anchor('show_data_admin/pizza', '<button type="button" class="btn btn-info">View</button>')?>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="<?php echo base_url(); ?>images/VanillaShake.png" class="" height= "150" width= "150">
              <h4>Drinks</h4>
              <?php echo anchor('drinks/drinks_input', '<button type="button" class="btn btn-primary">Add</button>')?>
              <?php echo anchor('show_data_admin/drinks', '<button type="button" class="btn btn-info">View</button>')?>
            </div>


        </div>     
 

       
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
         <div class="col-xs-6 col-sm-3 placeholder">
            
            <p></p>
             <h3>Chef Panel</h3>  
           <p></p>
             
              <?php echo anchor('chefdata/chef', '<button type="button" class="btn btn-info">Check Orders</button>')?>
              
            </div>

        </div>

</div>



         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
         <div class="col-xs-6 col-sm-3 placeholder">
            
            <p></p>
             <h3></h3>  
           <p>    </p>
             
              
              
            </div>

        </div>

</div>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
         <div class="col-xs-6 col-sm-3 placeholder">
            
            <p></p>
             <h3></h3>  
           <p>    </p>
             
              
              
            </div>

        </div>

</div>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
         <div class="col-xs-6 col-sm-3 placeholder">
            
            <p></p>
             <h3></h3>  
           <p>    </p>
             
              
              
            </div>

        </div>

</div>

  
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

  


          