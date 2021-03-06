<!DOCTYPE html>
<html>
<head>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/components/head.php');
?>
</head>
<body>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/components/topline.php');
?>
<div class="sheet">
	<a href="/" id="main_logo">
		<img src="/style/img/logo_tr.png"/>
	</a>

	<div class="about_text">
		<p>"Чебоксарский трикотаж"- одно из крупных предприятий трикотажной промышленности России. Специализируется на производстве чулочно-носочных и трикотажных изделий, основано в 1962 году.</p> 

		<p>Это современное производство с законченным технологическим циклом, оснащенное отечественным и импортным оборудованием.</p> 

		<p>"Чебоксарский трикотаж" выпускает около 200 моделей чулочно-носочных изделий, свыше 250 моделей бельевого и верхнего трикотажа для всех возрастных групп из различных видов сырья в разнообразной гамме расцветок. Современное оборудование и новые технологии позволяют внедрять ежемесячно несколько новых моделей.</p> 

		<p>"Чебоксарский трикотаж" предлагает к продаже модные, комфортные изделия высокого качества, доступные по ценам: 
		колготки женские, носки мужские, детские носки, получулки, колготки; 
		детское белье из хлопчатобумажной пряжи; 
		спортивный трикотаж - костюмы, брюки, шорты; 
		джемперы, халаты, юбки, блузки.</p> 
	</div>
</div>
<div class="blueberry">
  	<ul class="slides">
   	<li><img src="/img/slider/1.jpg" /></li>
   	<li><img src="/img/slider/2.jpg" /></li>
   	<li><img src="/img/slider/3.jpg" /></li>
   	<li><img src="/img/slider/4.jpg" /></li>
   	<li><img src="/img/slider/5.jpg" /></li>
  	</ul>
	<div class="slider_text">
		<ul class="clearfix">
			<li>
				<h3>ООО «Чулочно- трикотажная фабрика»</h3>
				<p>г.Чебоксары, Калинина, 107</p>
				<p>(8352) 30-94-33 </p>
				<p><a href="mailto:priem@trfab.ru">priem@trfab.ru</a></p>
			</li>
		</ul>
	</div>
</div>
<div id="partnership" class="section clearfix">
    <div class="img">
		<img class="ico" src="/style/img/businessman.png"/>
		<p>Удачливый партнер</p>
    	<p class="small" >возможно, это вы ?</p>
    </div>

	<div class="quote">
<?php 
if (isset($_SESSION['user']['message'])){
	if ($_SESSION['user']['message'] == 'success') {
		//если сообщение успешно отправленно
		echo " <h1>Спасибо за предложение</h1>
		<p>Ваше запрос	 уже на пути к нам.</p>" ;

	}else if($_SESSION['user']['message'] == 'error') {
		//если есть ошибка
		echo "<h1>Будем сотрудничать?</h1>
		<p>Наверняка у вас есть интересное предложение, которое сможет нас заинтересовать.</p>
		<form class=\"clearfix\" action=\"/mail/partner.php\" method=\"POST\">";
		
		if( !empty($_SESSION['user']['name']) ){
			echo "<span>Мы хотели бы знать кто вы</span>
			<input type=\"text\" required name=\"name\" 
				placeholder=\"например: ООО 'Активная компания' \" 
				value=\"".(isset($_SESSION['user']['name'])?$_SESSION['user']['name']:'')."\"/>";
		}else{
			echo "<div class=\"message success\"><p>Пожалуйста, представьтесь</p></div>
			<input type=\"text\" required name=\"name\" 
				placeholder=\"например: ООО 'Активная компания' \" />";
		}

		if( !empty($_SESSION['user']['contact']) ){
			echo "<span>И как с вами связаться</span>
			<input type=\"text\" required name=\"contact\" 
				placeholder=\"например: +7 900 800 70 60, company@mail.com \" 
				value=\"".(isset($_SESSION['user']['contact'])?$_SESSION['user']['contact']:'')."\"/>";
		}else{
			echo "<div class=\"message success\"><p>Укажите ваши контактные данные</p></div>
			<input type=\"text\" required name=\"contact\" 
				placeholder=\"например: +7 900 800 70 60, company@mail.com \"  />";
		}

		if( !empty($_SESSION['user']['text']) ){
			echo "<span>Ваше ультра - выгодное предложение</span>
			<textarea rows=\"6\" name=\"text\"/>".(isset($_SESSION['user']['text'])?$_SESSION['user']['text']:'')."</textarea>";
		}else{
			echo "<div class=\"message success\"><p>А где же ваше предложение?</p></div>
			<textarea rows=\"6\" name=\"text\"/></textarea>	";
		}
		echo "<a class=\"submit\">Отправить ваше предложение</a>
		</form>";
	}else{
		//если не удалось отправить письмо
		echo " <h1>Упс, похоже, что у нас какая-то неполадка.</h1>
		<p>Пока мы занимаемся её устранением, позвоните по телефону  (8352) 30-94-33 и обсудите сотрудничество с нами</p>";
	}
	unset($_SESSION['user']['message']);
	unset($_SESSION['user']['text']);

}else{
	//нет сообщения
	echo "<h1>Будем сотрудничать?</h1>
		<p>Наверняка у вас есть интересное предложение, которое сможет нас заинтересовать.</p>

		<form class=\"clearfix\" action=\"/mail/partner.php\" method=\"POST\">
		<span>Мы хотели бы знать кто вы</span>
		<input type=\"text\" required name=\"name\" 
			placeholder=\"например: ООО 'Активная компания' \" 
			value=\"".(isset($_SESSION['user']['name'])?$_SESSION['user']['name']:'')."\"/>
		<span>И как с вами связаться</span>
		<input type=\"text\" required name=\"contact\" 
			placeholder=\"например: +7 900 800 70 60, company@mail.com \"
			value=\"".(isset($_SESSION['user']['contact'])?$_SESSION['user']['contact']:'')."\"/>
		<span>Ваше ультра - выгодное предложение</span>
		<textarea rows=\"6\" name=\"text\"/>".(isset($_SESSION['user']['text'])?$_SESSION['user']['text']:'')."</textarea>
		<a class=\"submit\">Отправить ваше предложение</a>
		</form>";
}
?>
  	</div>
