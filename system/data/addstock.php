<?php 
include '../system.php';


//$order   = array("\r\n", "\n", "\r");
//$replace = "<br/>\n";


//$stock = str_replace($order, $replace, $_POST['inputItemData']);

if (empty($_POST['id'])) {
	echo "ไม่พบสินค้านี้";
} elseif (empty($_POST['inputItemData'])) {
	echo "กรุณากรอกสินค้าที่จะลง";
} elseif($_SESSION['status'] !== "admin") {
	echo "พ่องตาย";
} else {
	$class = new shopweb;
	$add = $class->addstock($_POST['id'],$_POST['inputItemData']);
	echo $add;
}
?>