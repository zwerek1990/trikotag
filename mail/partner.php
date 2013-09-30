<?php
session_start();
if (!empty($_POST)) {

	//записываем в сессию
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['contact'] = $_POST['contact'];
	$_SESSION['text'] = $_POST['text'];
	
	//проверка на наличие данных
	if(empty($_POST['name']) || empty($_POST['contact']) || empty($_POST['text']) ){
		$_SESSION['message']='error';
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php#partnership');
		exit();
	}


	//формируем письмо
	$to = 'zwerek1990@gmail.com';
	$subject = 'Предложение сотрудничества';
	
	$message=$_POST['name'] . "\n";
	$message.="контактные данные: " . $_POST['contact']."\nпредлагает:\n";
	$message.=$_POST['text'];

	$headers  = "From: \"Чебоксарский трикотаж\" <trikota21.ru>\n";
	$headers .= "Content-type: text/plain; charset=\"utf-8\"";

	if(mail($to, $subject, $message, $headers)){
		$_SESSION['message'] = 'success';
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php#partnership');
	}else{
		$_SESSION['message'] = 'fail';
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php#partnership');
	}
}else{
	$_SESSION['message'] = 'error';
	header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php#partnership');
}
?>