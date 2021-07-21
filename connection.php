<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass= "Aditya@123";
$dbname= "education_website";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("Failed to connect!");
	
}

