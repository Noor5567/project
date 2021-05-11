<?php

$dsn='mysql:host=localhost;dbname=software';
$user='root';
$pass='';
$option=array(

	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try
{
	$con=new PDO($dsn,$user,$pass);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $e)
{
	echo " FAILED " .$e->getMessage(); 
}
?>
