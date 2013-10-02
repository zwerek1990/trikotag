<!DOCTYPE html>
<html>
<head>
<?php
   include($_SERVER['DOCUMENT_ROOT']."/components/head.php");
?>
</head>
<body>
<?php
  include($_SERVER['DOCUMENT_ROOT']."/components/topline.php");
?> 


<div class="sheet">
	<a href="/" id="main_logo">
		<img src="/style/img/logo_tr.png"/>
	</a>
	
	<div class="center">
		<h1>Коллекции</h1>
		<p>Чулочно- трикотажной фабрики</p>
	</div>

	<div id="collections" class="clearfix">
		<div class="column" id="collection-io">
		  <a href="/inside-out.php" class="promo" tabindex="2"><span class="game-tip">коллекция INSIDE - OUT</span></a>
		</div>

		<div class="column" id="collection-trad">
		  <a href="/traditions.php" class="promo" tabindex="2"><span class="game-tip">коллекция Traditions</span></a>
		</div>

		<div class="column" id="collection-school2013">
		  <a href="/school.php" class="promo" tabindex="2"><span class="game-tip">Школьная форма</span></a>
		</div>

		<div class="column" id="collection-vesna2013">
		  <a href="/vesna2013.php" class="promo" tabindex="2"><span class="game-tip">Весна-Лето 2013</span></a>
		</div>

		<span class="clear"><!-- --></span>
	</div>
	<script type="text/javascript">
		 //<![CDATA[
			$(document).ready(function(){
				$('.promo').each(function(){
					var promo = $(this);
					var hover = promo.clone().addClass("hover");
					promo.attr('tabindex', '-1');
					promo.css({"background-position":"0 0"});
					promo.after(hover);
				});
			});
		//]]>
	 </script>
</div>

<div class="sheet">
	<div class="center">
		<p>Большая галерея фотографий</p>
	</div>

	<ul class="grid clearfix">
		<li><a data-fancybox-type="iframe" class="button c_inside-out" href="/inside-out.php">Inside-Out</a></li>
		<li><a data-fancybox-type="iframe" class="button c_traditions" href="school.php">Traditions</a></li>
		<li><a data-fancybox-type="iframe" class="button c_school2013" href="school.php">Школьная форма</a></li>
		<li><a data-fancybox-type="iframe" class="button c_vesna2013" href="school.php">Весна</a></li>
	</ul>
</div>	




<?php 
	include($_SERVER['DOCUMENT_ROOT']."/components/production.php");
?>


<ul id="reviews">
	<li class="section clearfix">
		<div class="img">
			<img src="/img/reviews/1.png">
			<p>Семенова Ирина</p>
			<p class="small" >г. Чебоксары</p>
		</div>
		<div class="quote">
			<h1><a href="/new.php">Это качественный и хороший бренд.</a></h1>
			<p>В первую очередь мне очень нравится стиль одежды этой фирмы: модно, удобно и практично. В этом магазине можно найти одежду на любой вкус.</p>
		</div>
	</li>

	<li class="section clearfix">
		<div class="img">
			<img src="/img/reviews/2.png">
			<p>Кириллова Анна</p>
			<p class="small" >г. Новочебоксарск</p>
		</div>
	  <div class="quote">
		 <h1><a href="/new.php">Есть из чего выбрать</a></h1>
		 <p>Данный магазин мне нравится своим ассортиментом. Есть из чего выбрать на любой вкус и возраст. Так же продавцы с тобой вежливы, помогут подобрать или найти в ассортименте магазина. Особенно мне нравятся периоды распродаж скидки доходят до 50%!! И вещи то качественные продают, просто из прошлых коллекций.</p>
	  </div>
   </li>

   <li class="section clearfix">
		<div class="img">
			<img src="/img/reviews/3.png">
			<p>Андрей и Ольга Мироновы</p>
			<p class="small" >г. Нижний Новгород</p>
		</div>
	  <div class="quote">
		 <h1><a href="/new.php">Магазин любимой ценовой категории</a></h1>
		 <p>Да - магазин определенно из моей любимой ценовой категории Вещи недорогие, особенно когда начинаются акции. И важно,что не приставучие консультанты. Не люблю, когда ходят за тобой и вечно спрашивают и предлагают.</p>
	  </div>
   </li>

   <li id="make_review" class="section clearfix">
		<div class="img">
			<img src="/style/img/user.png">
			<p>Отзывчивый покупатель</p>
			<p class="small" >с чувством юмора</p>
		</div>
	  <div class="quote">

