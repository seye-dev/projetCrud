<?php

$server="localhost";
$username="root";
$password="";
$dbname="universite";
try 
{

	$con = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);	
}
 catch (Exception $e)
{
	$e->getMessage(); 	
}
?>