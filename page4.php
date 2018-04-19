<?php
include('header.php');

if(!empty($_POST)){
	
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['city'] = $_POST['city'];
	$_SESSION['state'] = $_POST['state'];
	
	$insert = insert($_SESSION);
	
}
?>

<div class='container'>

	<div class='row'>		
		<div class='col-sm-4'></div>
		<div class='col-sm-4'>
			 <?php
				if($insert==1){
					show_results($_SESSION);
				}else{
					echo '<h3>Failed to insert data into database.</h3>';
				} 
			 ?>
		</div>
		<div class='col-sm-4'></div>
	</div>

</div>

<?php
include('footer.php');
?>