<?php
include('dbconn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Main Page</title>
	<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
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
			<p>Breakfast options</p>
			<select id="food1" name="foodchoice1">
				<option name = "which" value="Select a option"> Select an option</option>
				<option name = "which" value="Toast"> Toast</option>
	 			<option name = "which" value="Bacon"> Bacon</option>
	 			<option name = "which" value="Hard boiled egg"> Dave's Single from Wendy's</option>
			</select>
			<p>Lunch options</p>
			<select id="food2" name="foodchoice2">
				<option name = "which" value="Select a option"> Select an option</option>
				<option name = "which" value="Big Mac"> Big Mac</option>
				<option name = "which" value="Whooper"> Whooper</option>
				<option name = "which" value="Dave's Single from Wendy's"> Dave's Single from Wendy's</option>
			</select>
			<p>Dinner options</p>
			<select id="food3" name="foodchoice3">
				<option name = "which" value="Select a option"> Select an option</option>
				<option name = "which" value="Big Mac"> Big Mac</option>
				<option name = "which" value="Whooper"> Whooper</option>
				<option name = "which" value="Dave's Single from Wendy's"> Dave's Single from Wendy's</option>
			</select>
			<p>Dessert options</p>
			<select id="food4" name="foodchoice4">
				<option name = "which" value="Select a option"> Select an option</option>
				<option name = "which" value="Cheesecake"> Big Mac</option>
				<option name = "which" value="Key-Lime Pie"> Whooper</option>
				<option name = "which" value="A Scoop of Vanilla Ice Cream"> Dave's Single from Wendy's</option>
			</select>
			<br><br>
			<input type="submit" name = "go" value="Submit">
	</form>
	</fieldset>
	</div>
		<div class="right">
		<?php
		if(isset($_GET["go"])){
			phpcalc($_GET["foodchoice1"], $_GET["foodchoice2"], $_GET["foodchoice3"], $_GET["foodchoice4"]);
		}
		?>
		</div>
</div>
<br><br>
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
		function phpcalc($a, $b, $c, $d){
			echo "
			<fieldset>
				<p id=\"result1\"></p>
				<p id=\"result2\"></p>
				<p id=\"result3\"></p>
			</fieldset>";
			echo "<script type=\"text/javascript\">
					calculate(\"".$a."\",\"".$b."\",\"".$c."\",\"".$d."\");
				  </script>";
		}

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
		if (isset($_GET["go"])){
			//INSERT INTO `fooduser` VALUES ("wudh@bc.edu", "Big Mac", now());
			$one = $_SESSION["user"];
			$two = $_GET["foodchoice"];
			$comm = "INSERT INTO fooduser VALUES (\"$one\",\"$two\", now());";
			perform_query($dbnow, $comm);
		}
		all($dbnow, $find);
		?>
	</tbody>
</table>

</body>
</html>