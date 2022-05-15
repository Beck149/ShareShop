<?php 

include '../system.php';
$class = new shopweb;
$dl = $class->deletestock($_POST['id']);
echo $dl;
?>