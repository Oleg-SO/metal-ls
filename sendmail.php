<?php
// Укажите адрес вашей электронной почты
$to = "info@metal-ls.kz";

// Получите данные из формы
$name = $_POST['name'];
// $email = $_POST['email'];
$phone = $_POST['phone'];
// $message = $_POST['message'];

// Установите тему письма
$subject = "Заказ обраного звонка от " . $name;

// Создайте тело сообщения
$body = "Имя: " . $name . "\n\n";
// $body .= "Email: " . $email . "\n\n";
$body .= "Телефон: " . $phone . "\n\n";
// $body .= "Сообщение:\n" . $message;

// Установите заголовки письма
$headers = "From: " . $name . "\r\n";
// $headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

// Отправьте письмо
$send = mail($to, $subject, $body, $headers);

// Если письмо ушло - выводим сообщение
if ($send == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}

// Перенаправьте пользователя на страницу "Спасибо за сообщение"
//header('Location: thankyou.html');
?>
