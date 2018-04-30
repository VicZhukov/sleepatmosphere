<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Тут указываем на какой ящик посылать письмо
$to = "info@sleep-atmosphere.com.ua";
//Далее идет тема и само сообщение
$subject = "Заявка от нашего сайта";
$message = "
Письмо отправлено из моей формы. <br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.com.ua <site-email@mysite.com>\r\nContent-type: text/html;
	charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>