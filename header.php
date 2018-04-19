<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

require_once('config.php');
require_once('functions.php');
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Multipage form</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!--JQUERY-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type='text/javascript'>

	function check(){
			var checked = $("input[type=checkbox]:checked").length;

		  if(!checked) {
			alert("You must check at least one checkbox.");
			return false;
		  }else{
			  return true;
		  }
		}

</script>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
<header>
		<nav class="navbar navbar-default" role="navigation">
				<div class="container"> 
						<!-- Brand and toggle get grouped for better mobile display -->
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
										<li><a href="index.php">Home</a></li>
										<li><a href="page2.php">Page 2</a></li>
										<li><a href="#">Page 3</a></li>
										
								</ul>
						</div>
						<!-- /.navbar-collapse --> 
				</div>
				<!-- /.container --> 
		</nav>
</header>

	
		
	
 
    

 