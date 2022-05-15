<?php 

$user = $_POST['user_email'];
$email = $_POST['user_email'];
$pass = $_POST['pass'];


if ($user == NULL) {
	echo "กรุณากรอก ชื่อผู้ใช้ หรือ อีเมล";
}elseif ($email == NULL) {
	echo "กรุณากรอก ชื่อผู้ใช้ หรือ อีเมล";
}elseif ($pass == NULL){
	echo "กรุณากรอกรหัสผ่าน";
}else{
	include '../system.php';
	$class = new shopweb;
	$login = $class->login($user,$email,$pass);
	echo "$login";
}

?>