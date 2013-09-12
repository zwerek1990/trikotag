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
	<p>при оформлении заказа указанные вещи  и вы можете их забрать в выбранном</p>
	<ul id="cart">

		<li id="692114" class="clearfix">
	       	<a class="delete" onclick="deleteItem('692114')" ><span>удалить товар из заказа</span></a>
			<a class="img" href="/pants.php">
				<img src="img/collections/traditions/thumbs/2.jpg">
			</a>
			<div class="cart_desc">
				<h3>Брючки QUAT 44</h3>
		       	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		       	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		       	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		       	consequat. </p>
		       	<p><input type="text" size="2" value="1" maxlength="3" name="qty_692114" onkeyup="calcTotal()" > шт. по <span class="cart_price">449 р.</span></p>
			</div>
		</li>
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