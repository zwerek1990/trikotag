<?php 
session_start(); 
if (!isset($_POST['id']) || !isset($_POST['size']) || !isset($_POST['num'])){
	return 0;
}

$id = $_POST['id'];
$size = $_POST['size'];
$num = $_POST['num'];

if (!isset($_SESSION['cart'][$id][$size])){
	return 0;
}else{
	$_SESSION['cart'][$id][$size]['num'] = $num;
	return 1;
}
?>