<?php 

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];

if (preg_match('/[^A-Za-z0-9]/', $user)) {
	echo "กรุณาใช้ภาษาอังกฤษ";
}elseif ($user == NULL) {
	echo "กรุณากรอกชื่อผู้ใช้";
}elseif ($email == NULL) {
	echo "กรุณากรอกอีเมล";
}elseif ($pass == NULL) {
	echo "กรุณากรอกรหัสผ่าน";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "กรุณากรอกอีเมลให้ถูกต้อง";
}elseif (strlen($pass) < 6) {
	echo "กรุณากรอกรหัสผ่าน 6 ตัว";
}elseif ($repass == $pass){
	include '../system.php';
	$class = new shopweb;
	$password_hash = password_hash($pass, PASSWORD_DEFAULT);
	$rgt = $class->register($user,$email,$password_hash);
	echo $rgt;
}else {
	echo "กรุณากรอกรหัสผ่านให้ตรงกัน";
}

?>