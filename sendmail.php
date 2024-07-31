<?php

$to = "info@metal-ls.kz";
$name = $_POST['name'];
$phone = $_POST['phone'];

$subject = "Заказ обраного звонка от " . $name;
$body = "Имя: " . $name . "\n\n";
$body .= "Телефон: " . $phone . "\n\n";

$headers = "From: " . $name . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

$send = mail($to, $subject, $body, $headers);

if ($send == 'true') {echo "Сообщение отправлено";}

else {echo "Ой, что-то пошло не так";}

//header('Location: thankyou.html');
?>
