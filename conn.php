<?php
	$server ="localhost";
	$user="root";
	$password="s1200";
	$database="employeedb";


	$con= mysqli_connect($server,$user,$password,$database);

	if (mysqli_connect_errno()) {

		die('database failed'. mysqli_connect_errno());
	}else{
		echo "database working sucessful.";
	}

?>