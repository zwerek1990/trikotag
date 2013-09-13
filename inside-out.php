<!DOCTYPE html>
<html>
<head>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/components/head.php');
?>

</head>
<body id="noscroll">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/components/topline.php');
?> 
<script type="text/javascript" src="js/gallery.js"></script>

<div class="arrow" id="to_left"><a><span></span></a></div>
<div class="arrow" id="to_right"><a><span></span></a></div>

<ul class="collection_slider">
	<li>
		<img class="big_image" src="img/collections/inside-out/full/1.jpg"/>

		<div class="desc">
			<h3>На парне слева <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>

			<h3>На девушке <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>

			<h3>На девушке слева <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>
		</div>

	</li>
	<li>
		<img class="big_image" src="img/collections/traditions/full/7.jpg" alt="Модель 1"/>

		<div class="desc">
			<h3>На парне слева <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>
			<h3>На девушке <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>
		</div>
	</li>


	<li>
		<img class="big_image" src="img/collections/traditions/full/11.jpg" alt="Модель 1"/>

		<div class="desc">
			<h3>На парне слева <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>
			<h3>На девушке <span class="caret"></span></h3>
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/components/goods_gallery.php");
			?>
		</div>

	</li>
</ul>
</body>
</html>