<<<<<<< HEAD
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
<div class="sheet clearfix">
	<a href="img/collections/school/full/2.jpg" rel="gallery" class="fancyfull" title="">
		<img id="good_image" src="img/collections/traditions/thumbs/<?php echo rand(12,24);?>.jpg"/>
	</a>	
	<div id="good_desc">
		<h1>Брюки QUAT 12</h1>
		<div class="breadcrumbs">
			<a href="/category.php">Женщинам </a> / 
			<a href="/category.php">Брюки, Шорты</a>
		</div>
		<ul class="s_gallery clearfix">
		<?php
			for($i=1;$i<=8;$i++){
			echo '<li>
				<a 
				href="img/collections/traditions/thumbs/'.rand(12,24).'.jpg" 
				rel="gallery" 
				class="fancybox" 
				title="">
				<img  src="img/collections/traditions/thumbs/'.rand(12,24).'.jpg"/>
				</a>
			</li>';
		}
		?>
		</ul>
		<div class="about"><a href="">состав и уход</a> | <a href="">доставка товаров</a> | <a href="">обмен и возврат</a></div>
		<p>Очень интересное описание брюк. Это замечательные брюки, которые вам носить-несносить. Они стильные, удобные и очень надежные.</p>
		<p><span>состав:</span>хлопок 95% эластан 5%</p>
		<p>
			<select id="size" name="size">
				<option selected disabled>выберите размер:</option>
				<option value="XS">XS</option>
				<option value="S">S</option>
				<option value="M">M</option>
				<option value="L">L</option>
				<option value="XL">XL</option>
			</select>
		</p>
		<a class="button price to_cart">
			<span>добавить в заказ</span>всего за 459 р.
		</a>
		<a class="button ask" href="ask.php?name=Брюки Quat 1&price=100">задать вопрос по товару</a>
	</div>
</div>


<div class="sheet">
	<h2>Еще из этой коллекции:</h2>
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
	?> 
</div>
<?php 
	include($_SERVER['DOCUMENT_ROOT']."/components/production.php");
?>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");
?> 
</body>
=======
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
<div class="sheet clearfix">
	<a href="img/collections/school/full/2.jpg" rel="gallery" class="fancyfull" title="">
		<img id="good_image" src="img/collections/traditions/thumbs/<?php echo rand(12,24);?>.jpg"/>
	</a>	
	<div id="good_desc">
		<h1>Брюки QUAT 12</h1>
		<div class="breadcrumbs">
			<a href="/category.php">Женщинам </a> / 
			<a href="/category.php">Брюки, Шорты</a>
		</div>
		<ul class="s_gallery clearfix">
		<?php
			for($i=1;$i<=8;$i++){
			echo '<li>
				<a 
				href="img/collections/traditions/thumbs/'.rand(12,24).'.jpg" 
				rel="gallery" 
				class="fancybox" 
				title="">
				<img  src="img/collections/traditions/thumbs/'.rand(12,24).'.jpg"/>
				</a>
			</li>';
		}
		?>
		</ul>
		<div class="about"><a href="">состав и уход</a> | <a href="">доставка товаров</a> | <a href="">обмен и возврат</a></div>
		<p>Очень интересное описание брюк. Это замечательные брюки, которые вам носить-несносить. Они стильные, удобные и очень надежные.</p>
		<p><span>состав:</span>хлопок 95% эластан 5%</p>
		<p>
			<select id="size" name="size">
				<option selected disabled>выберите размер:</option>
				<option value="XS">XS</option>
				<option value="S">S</option>
				<option value="M">M</option>
				<option value="L">L</option>
				<option value="XL">XL</option>
			</select>
		</p>
		<a class="button price to_cart">
			<span>добавить в заказ</span>всего за 459 р.
		</a>
		<a class="button ask" href="ask.php?name=Брюки Quat 1&price=100">задать вопрос по товару</a>
	</div>
</div>


<div class="sheet">
	<h2>Еще из этой коллекции:</h2>
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
	?> 
</div>
<?php 
	include($_SERVER['DOCUMENT_ROOT']."/components/production.php");
?>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");
?> 
</body>
>>>>>>> 6bd5f7f47edec5b4bb0acca6caad895ea3a0cdc3
</html>