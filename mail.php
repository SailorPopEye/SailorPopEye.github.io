<?php

$recepient = "Sailor1PopEye@gmail.com";
$sitename = "Timofeev Vladimir";

$name = trim($_GET["name"]);
$text = trim($_GET["text"]);
$email = trim($_GET["email"]);
$phone = trim($_GET["phone"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТекст: $text \nПочта: $email \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");