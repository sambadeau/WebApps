<?php
include('dbconn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style10.css"/>
	<script type="text/javascript"src="../include/valid.js"></script>
	<meta charset="utf-8" />
	<title>Welcome To Calorie Calculator</title>
</head>
<body>
	<pre><?php //print_r($_POST); ?></pre>
<fieldset>
	<h1>Diet Is Fun!</h1>
	<img src="diet.jpg" alt="food pic" height="360" width="600">

	<form action='dboperation.php'>
		<input type="submit" name = "join" value= "Don't Have an Account? Sign Up!">
	</form>

	<fieldset>
		<legend> Please Login to Access Your Calorie Log! </legend>

	<form method= 'post' name = 'myForm' onsubmit = 'return validateForm2()'>
			E-mail:
			<input type = 'text' name= 'email' size= '40'> <br>
			PassWord:
			<input type = 'text' name= 'pw' size= '40'> <br>

			<input type='submit' value = 'Login' name = 'submit'> <br>
	</form>

	<form method = 'post'>
			<input type="submit" name = "pwlost" value= "Forgot Your Password?">
	</form>

	<?php

			if ( isset( $_POST['pwlost'] ) )
				display_form();
	?>

	</fieldset>

	<?php

		if ( isset( $_POST['submit'] ) )
			handle_form( $_POST['email'], $_POST['pw'] );
	?>

	<?php

		if ( isset( $_POST['pwsubmit'] ) )
			handle_form1( $_POST['email1']);
	?>

</fieldset>

</body>
</html>

<?php
function display_form () {
	echo "<form method= 'post' name = 'myForm' onsubmit = 'return validateForm2()'>
		Please Give Us Your E-mail: <br>
		<input type = 'text' name= 'email1' size= '40'> <br>
		<input type='submit' value = 'SUBMIT!' name = 'pwsubmit'> <br>
	</form>";
}
?>

<?php
function handle_form( $id, $pw){

	$dbc    = connect_to_db( "hwangmn" );
	$query  = "select * from accounts";
	$result = perform_query( $dbc, $query );
	//print_r($row);

	$useremail = $_POST['email'];
	$userpw = $_POST['pw'];

	while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){

		$email = $row['email'];
		$pw = $row['password'];

		if ($useremail == $email) {
			if(sha1($userpw) == $pw) {
				session_unset();
				$_SESSION["user"] = $email;
				echo '<script type="text/javascript">
				document.location="http://cscilab.bc.edu/~wudh/project/main.php";
				</script>';
			}
			else {
				echo "Wrong Password!";
			}
			return;
		}
	}

	echo "Username Not Found!";

	disconnect_from_db( $dbc, $result);
	return;
}

function handle_form1( $id ){

	$dbc    = connect_to_db( "hwangmn" );
	$query  = "select * from accounts";
	$result = perform_query( $dbc, $query );
	//print_r($row);

	$useremail = $_POST['email1'];

	while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){

		$email = $row['email'];

		if ($useremail == $email) {
			echo "Hi! Thanks for the enquery! Your Password will be sent to you shortly to your e-mail!";

			$newpw = newpass();
			$query1 = "UPDATE `accounts` SET `password` = sha1('$newpw') WHERE `email` = '$useremail' ";
			perform_query($dbc, $query1);

			mail("$useremail", "Your New Calorie Log Account Password!", $newpw);

			disconnect_from_db( $dbc, $result );
			return;
		}
	}

	echo "Hi! We could not find your e-mail... Are you Sure You've Signed up Already?";

	disconnect_from_db( $dbc, $result);
	return;
}

function newpass() {
	$pw = "";
	$pwchar = "asdfghjkl1234567890";
	for ($i = 0; $i < 7; $i ++) {
		$pw .= $pwchar[rand(0, strlen($pwchar)-1)];
	}
	return $pw;
}
?>
