<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

	$name = trim($_GET['name']);
	$phone = trim($_GET['phone']);
	$name = htmlentities($name);
	$phone = htmlentities($phone);

$to      = 'info@dw.express';
$subject = 'Заявка с сайта';
/*$subject = "?=utf-8?B?".base64_encode($subject)."?=";*/
$msg = $name . ' ' . $phone;
$headers = 'From: info@dw.express' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" ."Content-type:text/plain:charset=utf-8";
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $msg, $headers);
header('Location: index.php');




