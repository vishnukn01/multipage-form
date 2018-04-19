<?php
include('header.php');

if(!empty($_POST)){
	
	$_SESSION['interests'] = $_POST['myCheckbox'];
		
}

?>

<div class='container' id='formbox'>
		
		<div class='row'>
		
			<div class='col-sm-4'></div>
			<div class='col-sm-4'  id='formContainer' style='text-align: center;'>
				<h3 class='heading'>Step 3</h3>
				<form action='page4.php' method='post' style='margin: 10px 0'>			  
				  <?php
				  input('text','address','address','Enter your address');
				  input('text','city','city','Enter your city');
				  input('text','state','stare','Enter your state');
				  submit('Go to step 4 &raquo')
				  ?>
				</form>
			</div>
			<div class='col-sm-4'></div>
		
		</div>
	
</div>

<?php
include('footer.php');
?>