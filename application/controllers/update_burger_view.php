<html>
<head>
        <meta charset="utf-8">
        <title>Foodbase</title>
          <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
      <h1>Foodbase Admin Panel</h1>
       <?  
      $this->load->library('table');
      $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="10" cellspacing="0" class="mytable">' );
      $this->table->set_template($tmpl);
      $this->table->add_row(array(anchor('welcome', 'Home'),
       anchor('welcome/logout', 'Log Out')));
      echo $this->table->generate();
      ?>
    
    </head>
<body>
		<p> Update Burger Data:</p> </br>
			
			<?php foreach ($result as $burger): ?>

				<?php echo form_open_multipart('update_data/update_edit');?>

	<label>Burgers</label>


    <label></label>
    <?php echo form_hidden('burger_id');?>

    <br>
    <label>Name:</label>
    <?php echo form_input('name', $burger->burger_name);?>
    <br>
    <label>Prices:</label>


    <label>Kids:</label>
    <?php echo form_input('kids', $burger->kids);?>
    <br>

    <label>Single:</label>
    <?php echo form_input('single',  $burger->single);?>
    <br>

    <label>Doubles:</label>
    <?php echo form_input('doubles',  $burger->doubles);?>
    <br>

    <label>Food Image: </label>
    <?php echo form_upload('userfile');?>
    <br>


				<?php echo form_open_multipart('update_data/update_edit');?>

				<?php echo form_hidden('id', $burger->id);?>

				<label>First Name :</label>
				<?php echo form_input('fname', $employees->fname);?>
				</br>

				<label>Last Name :</label>
				<?php echo form_input('lname', $employees->lname);?>

				</br>

				<label>Date of Birth:</label>
				<?php echo form_input('dob', $employees->dob);?>

				</br>

				<label>Mobile:</label>
				<?php echo form_input('mobile', $employees->mobile);?>

				</br>

				<label>Join Date:</label>
				<?php echo form_input('joindate', $employees->joindate);?>

				</br>

				<label>Salary:</label>
				<?php echo form_input('salary', $employees->salary);?>
				</br>


				<label>Profile Picture</label>
				<?php echo form_upload('userfile', $employees->propic);?>
				</br>
				</br>

				<input type="submit" id="submit" name="save" value="Save">
				</br>

				</form>

			<?php endforeach; ?>

		</div>
	</body>
</html>
