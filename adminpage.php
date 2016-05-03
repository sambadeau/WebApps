<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap.css">
	<script type="text/javascript"src="include/valid.js"></script>
	<meta charset="utf-8" />
	<title>Admin Page</title>

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</head>
<body>
	<div class="jumbotron">
	<h1> Admin Page <small> for Calorie Calulator</small> </h1>
	</div>

	<col><col><col><col>

	<div class="container">

	<?php

		table();
	?>

	</div>

	<div class= "panel panel-default">
	  			<!-- Default panel contents -->
	  			<div class= "panel-heading">Delete A Pesky Member</div>
	  			<div class= "panel-body ">

  	</div>

	<form method = 'post' name = 'myForm' onsubmit = 'return validateForm1()'>
	<fieldset class="form-group">
	<label>Username of the Doomed</label>
	<input type="text" name= 'subject' class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
	</fieldset>

	<fieldset class="form-group">
	    <label>Your Last Words to the Poor Soul</label>
	    <textarea class="form-control" name= 'msg' id="exampleTextarea" rows="3"></textarea>
  	</fieldset>

  	<fieldset class="form-group">
	    <label> French Dictator Password</label>
	    <input type="password" name= 'pw' class="form-control" id="exampleInputPassword1" placeholder="It's Napoleon">
  	</fieldset>

	<input type='submit' value = 'Deprive This Person of Healthy Lifestyle' name = 'submit'> <br>

	<?php

		if ( isset( $_POST['submit'] ) )
			handle_form($_POST['pw']);
	?>

	</form>

</body>
</html>

<?php

function handle_form($pw){
	if (sha1($pw) != '1785ed6ccf537856a2e5d0935a1ffb2dde2d3ab5') {
		echo "Invalid Napoleon Password... Can You Spell?";
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

	echo "<div class=\"panel panel-default\">
  			<!-- Default panel contents -->
  			<div class=\"panel-heading\">Current User Lists</div>
  			<div class=\"panel-body\">

  		</div><table class=\"table table-striped table-hover\">";

	echo "<tr><th> Username </th><th> E-mail </th><th> Registration Date </th></tr>";

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<tr><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td><td>" . $row['regidate'] . "</td></tr>";
	}

	echo "</table>";
}
?>
