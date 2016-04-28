<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript"src="include/valid.js"></script>
	<meta charset="utf-8" />
	<title>Admin Page</title>
</head>
<body>
	<h1> Admin Page For Calorie Calculator </h1>

	<col><col><col><col>

	<?php

		table();
	?>


<fieldset>

	<legend> Delete A Pesky Member </legend>

	<form method = 'post' name = 'myForm' onsubmit = 'return validateForm1()'>

	Username of the Doomed <input type = 'text' name= 'subject' size= '40'> <br>
	Your Last Words to the Poor Soul <input type = 'text' name= 'msg' size = '100' height="100" width="200"> <br>

	French Dictator Password <input type = 'password' name= 'pw' size= '20'> <br>

	<input type='submit' value = 'Deprive This Person From Healthy LifeStyle' name = 'submit'> <br>

	<?php

		if ( isset( $_POST['submit'] ) )
			handle_form($_POST['pw']);
	?>

	</form>

</fieldset>

</body>
</html>

<?php

function handle_form($pw){
	if (sha1($pw) != '1785ed6ccf537856a2e5d0935a1ffb2dde2d3ab5') {
		echo "Invalid Password";
		return;
	}

	$dbc    = connect_to_db( "hwangmn" );
	$query  = "select * from accounts";
	$result = perform_query( $dbc, $query );
	$subsub	 = $_POST['subject'];
	$msgmsg = $_POST['msg'];

	while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){

		$username = $row['username'];
		$useremail = $row['email'];

		if ($subsub == $username) {

			mail("$useremail", "You Have Been Eliminated From Calorie Log and This is Why...", $msgmsg);

			$newquery = "DELETE FROM `accounts` WHERE `username` = '$username'";
	    	perform_query( $dbc, $newquery );

		}
	}


	disconnect_from_db( $dbc, $result);
	return;
}

function table() {
	$dbc    = connect_to_db( "hwangmn" );
	$query  = "select * from accounts";
	$result = perform_query( $dbc, $query );

	echo "<table>";

	echo "<tr><td> username </td><td> password </td><td> email </td><td> regidate </td></tr>";

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<tr><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td><td>" . $row['email'] . "</td><td>" . $row['regidate'] . "</td></tr>";
	}

	echo "</table>";
}
?>
