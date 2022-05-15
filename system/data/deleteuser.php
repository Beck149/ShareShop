<?php 

$id = $_POST['id'];

if ($id == NULL) {
	echo "ไม่พบผู้ใช้";
} else {
	include '../system.php';
	$class = new shopweb;
	$delete = $class->deleteuser($id);
	echo $delete;
}

 ?>