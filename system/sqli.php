<?php 
session_start();
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DATABASE","webshop");
define("DOMAIN", "hitori.127.0.0.1");
define("CHARSET","utf8");
date_default_timezone_set('Asia/Bangkok');
function DB() {
	static $instance;

	if($instance==NULL){

		$opt = array(

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

			PDO::ATTR_EMULATE_PREPARES => FALSE,

		);

		$dsn = "mysql:host=" . HOST . ';dbname=' . DATABASE . ';charset=' . CHARSET;

		$instance = new PDO($dsn, USER, PASSWORD, $opt);
	}
	return $instance;
}
?>