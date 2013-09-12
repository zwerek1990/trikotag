<link rel="stylesheet" href="style/form.css"/>
<?php
if (!empty($_POST)) {
   $error = false;
   
   if (empty($_POST['contact_name'])){
      $error = true;
      echo "<h3>Вы не указали своё имя.</h3><p>Представьтесь, пожалуйста, и укажите свои контактные данные.</p>";
   }
   if (empty($_POST['contact_phone'])){
     $error = true;
     echo "<h3>Вы не указали свой контактный телефон.</h3><p>Мы не сможем с вами связаться.</p>";
   }
   if (empty($_POST['contact_email'])){
     $error = true;
     echo "<h3>Вы не указали свою электронную почту.</h3><p>Для ускорения обработки заказа просим вас указывать полные контактные данные.</p>";
   }
   
   
   if (!$error){
      $to = 'zwerek1990@gmail.com';
      //$to = 'zwerek1990@gmail.com';
      $subject = 'Заказ продукции с сайта';
      $message = "";
      $message.="Клиент " . ($_POST['contact_name']?$_POST['contact_name']:'')."\n";

      $message.=( $_POST['contact_phone']?("телефон:" . $_POST['contact_phone']." "):'');
      $message.=( $_POST['contact_email']?("email:" . $_POST['contact_email']." "):'');
      $message.="\n";
      $message.="с сайта заказывает продукцию:\n";
      $message.=($_POST['info']?($_POST['info']."\n"):'');
      $message.= ($_POST['text']?("Комментарий:\n".$_POST['text']."\n"):'');

      $headers  = "From: \"Чебоксарский трикотаж\" <trikota21.ru>\n";
      $headers .= "Content-type: text/plain; charset=\"utf-8\"";
      if(mail($to, $subject, $message, $headers)){
       echo "<h3>Ваша заявка принята.</h3><p>Наши менеджеры занимаются её обработкой.</p>";
      }else{
       echo "<h3>Давайте попробуем вручную</h3><p>Похоже произошла какая-то ошибка, попробуйте позвонить по телефону +7 (8352) 63-12-80 и сделать заказ, поговорив с менеджерами отдела продаж</p>";
      }
    }    
} else {
   if (!empty($_GET["name"])) {
      echo "<h1>" . ($_GET["name"] ? $_GET["name"] : "") . "</h1>";
      echo '
<form class="mail" action="" method="POST">
<p>Ваше имя</p>
<p><input type="text" name="contact_name" required placeholder="Ваше имя"/></p>
<p>Ваш телефон</p>
<p><input type="tel" name="contact_phone" required placeholder="Ваш телефон"/></p>
<p>Ваша электронная почта</p>
<p><input type="email" name="contact_email" required placeholder="Ваша электронная почта"/></p>
<p>Размеры заказа / Примечание</p>
<p><textarea name="text"  placeholder="Размеры заказа / Примечание"></textarea></p>
<p><textarea class="info" name="info" readonly>';
      echo "Здравствуйте, я хочу заказать у вас " . $_GET["name"] . "\n";
      echo "( цена: " . ($_GET['price'] ? $_GET['price'] : '') . " р. )";
      echo '</textarea></p>
<p><input type="submit" value="Заказать"/></p>
</form>';
   } else {
      echo '
<h1>Заказать продукцию</h1>
<form class="mail" action="" method="P">
   <p>Ваше имя</p>
   <p><input type="text" name="contact_name" required placeholder="Ваше имя"/></p>
   <p>Ваш телефон</p>
   <p><input type="tel" name="contact_phone" required placeholder="Ваш телефон"/></p>
   <p>Ваша электронная почта</p>
   <p><input type="email" name="contact_email" required placeholder="Ваша электронная почта"/></p>
   <p>Размеры заказа / Примечание</p>
   <p><textarea name="text"  placeholder="Размеры заказа / Примечание"></textarea></p>
   <p><input type="submit" value="Заказать"/></p>
</form>';
   }
}
?>