<?php 
if (isset($_SESSION['user']['message'])){
	if ($_SESSION['user']['message'] == 'success') {
		//если сообщение успешно отправленно
		echo " <h1>Спасибо за мнение</h1>
		<p>Мы трепетно относимся к каждому отзыву.</p>" ;

	}else if($_SESSION['user']['message'] == 'error') {
		//если есть ошибка
		echo "<h1>Оставь свой отзыв</h1>
		<form class=\"clearfix\" action=\"/mail/review.php\" method=\"POST\">";
		
		if( !empty($_SESSION['user']['name']) ){
			echo "<span>Представьтесь, пожалуйста</span>
			<input type=\"text\" required name=\"name\" 
				placeholder=\"напр: Смирнов Антон\" 
				value=\"".(isset($_SESSION['user']['name'])?$_SESSION['user']['name']:'')."\"/>";
		}else{
			echo "<div class=\"message success\"><p>Представьтесь, пожалуйста</p></div>
			<input type=\"text\" required name=\"name\" 
				placeholder=\"напр: Смирнов Антон\" />";
		}

		if( !empty($_SESSION['user']['contact']) ){
			echo "<span>И как с вами связаться</span>
			<input type=\"text\" required name=\"contact\" 
				placeholder=\"например: +7 900 800 70 60, happy_man@mail.com \" 
				value=\"".(isset($_SESSION['user']['contact'])?$_SESSION['user']['contact']:'')."\"/>";
		}else{
			echo "<div class=\"message success\"><p>Укажите ваши контактные данные</p></div>
			<input type=\"text\" required name=\"contact\" 
				placeholder=\"например: +7 900 800 70 60, happy_man@mail.com \"  />";
		}

		if( !empty($_SESSION['user']['review']) ){
			echo "<span>Отзыв</span>
			<textarea rows=\"6\" name=\"review\"/>".(isset($_SESSION['user']['review'])?$_SESSION['user']['review']:'')."</textarea>";
		}else{
			echo "<div class=\"message success\"><p>Вы настолько немногословны? Напишите хоть что-нибудь.</p></div>
			<textarea rows=\"6\" name=\"review\"/></textarea>	";
		}
		echo "<a class=\"submit\">Поделиться отзывом</a>
		</form>";
	}else{
		//если не удалось отправить письмо
		echo " <h1>Упс, похоже, что у нас какая-то неполадка.</h1>
		<p>Пока мы занимаемся её устранением, позвоните по телефону  (8352) 30-94-33 и передайте ваш отзыв лично.</p>";
	}
	unset($_SESSION['user']['message']);
	unset($_SESSION['user']['review']);

}else{
	//нет сообщения
	echo "<h1>Оставь свой отзыв</h1>
		<form class=\"clearfix\" action=\"/mail/review.php\" method=\"POST\">
		<span>Представьтесь, пожалуйста</span>
		<input type=\"text\" required name=\"name\" 
			placeholder=\"напр: Смирнов Антон\" 
			value=\"".(isset($_SESSION['user']['name'])?$_SESSION['user']['name']:'')."\"/>
		<span>И как с вами связаться</span>
		<input type=\"text\" required name=\"contact\" 
			placeholder=\"например: +7 900 800 70 60, happy_man@mail.com \"
			value=\"".(isset($_SESSION['user']['contact'])?$_SESSION['user']['contact']:'')."\"/>
		<span>Отзыв</span>
		<textarea rows=\"6\" name=\"review\"/>".(isset($_SESSION['user']['review'])?$_SESSION['user']['review']:'')."</textarea>
		<a class=\"submit\">Поделиться отзывом</a>
		</form>";
}
?>

	  </div>
   </li>

 </ul>

<?php
  include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");
?> 
</body>
</html>