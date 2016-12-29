<!DOCTYPE html>
<style type="text/css">

body, input, select, textarea {
		color: #777;
		font-family: "Source Sans Pro", sans-serif;
		font-size: 16pt;
		font-weight: 300;
		line-height: 1.65em;
		letter-spacing: -0.015em;
	}
</style>

<body>
	<h1>Welcome to Foodbase</h1>
     </h4> Please log in first to proceed...</h4>
    <?php echo validation_errors(); ?>  
    </div>
    
    <div>
    <?php echo form_open('verify_login');?>
	  <label></label>
    <?php echo form_hidden('id');?>
    <br>
    <label>Username:</label>
    <?php echo form_input('username');?>
    <br>

    <label>Password:</label>
    <?php echo form_password('password');?>
    <br>
    
    <?php echo form_submit('mysubmit', 'Log in');?>
    <br>

    </form></body>
    </html>