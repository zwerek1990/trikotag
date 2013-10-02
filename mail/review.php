<?php
session_start();
if (!empty($_POST)) {

	//записываем в сессию
	$_SESSION['user']['name'] = $_POST['name'];
	$_SESSION['user']['contact'] = $_POST['contact'];
	$_SESSION['user']['review'] = $_POST['review'];
    
	//проверка на наличие данных
	if(empty($_POST['name']) || empty($_POST['contact']) || empty($_POST['review']) ){
		$_SESSION['user']['message']='error';
    }else{
    	//формируем письмо
    	$to = 'zwerek1990@gmail.com';
    	$subject = 'Благодарный отзыв';
    	
    	$message=$_POST['name'] . "\n";
    	$message.="Контактные данные: " . $_POST['contact']."\nОтзыв:\n";
    	$message.=$_POST['review'];
    
    	$headers  = "From: \"Чебоксарский трикотаж\" <trikota21.ru>\n";
    	$headers .= "Content-type: text/plain; charset=\"utf-8\"";
        
        //посылаем письмо
        if(mail($to, $subject, $message, $headers)){
    		$_SESSION['user']['message'] = 'success';
    	}else{
    		$_SESSION['user']['message'] = 'fail';
    	}
	}
}else{
	$_SESSION['user']['message'] = 'error';
}
header('Location:'.$_SERVER['HTTP_ORIGIN'].'/collections.php#make_review');
?>