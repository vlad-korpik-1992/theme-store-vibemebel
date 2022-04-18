<?php
use PHPMailer\PHPMailer\PHPMailer;
require './phpmailer/PHPMailer.php';

$name = $_POST['firstname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['letter'];

$title = "Пришла заявка для просчёта мебели (vibemebel.by)";
 
// Создаем письмо
$mail = new PHPMailer();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'v.korpik2015@gmail.com';
$mail->Password = 'Aingeepoy3';
$mail->Subject = $title;
$mail->setFrom('v.korpik2015@gmail.com', 'Vibemebel');
// html текст письма
$mail->msgHTML("
<h2>Заявка на просчет</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Почта:</b> $email<br><br>
<b>Сообщение:</b><br>$text
");
$mail->addAddress('v.korpik2010@yandex.by');
// Отправляем
$mail->send();
?>