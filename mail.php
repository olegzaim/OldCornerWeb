<?php

$recepient = "olegzaimm@gmail.com";
$sitename = "Название сайта";

$name = trim($_GET["name"]);
$phone = trim($_GET["surname"]);
$phone = trim($_GET["adres"]);
$phone = trim($_GET["phone"]);


$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone ";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");