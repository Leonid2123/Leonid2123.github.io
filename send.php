<?php

$name = $_GET['name']; // Вытаскиваем имя в переменную
$email = $_GET['e-mail']; // Вытаскиваем почту в переменную
$message = $_GET['message']; // Формируем сообщение, отправляемое на почту
$to = 'leokarelsky@gmail.com'; // Задаем получателя письма
$from = $email; // От кого пришло письмо
$subject = "Letter to me"; // Задаем тему письма
$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
mail($to, $subject, $message, $headers)
?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<!--<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="index.html");}
window.setTimeout("changeurl();",3000);
</script>-->
