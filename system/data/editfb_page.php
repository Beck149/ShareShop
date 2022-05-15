<?php 

$fb_page = $_POST['fb_page'];

if ($fb_page == NULL ) {
	echo "กรุณากรอกลิ้งเพจ";
} else {
	include '../system.php';
	$class = new shopweb;
	$fb = $class->editfb($fb_page);
	echo $fb;
}

 ?>