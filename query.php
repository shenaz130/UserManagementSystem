<?php require_once('include/connection.php'); ?>

<?php 



	/*--------------display method--------------------------*/
	$query2= "SELECT FirstName, LastName, Password FROM user";

	$res= mysqli_query($conn,$query2);
			if ($res) {
				echo mysqli_num_rows($res);

				$tbl='<table>';
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
<!DOCTYPE html>
<html>
<head>
	<title>Queries</title>
</head>
<body>

</body>
</html>

<?php mysqli_close($conn); ?>