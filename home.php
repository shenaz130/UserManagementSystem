<?php require_once('include/connection.php'); ?>
<?php
	//check the the submit button were clicked or not
	if (isset($_POST['submit'])) {

		$error= array();

	//check the username and password entered or not
		if (isset($_POST['email'])|| strlen(trim($_POST['email']))< 1) {
			$error[] ='username is missing/invalid.';
		}
			if (isset($_POST['password'])|| strlen(trim($_POST['password']))< 1) {
			$error[] ='password is missing/invalid.';
	}


	//check if there any errors in the form
	if (empty($error)) {
		//save  username and password in to variables
		$email= mysqli_real_escape_string($conn,$_POST['email']);
		$pass= mysqli_real_escape_string($conn,$_POST['password']);
		$HashPass= sha1($pass);


	//database query
		$query= "SELECT FROM user
			WHERE Email = '{$email}'
			AND Password = '{$HashPass}'
			LIMIT 1 ";

		$res = mysqli_query($conn,$query);

		if ($res) {
			//query sucessful

			if (mysqli_num_rows($res) == 1) {
				//check the user valid or not

				//redirect to user page
				header('Location : user.php');

			}else {
				$error[]= 'Invalid username and password.';

			}
		}else{
			$error[]= 'DB query failed.';

		}
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="login">
		<form action="home.php" method="post">
			<fieldset>
				<legend><h1>LOG IN</h1></legend>

				<?php
					if (isset($error) && !empty($error)) {
						echo '<p class="error"> Invalid Username or password </p>';
					}
				 ?>
		
				<p>
					<label for="">Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address">
					<label for ="Password">Password</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>
					<button type="submit" name="submit">SUBMIT</button>
			</fieldset>
			
		</form>
		
	</div>
</body>
</html>

<?php mysqli_close($conn); ?>