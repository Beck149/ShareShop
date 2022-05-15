<?php 

$id = $_POST['id'];
$user = $_POST['user'];
$email = $_POST['email'];
$point = $_POST['point'];
$status = $_POST['status'];
$imgprofire = $_POST['imgprofire'];


if ($point == NULL) {
  echo "คุณไม่ได้เติมพ้อยท์";
} elseif ($user == NULL) {
  echo "คุณไม่ได้กรอกยูสเชอร์";
} elseif ($status == NULL) {
  echo "คุณไม่ได้เติมสถานะ";
} elseif ($imgprofire == NULL) {
  echo "คุณไม่ได้ใส่รูปโปรไฟล์";
} elseif ($email == NULL) {
  echo "คุณไม่ได้กรอกอีเมล";
} else {
  include '../system.php';
  $class = new shopweb;
  $edit = $class->edituser($id,$user,$email,$point,$status,$imgprofire);
  echo $edit;
}

?>