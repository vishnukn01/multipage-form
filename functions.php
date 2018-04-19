<?php
function __($text){
	return htmlspecialchars($text);
}

//name, email, address, city, state needs to be sanitized

function input($type,$name,$id,$placeholder){
	
	if(isset($_SESSION[$name])){
		
		echo "	
			<div class=\"form-group\" >
				<label for='$name'>".ucwords($name)."</label>
				<input type='".$type."' name='".$name."' value='".__($_SESSION[$name])."'  id=".$id." class=\"form-control\" placeholder='".$placeholder."' ><br>
			</div>
		 ";
		
		
	}else{
		
		echo "	
			<div class=\"form-group\" >
				<label for='$name'>".ucwords($name)."</label>
				<input type='".$type."' name='".$name."'  id=".$id." class=\"form-control\" placeholder='".$placeholder."' required><br>
			</div>
		 ";	
		 
	}
		 
}

function createCheckbox($name, $id, $label, $fields = array() ){
	
	echo "<p>".$label."</p>";
	foreach($fields as $key=>$value){
		
		if(isset($_SESSION['interests'])){
		
			?>
			<label class='checkbox-inline' >
			<input type='checkbox' name='<?php echo $name?>[]' value='<?php echo $key ?>' <?php if(in_array($key, $_SESSION['interests'])){ echo 'checked'; } ?> >
			<span class='checkbox-title'><?php echo $value; ?></span>
			</label>
			<?php
			
		}else{
			echo "
				<label class='checkbox-inline' >
					<input type='checkbox' name='".$name."[]' value='".$key."' >
					<span class='checkbox-title'>".$value."</span>
				</label>
		
			 ";
		}	
	}
	
	echo '<br>';
	
}

function submit($value=''){
	
	echo "
			<button type=\"submit\" name='submit' class='btn btn-success'>".$value."</button>

		 ";
	
}



function escapeString($string){
	return mysqli_real_escape_string($link, $string);
}

function insert($session_data = array()){

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(!$link){
		echo 'Failed to connect to the db.';
	}
	
	foreach($session_data as $key=>$data){
	
		
		if($key=='interests'){
			$$key = serialize($data);
		}else{
			$data = __($data);
			$data = mysqli_real_escape_string($link, $data);
			$$key = $data;
		}
		
	}
	
	$query = "
				INSERT INTO user_data(name, email, interests, address, city, state)
				VALUES ('$username', '$email', '$interests', '$address', '$city', '$state')
			 ";
	$result = mysqli_query($link, $query);
	if($result == true){
		
		return 1;
	}else{
		echo '<p>Failed to insert your data. Please try again</p>';
	}
	
}

function show_results($session_data = array()){
	

	?>
	
	<table class="table">
				<thead class="thead-dark">
				  <tr>
					<th colspan='2'>Here is the information you submitted.</th>
				  </tr>
				</thead>
				<tbody>
					<tr><td>Username</td><td><?php echo $_SESSION['username']; ?></td></tr>
					<tr><td>Email</td><td><?php echo $_SESSION['email']; ?></td></tr>
					<tr><td>Interests</td><td><?php foreach($_SESSION['interests'] as $int){echo $int.'<br>';} ?></td></tr>
					<tr><td>Address</td><td><?php echo $_SESSION['address']; ?></td></tr>
					<tr><td>City</td><td><?php echo $_SESSION['city']; ?></td></tr>
					<tr><td>State</td><td><?php echo $_SESSION['state']; ?></td></tr>	
				</tbody>
	</table>
	
	<?php
	session_unset();
	session_destroy();
	
}


?>