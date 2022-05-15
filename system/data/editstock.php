<?php 

$id = $_POST['id'];

/*
$order   = array("\r\n", "\n", "\r","");
$replace = "<br/>\n";
$stock = str_replace($order, $replace, $_POST['content']);
*/

if (empty($_POST['content'])) { // or empty($stock)
	echo "กรุณากรอกสินค้าที่จะลง";
} else {
	include '../system.php';
	$class = new shopweb;
	$edit = $class->editstock($id,$_POST['content']);
	// or $edit = $class->editstock($id,$stock);
	echo $edit;
}

 ?>