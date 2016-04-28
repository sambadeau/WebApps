<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../club/css/style10.css"/>
	<script type="text/javascript"src="valid.js"></script>
	<meta charset="utf-8" />
	<title>Sign Up</title>
</head>

<body>

<?php

	if ( isset( $_POST['submit'] ) )
		handle_form( $_POST['email'] );
?>
<fieldset>
	<legend> Sign Up To Create Your Own Calorie Log! </legend>

	<form method= 'post' name = "myForm" onsubmit = "return validateForm()">
		Username:
		<input type = 'text' name= 'name' size= '40'> <br>
		E-mail:
		<input type = 'text' name= 'email' size= '40'> <br>
		Password:
		<input type = 'password' name= 'pw1' size= '40'> <br>
		Re-Type Password:
		<input type = 'password' name= 'pw2' size= '40'> <br>

		<input type='submit' value = "SUBMIT!" name = 'submit'> <br>
	</form>
</fieldset>
</body>
</html>

<?php
function handle_form( $id ){

	$dbc    = connect_to_db( "hwangmn" );
	$query  = "select * from accounts";
	$result = perform_query( $dbc, $query );

	$username = $_POST['name'];
	$useremail = $_POST['email'];
	$userpw1 = $_POST['pw1'];
	$userpw2 = $_POST['pw2'];

	if ($userpw1 != $userpw2) {
		echo "Your Passwords Did Not Match. Please Try Again!";
		return;
	}

	else {
		while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){

			$name  = $row['username'];
			$email = $row['email'];
			$pw    = $row['password'];

				if ($useremail == $email) {
					echo "Sorry! This E-mail Address has already been used!
					<form action='http://cscilab.bc.edu/~hwangmn/hw10/club/index.php'>
					<input type='submit' value='Go Back'>
					</form>";

					disconnect_from_db( $dbc, $result );
					return;
				}
		}
	}

	$newquery = "INSERT INTO `food`(`username`, `email`, `password`, `regidate`) VALUES ('$username', '$useremail', sha('$userpw1'), now())";
	perform_query( $dbc, $newquery );
	echo "Thank You For Joining the Club!
		<form action='http://cscilab.bc.edu/~hwangmn/final/login.php'>
		<input type='submit' value='Go Back'>
		</form><br/>";

	disconnect_from_db( $dbc, $result);
}
?>
