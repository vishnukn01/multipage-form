<?php
include ('header.php');

if(!empty($_POST)){
	
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];	
	
}
?>

<div class='container' >
		
		<div class='row'>
		
			<div class='col-sm-4'></div>
			<div class='col-sm-4'   style='text-align: center;'>
				<h3 class='heading'>Step 2</h3>
				<form action='page3.php' method='post' onsubmit='return check();'>
					
					<?php
					$checkbox = array(
						'acrobatics'=>'Acrobatics',
						'acting'=> 'Acting',
						'cricket'=> 'Cricket',
						'swimming'=>'Swinning',
						'dancing'=>'Dancing',
						'running'=> 'Running'
					);
					createCheckbox('myCheckbox','myCheckbox','Select your interests',$checkbox);
					echo '<br>';
					submit('Go to step 3 &raquo');
					?>

				</form>
				
			</div>
			<div class='col-sm-4'></div>
		
		</div>
	
		
</div>




<?php
include ('footer.php');

?>