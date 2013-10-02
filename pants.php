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
<?php
session_start();
if (isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $id => $article) {
			foreach($article as $size => $num){

			}
		}
}
?>
<div class="cart_anchor">
	<a href="/cart.php">
		<p>В корзине товаров на <span> 12312 р.</span></p>
	</a>
</div>
<div class="sheet clearfix">
	<div id="good_preview">
		<ul class="s_gallery clearfix">
			<?php
				for($i=1;$i<=rand(2,4);$i++){
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
	</div>

	<div id="good_image">
		<a href="img/collections/school/full/2.jpg" rel="gallery" class="fancyfull" title="">
			<img src="img/collections/traditions/thumbs/<?php echo rand(12,24);?>.jpg"/>
		</a>
	</div>
	
	<div id="good_desc">
		<div id="product_brand">
			<div class="logo" >
				<a href="/traditions.php" title="Посмотреть каталог товаров traditions">
					<img src="/img/collections/traditions/traditions.png"/>
					<img class="hide" src="/img/collections/traditions/traditionsH.png"/>
				</a>
			</div>
			<a href="/traditions.php" title="Посмотреть каталог товаров traditions">
				Все товары <span>Traditions</span>
			</a>
		</div>

        <div class="product_title">
			<a href="/category.php">женские</a>
			<a href="/category.php">брюки</a>
			<h1>QUAT 12</h1>
			<p><span>#23137</span></p>
        </div>    

		<p>Очень интересное описание брюк. Это замечательные брюки, которые вам носить-несносить. Они стильные, удобные и очень надежные.</p>
		<p><span>состав:</span>хлопок 95% эластан 5%</p>
		<h2 id="product_price"><?=rand(200,1200)." р.";?></h2>
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
		
		<a class="button price  to_cart" data-id="<?=rand(1,32);?>">Сначала выберите размер</a>
		<a class="button ask"  href="ask.php?name=Брюки Quat 1&price=100">задать вопрос по товару</a>
		
		<?php
		$count_diff = rand(0,6);
		if ($count_diff){
			echo '<h3>Другие цветовые решения:</h3>
			<ul class="s_gallery six clearfix">';
				for($i=1;$i<=$count_diff;$i++){
					echo '<li>
						<a 
							href="/pants.php" 
							rel="gallery" 
							class="fancybox" 
							title="">
							<img  src="img/collections/traditions/thumbs/'.rand(12,24).'.jpg"/>
						</a>
					</li>';
				}
			echo "</ul>";
		}
		?>
		
		<div class="about"><a href="">состав и уход</a> | <a href="">доставка товаров</a> | <a href="">обмен и возврат</a></div>
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
</html>