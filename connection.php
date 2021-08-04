<?php

$dbhost = "remotemysql.com";
$dbuser = "TeWx4WKgUX";
$dbpass= "iAGbnsuCcF";
$dbname= "TeWx4WKgUX";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("Failed to connect!");
	
}

