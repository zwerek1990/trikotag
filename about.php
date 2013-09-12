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

	<p>Чебоксарский трикотаж - бренд, проверенный временем. Изделия Чулочно- трикотажной фабрики зарекомендовали себя как качественная, экологичная и надежная продукция. Компания стабильно развивается</p>
	<p>Предприятие <a href="about.html">«Чебоксарский трикотаж»</a> занимается оптовой продажей женского, мужского и детского трикотажа. Трикотаж оптом мы предлагаем купить магазинам и предпринимателям для последующей реализации.</p>
	<p>С 1962 года предприятие производит чулочно-носочные и трикотажные изделия для женщин, мужчин и детей из различных видов натурального сырья — хлопок, шерсть, вискоза,и смеси с синтетическими волокнами.</p>
</div>


<div class="blueberry">
  	<ul class="slides">
   	<li><img src="/img/back/slider/1.jpg" /></li>
   	<li><img src="/img/back/slider/2.jpg" /></li>
   	<li><img src="/img/back/slider/3.jpg" /></li>
   	<li><img src="/img/back/slider/4.jpg" /></li>
   	<li><img src="/img/back/slider/5.jpg" /></li>
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
		if(!empty($_GET)){
			if ($_GET['status']  == 0){
				echo '<h1>Спасибо за предложение</h1>
				<p>Ваше запрос	 уже на пути к нам.</p>';
			}else{
			echo'
				<h1>Будем сотрудничать?</h1>
		     	<p>Наверняка у вас есть интересное предложение, которое сможет нас заинтересовать.</p>

		      <form class="clearfix" action="/sent_partnership.php" method="POST">
		 		<span>Мы хотели бы знать кто вы</span>
		 		<input type="text" required name="name" placeholder="напр: ООО Компания " value="'.(isset($_GET['name'])?$_GET['name']:'').'"/>';
				if ($_GET['status'] == 1){
					echo '<div class="message alert"><p>Пожалуйста, представьтесь</p></div>';
				}
		 		echo '<span>И как с вами связаться</span>
		 		<input type="text" required name="contact" placeholder="напр: +7 900 800 70 60, company@mail.com " value="'.(isset($_GET['contact'])?$_GET['contact']:'').'"/>';
				if ($_GET['status'] == 2){
					echo '<div class="message alert"><p>Укажите ваши контактные данные</p></div>';
				}
				echo '<span>Ваше ультра - выгодное предложение</span>
				<textarea rows="6" name="text" />'.(isset($_GET['text'])?$_GET['text']:'').'</textarea>
				<a class="submit">Отправить ваше предложение</a>
				</form>';
			}
		}else{
			echo '
			<h1>Будем сотрудничать?</h1>
			<p>Наверняка у вас есть интересное предложение, которое сможет нас заинтересовать.</p>

			<form class="clearfix" action="/sent_partnership.php" method="POST">
			<span>Мы хотели бы знать кто вы</span>
			<input type="text" required name="name" placeholder="напр: ООО Компания "/>
			<span>И как с вами связаться</span>
			<input type="text" required name="contact"  />
			<span>Ваше ультра - выгодное предложение</span>
			<textarea rows="6" name="text"/></textarea>
			<input type="hidden" name="send"/>
			<a class="submit">Отправить ваше предложение</a>
			</form>';
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
		<img class="ico" src="/style/img/logo200w.png"/>
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