<?php 

$web_logo = $_POST['logo'];

if ($web_logo == NULL ) {
	echo "กรุณากรอกที่อยู่โลโก้";
} else {
	include '../system.php';
	$class = new shopweb;
	$logo = $class->editlogo($web_logo);
	echo $logo;
}

?>