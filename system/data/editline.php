<?php

$line = $_POST['line'];

if ($line == NULL ) {
	echo "กรุณากรอก@line";
} else {
	include '../system.php';
	$class = new shopweb;
	$le = $class->editline($line);
	echo $le;
}

 ?>