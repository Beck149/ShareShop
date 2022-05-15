<?php 

$nameweb = $_POST['nameweb'];

if ($nameweb == NULL ) {
	echo "กรุณากรอกชื่อเว็บ";
} else {
	include '../system.php';
	$class = new shopweb;
	$name = $class->editname($nameweb);
	echo $name;
}

 ?>