<meta http-equiv='refresh' content='6; url=http://sashasdesign.ru'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['message'])) {$message = $_POST['message']; if ($message == '') {unset($message);}}
 
if (isset($name) && isset($email) && isset($message)){
 
$address = "zin-dra@yandex.ru";
$mes = "Имя: $name \nEmail: $email \nСообщение: $message";
$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo 
   "Сообщение отправлено <b>успешно</b>, через 6 секунд Вы будете направлены на главную страницу <a href='http://sashasdesign.ru/'>SASHASDESIGN.RU</a>,где сможете продолжить ваш просмотр";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля! <a href='http://sashasdesign.ru/'>SASHASDESIGN.RU</a>";
}
?>