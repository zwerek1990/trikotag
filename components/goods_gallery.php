<ul class="s_gallery goods clearfix">
	<?php 
	 $a = array('Джемпер','Шортики','Футболка','Брюки','Чулочки','Куртка');
	 $b = array('QUAT','AXEL','TRFAB');

		for ($i=0;$i<rand(3,12);$i++){
			$name = $a[rand(0,3)].' '.$b[rand(0,2)].' '.rand(1,32);
			echo '<li>
				<a class="img" href="/pants.php">
					<img src="img/collections/school/thumbs/'.rand(1,25).'.jpg"/>
				</a>
				<a class="button price" href="/pants.php">
				<span>всего за</span>'.rand(400,2000).' р.</a>
				<h2><a href="/pants.php">'.$name.'</a></h2>
				<p><span>состав:</span>хлопок 95% эластан 5%</p>
			</li>';
		}
	?>
</ul>