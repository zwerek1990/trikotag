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
<div class="sheet big_sheet right_sheet">
   <h1>Распродажа 30%</h1>
   <img src="/img/news/sale30/letom30.jpg"/>
   <p>с 17.07.2013 г. по 18.08.2013 г.  в розничных магазинах ООО «Чулочно-трикотажная фабрика» проходит акция "Летом -30%". Более чем на 100 моделей  весенне-летнего ассортимента действует скидка 30%</p>
   <p>Акция производится на условиях предоплаты, при отсутствии текущей задолженности.</p>
   <p>Всю дополнительную информацию по условиям и ассортименту Вы можете получить у менеджеров отдела продаж.</p>
   <ul class="s_gallery clearfix">
      <?php
         for($i=1;$i<=58;$i++){
            echo '<li><a href="img/news/sale30/full/'.$i.'.jpg" rel="group1" class="fancybox"><img src="img/news/sale30/thumbs/'.$i.'.jpg" alt=""></a></li>';
         }
      ?>
   </ul>
   <a class="more" href="/news.php">Другие новости</a>
</div>
</body>
</html>