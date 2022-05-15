<?php 

$phone = $_POST['phone'];

if ($phone == NULL ) {
	echo "กรุณากรอกเบอร์";
} else {
	include '../system.php';
	$class = new shopweb;
	$p_num = $class->editphone($phone);
	echo $p_num;
}

 ?>