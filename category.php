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

<div id="pants" class="section parallax clearfix" data-speed="10">
	<div class="img">
		<img class="ico" src="/img/section/logo200w.png"/>
		<p>Чебоксарский трикотаж</p>
		<p class="small" >бренду больше полвека</p>
	</div>
	<div class="quote back_black">
		<h1><a href="/category.php">Брюки</a></h1>
		<p>Изделия Чулочно - трикотажной фабрики зарекомендовали себя как качественная, экологичная и надежная продукция.</p>
	</div>
</div>


<?php 
	include($_SERVER['DOCUMENT_ROOT']."/components/production.php");
?>

<div class="sheet">
	<?php
		include ($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
	?>
</div>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/components/footer.php");
?> 
</body>
</html>