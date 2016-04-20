<?php
include('dbconn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script src="calc.js"></script>
<body>

<h1 style="text-align: center">Log in successful! Hello <?php echo $_SESSION["user"]; ?>!</h1>

<div class="containall">
	<div class="left">
	<fieldset>
	<legend><strong>Select your answer below!</strong></legend>
	<form name="myform" method="GET">
			<select id="food" name="foodchoice" onclick="return false;">
				<option name = "which" value="Big Mac"> Big Mac</option>
	 			<option name = "which" value="Whooper"> Whooper</option>
	 			<option name = "which" value="Dave's Single from Wendy's"> Dave's Single from Wendy's</option>
			</select>
			<input type="submit" name = "go" value="Submit" onclick="calculate();">
			<input type="reset" value="Reset">
	</form>
	</fieldset>
	</div>
	<div class="right">

	<fieldset>
	<p id="result1"></p>
	<p id="result2"></p>
	<p id="result3"></p>
	</fieldset>
	</div>
</div>

<table style="width:100%">
	<tbody>
		<tr>
			<th>Email</th>
			<th>Food</th>
			<th>InputTime</th>
		</tr>
		<?php
		$find = "SELECT * FROM fooduser";
		$dbnow = connect_to_db( "hwangmn" );
		function all($dbnow, $find) {
			$counter = 1;
			if ($r = perform_query($dbnow, $find)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    		if ($_SESSION["user"] == $row["Email"]) {
							$e = $row["Email"];
							$f = $row["Food"];
							$t = $row["InputTime"];
			       			if ($counter%2 == 1) {
			       				echo "<tr>
			       						<td>".$e."</td>
			       						<td>".$f."</td>
			       						<td>".$t."</td>
			       					 </tr>";
			       				$counter = $counter + 1;
			       			}
			       			else {
			       				echo "<tr>
										<td>".$e."</td>
										<td>".$f."</td>
										<td>".$t."</td>
			       					 </tr>";
			       				$counter = $counter + 1;
			       			}
			       		}
				}
			}
		}
		all($dbnow, $find);
		if (isset($_GET["go"])){
			//INSERT INTO `fooduser` VALUES ("wudh@bc.edu", "Big Mac", now());
			$one = $_SESSION["user"];
			$two = $_GET["foodchoice"];
			$comm = "INSERT INTO fooduser VALUES (\"$one\",\"$two\", now());";
			perform_query($dbnow, $comm);
			echo "<script> window.location.assign(\"http://cscilab.bc.edu/~wudh/project/main.php\"); </script>";

		}
		?>
	</tbody>
</table>

</body>
</html>