<?php 
include 'system/vendor/altorouter/altorouter/AltoRouter.php';

function loadpage($page,$title){
	include 'body/html.php';
	include '_page_/'.$page.'.php';
	include 'body/endhtml.php';
}

$router = new AltoRouter();

if (empty($_SESSION['username'])) {
	$router->map( 'GET', '/', function() {
		loadpage("home","หน้าแรก");
	});
	$router->map( 'GET', '/home', function() {
		loadpage("home","หน้าแรก");
	});
	$router->map( 'GET', '/login', function() {
		loadpage("login","เข้าสู่ระบบ");
	});
	$router->map( 'GET', '/register', function() {
		loadpage("register","สมัครสมาชิก");
	});
	$router->map( 'GET', '/about', function() {
		loadpage("about","เกี่ยวกับเรา");
	});
	$router->map( 'GET', '/shop', function() {
		loadpage("shop","ร้านค้า");
	});
	$router->map( 'GET', '/help', function() {
		loadpage("help","ช่วยเหลือ");
	});
	$router->map( 'GET', '/topup', function() {
		loadpage("topup","เติมเงิน");
	});
	$router->map( 'GET', '/product', function() { 
		loadpage("detailproduct","สินค้า");
	});
	$router->map( 'GET', '/product/[i:id]', function($id) { 
		echo 'movie id ' . $id;
	});
	$router->map( 'GET', '/topup/truewalletgift', function() {
		loadpage("topupgift","เติมเงิน - truewalletgift");
	});
}else{
	$router->map( 'GET', '/', function() {
		loadpage("home","หน้าแรก");
	});
	$router->map( 'GET', '/home', function() {
		loadpage("home","หน้าแรก");
	});
	$router->map( 'GET', '/about', function() {
		loadpage("about","เกี่ยวกับเรา");
	});
	$router->map( 'GET', '/shop', function() {
		loadpage("shop","ร้านค้า");
	});
	$router->map( 'GET', '/help', function() {
		loadpage("help","ช่วยเหลือ");
	});
	$router->map( 'GET', '/profire', function() {
		loadpage("profire","โปรไฟล์");
	});
	$router->map( 'GET', '/product', function() { 
		loadpage("detailproduct","สินค้า");
	});
	$router->map( 'GET', '/editimageprofire', function() { 
		loadpage("editprofire","แก้ไขรูปโปรไฟล์");
	});
	$router->map( 'GET', '/topup', function() {
		loadpage("topup","เติมเงิน");
	});
	$router->map( 'GET', '/setting', function() { 
		loadpage("setting","ตั้งค่าความเป็นส่วนตัว");
	});
	$router->map( 'GET', '/topup/truewallet', function() {
		loadpage("topuptw","เติมเงิน - truewallet");
	});
	$router->map( 'GET', '/topup/truewalletgift', function() {
		loadpage("topupgift","เติมเงิน - truewalletgift");
	});
	$router->map( 'GET', '/backend', function() {
		if ($_SESSION['status'] == "admin") {
			loadpage("backend","จัดการหลังร้าน");
		}else{
			header( "location: /" );
		}
	});
}


$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	header( "location: /" );
}
?>