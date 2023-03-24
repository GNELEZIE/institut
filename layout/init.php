<?php
ini_set("session.cookie_httponly", True);
session_start();


//Include Connexion

$class = 'class';
$mail = 'mail';
$controller = 'controller';
$function = 'function';
$layout = 'layout';
$pages = 'pages';

include_once $function."/detectdevice/Mobile_Detect.php";
include_once $function."/detectdevice/detect.php";
// include function

include_once $function."/domaine.php";
include_once $function."/mailing.php";
include_once $function."/function.php";

