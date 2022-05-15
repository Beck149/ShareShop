<?php

if (empty($_POST['id'])) {
	echo "ไม่มีสินค้านี้";
}else{
	include '../system.php';
	$class = new shopweb;
	$buy = $class->buyproduct($_POST['id']);
	echo $buy;
}

?>