<?php 
session_start(); 
if (!isset($_POST['id']) || !isset($_POST['size'])){
	return 0;
}

$id = $_POST['id'];
$size = $_POST['size'];

if (!isset($_SESSION['cart'][$id][$size])){
	return 0;
}else{
	unset($_SESSION['cart'][$id][$size]);
	return 1;
}
?>