<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="bootstrap.css">
	<script type="text/javascript"src="valid.js"></script>
	<meta charset="utf-8" />
	<title>Sign Up!</title>
</head>

<body>

<div class = "container">
<fieldset>
	<div class = "jumbotron">
	<h1> Sign Up To Create Your Own Calorie Log! </h1>
	</div>

	<form method= 'post' name = "myForm" onsubmit = "return validateForm()">

		<fieldset class="form-group">
			<label> Username</label>
			<input type="text" name= 'name' class="form-control" name= 'email' placeholder="Enter Username">
		</fieldset>

		<fieldset class="form-group">
			<label> E-mail</label>
			<input type="email" name= 'email' class="form-control" name= 'email' placeholder="Enter Username">
		</fieldset>

		<fieldset class="form-group">
			<label>Password</label>
		    <input type="password" name= 'pw1' class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
	  	</fieldset>

	  	<fieldset class="form-group">
			<label>Re-Type Password</label>
			<input type="password" name= 'pw2' class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
	  	</fieldset>

		<input type='submit' class="btn btn-danger btn-md col-xs-5 col-md-3 col-lg-1" value = "SUBMIT!" name = 'submit'> <br>
	</form>
</fieldset>
	<?php

				if ( isset( $_POST['submit'] ) )
					handle_form( $_POST['email'] );
	?>
</div>
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

	$newquery = "INSERT INTO `accounts`(`username`, `email`, `password`, `regidate`) VALUES ('$username', '$useremail', sha('$userpw1'), now())";
	perform_query( $dbc, $newquery );
	echo "Thank You For Joining the Club!
		<form action='http://cscilab.bc.edu/~hwangmn/final/login.php'>
		<input type='submit' value='Go Back' class='btn btn-warning btn-md col-xs-5 col-md-3 col-lg-1'>
		</form><br/>";

	disconnect_from_db( $dbc, $result);
}
?>