</div>


<div id="jobs" class="sheet">
  	<h1>Вакансии</h1>
  	<p>Мы хотим видеть у себя людей, с радостью производящих хорошую продукцию, и можем предложить нашим сотрудникам интересную и достойную работу. Работу, от которой можно получать удовольствие!</p>
  	<p>Хочешь присоединитсья к нам, но не знаешь с чего начать? Посмотри на открытые вакансии, и, может быть, тебя вдохновит одна из них. В любом случае мы ждем активных, творческих людей и готовы предложить достойную оплату их творческого труда.</p>
    <p><B>Звони (8352) 30-94-33</b> - мы ждем именно тебя!</p>

  	<ul class="grid clearfix">
  		<li >
  			<h3>Грузчик</h3>
  			<img class="ico" src="/style/img/man.png"/>
            <p>требуется грузчик с опытом работы.</p>
            <p>Условия: Прием согласно ТК РФ. Оплачиваемый отпуск‚ больничный. График работы 5/2‚ с 8:00 до 17:00.</p>
            <a data-fancybox-type="iframe" class="button" href="job.php?name=Грузчик">от 9900 руб.</a>
  		</li>
  		<li >
  			<h3>Офис - менеджер</h3>
  			<img class="ico" src="/style/img/group.png"/>
			<p>Требования: Пунктуальность. Коммуникабельность. Обучаемость. Знание ПК‚ на уровне пользователя.</p>
			<p>Обязанности: Координация документооборота. Подготовка сопроводительных документов. Учет заказов. Планирование доставок.</p>
  			<p>Условия: Прием согласно ТК РФ. Оплачиваемый отпуск‚ больничный. График работы 5/2‚ с 8:00 до 17:00.</p>
			<a data-fancybox-type="iframe" class="button" href="job.php?name=Офис - менеджер">от 13 000 руб.</a>
  		</li>
  		<li >
  			<h3>Швея</h3>
  			<img class="ico" src="/style/img/woman.png"/>
			<p>требуется швея с опытом работы от 1 года.</p>
			<p>Условия: Прием согласно ТК РФ. Оплачиваемый отпуск‚ больничный. График работы 5/2‚ с 8:00 до 17:00.</p>
			<a data-fancybox-type="iframe" class="button" href="job.php?name=Швея">от 11 000 руб.</a>
  		</li>
  		<li >
  			<h3>Продавец трикотажа</h3>
  			<img class="ico" src="/style/img/group.png"/>
			<p>Требования: Коммуникабельность. Обучаемость. Знание ПК‚ на уровне пользователя.</p>
			<p>Обязанности: Учет заказов. Планирование доставок. Работа в фирменном магазине. </p>
  			<p>Условия: Прием согласно ТК РФ. Оплачиваемый отпуск‚ больничный. График работы 5/2‚ с 8:00 до 17:00.</p>
            <a data-fancybox-type="iframe" class="button" href="job.php?name=Продавец трикотажа">от 13 000 руб.</a>
  		</li>
  		<li class="g1of4 ">
  			<h3>Электрик</h3>
  			<img class="ico" src="/style/img/man.png"/>
            <p>Требования: Обучаемость. Знание ПК‚ на уровне пользователя.</p>
            <p>Обязанности: Ремонт электрооборудования. Установка электрооборудования. </p>
  			<p>Условия: Прием согласно ТК РФ. Оплачиваемый отпуск‚ больничный. График работы 5/2‚ с 8:00 до 17:00.</p>
            <a data-fancybox-type="iframe" class="button" href="job.php?name=Электрик">от 13 000 руб.</a>
  		</li>
  		<li class="g1of4 ">
  			<h3>Оператор станка раскройки</h3>
  			<img class="ico" src="/style/img/woman.png"/>
            <p>Требования: Обучаемость. Знание ПК‚ на уровне пользователя.</p>
            <p>Обязанности: Работа со станком раскройки. Настройка . </p>
  			<p>Условия: Прием согласно ТК РФ. Оплачиваемый отпуск‚ больничный. График работы 5/2‚ с 8:00 до 17:00.</p>
            <a data-fancybox-type="iframe" class="button" href="job.php?name=Электрик">от 13 000</a>
  		</li>

  	</ul>
</div>


<div id="history" class="section clearfix" style="background-color: #AF414F;">
    <div class="img">
		<img class="ico" src="/img/section/logo200w.png"/>
    	<p>Чебоксарский трикотаж</p>
    	<p class="small" >бренду больше полвека</p>
    </div>
    
	<div class="quote">
    	<h1><a href="/company_history.php">История компании</a></h1>
    	<p>С 1962 года предприятие производит чулочно-носочные и трикотажные изделия для женщин, мужчин и детей из различных видов натурального сырья</p>
  	</div>
</div>

<?php
  include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");
?> 
</body>
</html>