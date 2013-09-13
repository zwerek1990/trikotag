<<<<<<< HEAD
<?php
if (!empty($_POST)) {
	if(empty($_POST['name'])){
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=1&contact='.($_POST['contact']?$_POST['contact']:'').'&text='.($_POST['text']?$_POST['text']:''));
		die();
	}
	if(empty($_POST['contact'])){
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=2&name='.($_POST['name']?$_POST['name']:'').'&text='.($_POST['text']?$_POST['text']:''));
		die();
	}

	$to = 'zwerek1990@gmail.com';
	$subject = 'Предложение сотрудничества';
	$message = "";
	$message.=($_POST['name']?$_POST['name']:'')."\n";

	$message.=( $_POST['contact']?("контактные данные: " . $_POST['contact']." "):'');
	$message.="\n";
	$message.="предлагает:\n";
	$message.=($_POST['text']?($_POST['text']."\n"):'');

	$headers  = "From: \"Чебоксарский трикотаж\" <trikota21.ru>\n";
	$headers .= "Content-type: text/plain; charset=\"utf-8\"";

	if(mail($to, $subject, $message, $headers)){
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=0');
		die();
	}else{
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=1');
		die();
	}
}else{
	header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=1');
	die();
}
=======
<?php
if (!empty($_POST)) {
	if(empty($_POST['name'])){
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=1&contact='.($_POST['contact']?$_POST['contact']:'').'&text='.($_POST['text']?$_POST['text']:''));
		die();
	}
	if(empty($_POST['contact'])){
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=2&name='.($_POST['name']?$_POST['name']:'').'&text='.($_POST['text']?$_POST['text']:''));
		die();
	}

	$to = 'zwerek1990@gmail.com';
	$subject = 'Предложение сотрудничества';
	$message = "";
	$message.=($_POST['name']?$_POST['name']:'')."\n";

	$message.=( $_POST['contact']?("контактные данные: " . $_POST['contact']." "):'');
	$message.="\n";
	$message.="предлагает:\n";
	$message.=($_POST['text']?($_POST['text']."\n"):'');

	$headers  = "From: \"Чебоксарский трикотаж\" <trikota21.ru>\n";
	$headers .= "Content-type: text/plain; charset=\"utf-8\"";

	if(mail($to, $subject, $message, $headers)){
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=0');
		die();
	}else{
		header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=1');
		die();
	}
}else{
	header('Location:'.$_SERVER['HTTP_ORIGIN'].'/about.php?status=1');
	die();
}
>>>>>>> 6bd5f7f47edec5b4bb0acca6caad895ea3a0cdc3
?>