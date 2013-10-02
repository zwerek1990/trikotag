<?php 
session_start(); 
if (!isset($_POST['id']) || !isset($_POST['size'])){
	return 0;
}

$id = $_POST['id'];
$size = $_POST['size'];

if (!isset($_SESSION['cart'][$id][$size])){
	$_SESSION['cart'][$id][$size]['num']=1;
	return 1;
}else{
	$_SESSION['cart'][$id][$size]['num']++;
	return 1;
}
?>