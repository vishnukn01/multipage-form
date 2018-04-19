<?php require_once('header.php'); ?>

<div class='container' id='formbox'>
		
		<div class='row'>
		
			<div class='col-sm-4'></div>
			<div class='col-sm-4'  id='formContainer' style='text-align: center;'>
				<h3 class='heading'>Step 1: Contact Information</h3>
				<form action='page2.php' method='post' style='margin: 10px 0'>
				  
				  <?php 
				  input('text','username','username','Enter a username');
				  input('email','email', 'email', 'Your email id');
				  submit('Go to step 2 &raquo'); 
				  ?>
				 
				</form>
			</div>
			<div class='col-sm-4'></div>
		
		</div>
	
		
</div>


<?php include_once('footer.php'); ?>