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
	<form name="myform" method="GET" onsubmit="return false;">
			<select id="food" name="foodchoice">
				<option name = "which" value="563"> Big Mac</option>
	 			<option name = "which" value="677"> Whooper</option>
	 			<option name = "which" value="550"> Dave's Single from Wendy's</option>
			</select>
			<input type="submit" value="Submit" onclick="calculate();">
			<input type="reset" value="Reset">
	</form>
	</fieldset>
	</div>
	<div class="right">

	<fieldset>
	<p id="result1"></p>
	<p id="result2"></p>
	<p id="result3"></p>
	<p> <?php echo $_SESSION["user"]; ?> </p>
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
		?>
	</tbody>
</table>

</body>
</html>