<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require './phpmailer/PHPMailer.php';
    
    $productName = $_POST['productName'];
    $name = $_POST['firstname'];
    $phone = $_POST['phone'];
    
    $title = "Пришла заявка для индивидуального просчёта мебели (vibemebel.by)";
     
    $mail = new PHPMailer();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'v.korpik2015@gmail.com';
    $mail->Password = 'Aingeepoy3';
    $mail->Subject = $title;
    $mail->setFrom('v.korpik2015@gmail.com', 'Vibemebel');
    $mail->msgHTML("
    <h2>Заявка индивидуального просчет мебели</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br>
    <b>Интересует следующий товар:</b> $productName
    ");
    $mail->addAddress('v.korpik2010@yandex.by');
    $mail->send();
?>