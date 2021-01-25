<?php


$dbhost = 'localhost:3325';
$dbuser = 'root';
$dbpass = '';
$db     = 'userdb';


$conn  = mysqli_connect($dbhost,$dbuser,'',$db);

/*if(! $conn){
  die('Could not connect connect: ') ;
}

echo 'Successfully Connected';

*/


if (mysqli_connect_errno()) {

		die('database failed'. mysqli_connect_errno());
	}

	/*else{
		echo " And also database working Successfully.";
	}*/




 ?>