<?php 
$class = new shopweb;
$q = $class->config();
$row = $q->fetch();

$logo = $row['logo'];
$fb_page = $row['page_facebook'];
$name = $row['name'];
$num_phone = $row['number_phone'];
$email = $row['email'];
$line = $row['line'];
$namepage = "Fanpage Facebook";
$date = $row['date'];
?>