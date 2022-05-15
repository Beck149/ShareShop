<?php 

$id = $_POST['id'];

if ($id == NULL) {
	echo "ไม่พบสินค้า";
} else {
	include '../system.php';
	$class = new shopweb;
	$delete = $class->deleteproduct($id);
	echo $delete;
}

?>