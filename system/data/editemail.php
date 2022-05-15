<?php 

$email = $_POST['email'];

if ($email == NULL ) {
	echo "กรุณากรอกอีเมล";
} else {
	include '../system.php';
	$class = new shopweb;
	$em = $class->editemail($email);
	echo $em;
}

 ?>