<!-- ******************** 
	********************

County: The Republic of Belarus;
City: Minsk;
Author: Eugeni Bykovski;
Date: 20.10.2018;
File: PHP;

	********************
******************** -->

<?php

$recepient = "bykovskieugeni@mail.ru";
$sitename = "Новая Заявка";
$backurl="artem.html";

$date = date("d.m.y"); // число.месяц.год 
$time = date("H:i"); // часы:минуты:секунды 

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);

$message = "Name: $name \n Email: $email \n Phone: $phone \n Text: $text \n Date: $date \n Time: $time";

$pagetitle = "Пришла \"$sitename\" ";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\" \n From: $recepient");

print "<p></p><script><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script>"; 
exit; 
 
?>