<?php 
$input = $_POST['input'];

if ($input == NULL) {
	echo "คุณยังไม่ได้เลือกรูปภาพ";
} elseif ($input) {
	include '../system.php';
	$class = new shopweb;
	$edprofire = $class->changeprofire($input);
	echo "$edprofire";
} else {
	echo "คุณยังไม่ได้เลือกรูปภาพ";
}

?>