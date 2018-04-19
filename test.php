<?php

function __($text){
	return htmlspecialchars($text);
}

$t = '<script>alert("Hi there");</script>';

echo __($t);

?>


