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
	<h1>Сделать заказ</h1>
	<p>при оформлении заказа вещи будут даставлены в выбранным магазин, где вы и сможете их забрать</p>
	<ul id="cart">
<?php
session_start(); 
if (isset($_SESSION['cart'])){
foreach ($_SESSION['cart'] as $id => $article) {
	foreach($article as $size => $num){
		echo '<li data-id="'.$id.'" data-size="'.$size.'" class="clearfix">
   	<a class="delete"><span>удалить товар из заказа</span></a>
	<a class="img" href="/pants.php">
		<img src="img/collections/traditions/thumbs/'.$id.'.jpg">
	</a>
	<div class="cart_desc">
		<h3>Брючки QUAT '.$id.'</h3>
		<div class="prop">
			<p>размер: <span>'.$size.'</span></p>
		</div>
       	<p><input class="cart_num" type="text" size="2" value="'.$num['num'].'" maxlength="3"> шт. по <span class="cart_price">'.($id).' р.</span></p>
	</div>
</li>';
	}
}
}
?>
	</ul>
	<div class="summary">
		
	</div>
	<a class="button"><span>оформить заказ</span> на 1299 р.</a>
</div>
<div class="sheet">
	Обращаем ваше внимание, что окончательная стоимость заказа, если в нем присутствуют товары и/или услуги, участвующие в акции, будет подтверждена после обработки заказа сотрудником компании.
</div>


<div class="sheet">
	<h2>Возможно, вас заинтересует:</h2>
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
	?> 
</div>

<?php
	include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");
?> 
</body>
</html>