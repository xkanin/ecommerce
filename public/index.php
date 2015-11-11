<?php
include '../vendor/autoload.php';
include '../private/controllers/login.php';

$page	=	NULL;
$templatePath	=	'../private/templates/';

if ( isset($_POST['login']) )	{
	
}

$page	=	include $templatePath . "header.php";
$page  .=	include $templatePath . "navigation.php";
$page  .=	include $templatePath . "login.php";
$page  .=	include $templatePath . "footer.php";

echo $page;
?>