<?php require_once('include/connection.php'); ?>

<?php 
	$query2= "SELECT FirstName, LastName, Password FROM user";

	$res= mysqli_query($conn,$query2);
			if ($res) {
				echo mysqli_num_rows($res);
				//echo "Query added";

				/*$DisRec= mysqli_fetch_assoc($res);
				echo "<pre>";
				print_r($DisRec);
				echo "</pre>";

				$DisRec= mysqli_fetch_assoc($res);
				echo "<pre>";
				print_r($DisRec);
				echo "</pre>";*/

				$tbl='<table';
				$tbl='<tr><th>FName</th><th>Lname</th><th>Password</th></tr>';

				while ($rec=mysqli_fetch_assoc($res) ){
					$tbl .= '<tr>' ;
					$tbl .= '<td>'.$rec['FirstName'].'</td>';
					$tbl .= '<td>'.$rec['LastName'].'</td>';
					$tbl .= '<td>'.$rec['Password'].'</td>';
					$tbl .= '</tr>';
				}
					$tbl='</table>';

			}else{
				echo "failed";
			}


?>




<?php /* -------insert Query-------------
	$FirstName= 'Shadiya';
	$LastName= 'Buhari';
	$Password = '1400';
	$Email= 'shenaz@gmail.com';
	$IsDeleted= '0';

	$HashedPass= sha1($Password);

	$query1= "INSERT INTO user (FirstName,LastName,Password, Email,IsDeleted) VALUES ('{$FirstName}','{$LastName}','{$HashedPass}', '{$Email}','{$IsDeleted}')" ;

		$res= mysqli_query($conn,$query1);
			if ($res) {
				echo "record added";
			}else{
				echo "failed";
			}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index 1</title>
</head>
<body>

</body>
</html>

<?php mysqli_close($conn); ?>