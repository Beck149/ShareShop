<?php 

$user_c = $_POST['user_c'];
$pass_c = $_POST['pass_c'];

if ($user_c == NULL) {
	echo "คุณยังไม่ได้กรอกชื่อผู้ใช้";
} elseif ($pass_c == NULL) {
	echo "คุณยังไม่ได้กรอกรหัสผ่านเพื่อยืนยัน";
} else {
	include '../system.php';
	$class = new shopweb;
	$eduser = $class->changeusername($user_c,$pass_c);
	echo "$eduser";
}

 ?>