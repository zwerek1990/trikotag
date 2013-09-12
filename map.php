<!DOCTYPE html>
<html>
<head>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/components/head.php');
?>
<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script src="/js/map.js"></script> 
</head>
<body class="clearfix map">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/components/topline.php');
?>
<div id="map"></div>
<div class="sheet">
	<h1>Фирменные магазины Чебоксарского трикотажа</h1>
	<ul class="card_list">
		<h3>Чебоксары</h3>
		<li id='kalinina'>
			<h2>Фирменный магазин Чебоксарского трикотажа</h2>
			<p>г. Чебоксары, ул. Калинина д.107</p>
			<p>телефон: (8352) 30-94-30</p>
			<div class="info">
				<p>В центре города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине по Улице Калинина</p>
				<ul class="s_gallery clearfix">
					<?php
					for($i=1;$i<=10;$i++){
						echo '<li><a 
							href="img/stores/kalinina/full/'.$i.'.jpg" 
							rel="gallery" 
							class="fancybox" 
							title="">
						<img src="img/stores/kalinina/thumbs/'.$i.'.jpg" alt="Магазин"/>
						</a></li>';
					}
					?>
				</ul>
			</div>
		</li>
		<li id='yarmarka'>
			<h2>Магазин в торговом комплексе Ярмарка</h2>
			<p>г. Чебоксары, Ярмарка</p>
			<p>телефон: (8352) 44-20-83</p>
			<div class="info">
				<p>В центре города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине по в торговом комплексе Ярмарка</p>
				<ul class="s_gallery clearfix">
				<?php
					for($i=1;$i<=6;$i++){
						echo '<li><a 
							href="img/stores/yarmarka/full/'.$i.'.jpg" 
							rel="gallery" 
							class="fancybox" 
							title="">
						<img src="img/stores/yarmarka/thumbs/'.$i.'.jpg" alt="Магазин"/>
						</a></li>';
					}
				?>
				</ul>
			</div>
		</li>
		<li id='shupashkar'>
			<h2>Отдел в универмаге «Шупашкар»</h2>
			<p>г. Чебоксары, пр. Тракторостроителей 1/34, 2 этаж</p>
			<p>телефон: (8352) 54-50-92</p>
			<div class="info">
				<p>В Новоюжном районе города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре «Шупашкар»</p>
				<ul class="s_gallery clearfix">
				<?php
					for($i=1;$i<=6;$i++){
						echo '<li><a 
							href="img/stores/shupashkar/full/'.$i.'.jpg" 
							rel="gallery" 
							class="fancybox" 
							title="">
						<img src="img/stores/shupashkar/thumbs/'.$i.'.jpg" alt="Магазин"/>
						</a></li>';
					}
				?>
				</ul>
			</div>
		</li>
		<li id='kontur'>
			<h2>Магазин в торговом центре «Контур»</h2>
			<p>г.Чебоксары, Ядринское шоссе, 3</p>
			<div class="info">
				<p>В северо-западном районе города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине в торговом центре «Контур»</p>
			</div>
		</li>
		<h3>Новочебоксарск</h3>
		<li id='passage'>
			<h2>Магазин в торговом центре «Пассаж»</h2>
			<p>г. Новочебоксарск, ул. Советская, 40</p>
			<p>телефон: (8352) 48-32-43</p>
			<div class="info">
				<p>В Новочебоксарске приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре «Пассаж»</p>
				<ul class="s_gallery clearfix">
				<?php
					for($i=1;$i<=6;$i++){
						echo '<li><a 
							href="img/stores/passage/full/'.$i.'.jpg" 
							rel="gallery" 
							class="fancybox" 
							title="">
						<img src="img/stores/passage/thumbs/'.$i.'.jpg" alt="Магазин"/>
						</a></li>';
					}
				?>
				</ul>
			</div>
		</li>
		<li id='semiya'>
			<h2>Торговый отдел ООО "Чулочно-трикотажная фабрика" в ТЦ "Семья"</h2>
			<p>г. Новочебоксарск, ул. Винокурова, 70А</p>
			<p>телефон: (8352) 44-48-01</p>
			<div class="info">
				<p>В Новочебоксарске приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре "Семья"</p>
				<ul class="s_gallery clearfix">
					<?php
						for($i=1;$i<=2;$i++){
							echo '<li><a 
								href="img/stores/7ya/full/'.$i.'.jpg" 
								rel="gallery" 
								class="fancybox" 
								title="">
							<img src="img/stores/7ya/thumbs/'.$i.'.jpg" alt="Магазин"/>
							</a></li>';
						}
					?>
				</ul>
			</div>
		</li>
		<h3>Шумерля</h3>
		<li id="oktyabr">
			<h2>Розничный магазин ООО "Чулочно-трикотажная фабрика"</h2>
			<p>г. Шумерля, ул. Октябрьская, 19А</p>
			<p>телефон: (83536) 3-01-99</p>
			<div class="info">
				<p>В Шумерле приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном по улице Октябрьская, 19А</p>
			</div>
		</li>
		<h3>Казань</h3>
		<li id="fuchika">
			<h2>Розничный магазин ООО "Чулочно-трикотажная фабрика"</h2>
			<p>г. Казань, ул. Фучика, 50</p>
			<p>телефон: 8-905-346-07-50</p>
			<div class="info">
				<p>В Казани приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном по  улице Фучика, 50</p>
			</div>
		</li>	
	</ul>
</div>
</body>
</html>