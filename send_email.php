<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Дополнительная валидация полей формы, если необходимо
    
    $to = "egorizz@mail.ru"; // Замените на ваш адрес электронной почты
    $subject = "Заказ оборудования"; // Замените на тему вашего письма
    
    $body = "Имя: " . $name . "\n";
    $body .= "Телефон: " . $telephone . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Сообщение: " . $message . "\n";
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Спасибо! Мы получили ваш запрос и свяжемся с вами в ближайшее время.";
    } else {
        echo "Произошла ошибка при отправке вашего запроса.";
    }
}
?>