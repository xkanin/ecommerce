<?php
//autoload class files
include '../vendor/autoload.php';

$page	=	NULL;
$templatePath	=	'../restricted/templates/';

$dbUser	=	'root';
$dbPassword	=	'';
//Data Source Name
$dsn	=	'mysql:dbname=ecommerce;host=localhost';

//establish database connection
try	{
	$dbConn	=	new PDO( $dsn, $dbUser, $dbPassword );
	$dbConn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch( PDOException $exception )	{
	trigger_error( $exception->getMessage() );
}

//select Controller file name
if ( isset( $_GET['page'] ) )	{
	$fileName	=	$_GET['page'];
}else	{
	$fileName	=	'login';
}

//load specified Controller
include "../restricted/controllers/{$fileName}.php";

//load html templates
$page	=	include $templatePath . "header.php";
$page  .=	include $templatePath . "navigation.php";
$page  .=	include $templatePath . "{$fileName}.php";
$page  .=	include $templatePath . "footer.php";

echo $page;
?>