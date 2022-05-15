<?php 

$pass = $_POST['password'];
$new_pass = $_POST['new_pass'];
$cf_pass = $_POST['cf_new_pass'];

if ($pass == NULL) {
	echo "กรุณากรอกรหัสผ่านเก่า";
} elseif ($new_pass == NULL) {
	echo "กรุณากรอกรหัสผ่านใหม่";
} elseif ($cf_pass == NULL) {
	echo "กรุณายืนยันรหัสผ่านใหม่";
} elseif ($cf_pass !== $new_pass) {
	echo "กรุณายืนยันรหัสผ่านใหม่ให้ตรงกัน";
} elseif (strlen($new_pass) < 6) {
	echo "กรุณากรอกรหัสผ่านใหม่อย่างน้อย 6 ตัว";
} else {
	include '../system.php';
	$class = new shopweb;
	$new_password = password_hash($new_pass, PASSWORD_DEFAULT);
	$edpass = $class->changepassword($pass,$new_password);
	echo "$edpass";
}

 ?>