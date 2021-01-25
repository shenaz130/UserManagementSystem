<?php


$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = 'admin';
$db     = 'employeedb';


$conn  = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if (mysqli_connect_errno()) {

		die('database failed'. mysqli_connect_errno());
	}



 ?>