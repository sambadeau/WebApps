<?php
include('dbconn.php');
session_start();

function displayForm() {
	$dbnow = connect_to_db( "hwangmn" );
	$find = "SELECT * FROM fooduser";
	$find1 = "SELECT * FROM food WHERE Type = \"Breakfast\"";
	$find2 = "SELECT * FROM food WHERE Type = \"Lunch\"";
	$find3 = "SELECT * FROM food WHERE Type = \"Dinner\"";
	$find4 = "SELECT * FROM food WHERE Type = \"Dessert\"";
	$find5 = "SELECT * FROM food WHERE Type = \"Drink\"";
	$find6 = "SELECT * FROM food WHERE Type = \"Grab and Go\"";
	$find7 = "SELECT * FROM food WHERE Type = \"Bakery\"";
	echo "<p>Breakfast options</p>";
	echo '<select name="foodchoice1">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find1)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Lunch options</p>";
	echo '<select name="foodchoice2">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find2)) {
			while ($row = mysqli_fetch_assoc($r)) {
				if ($row["Food"] != "Select an option"){
					$name = $row["Food"];
					$c = $row["Calories"];
					echo "<option value=\"".$name."\">".$name."</option>";
				}
			}
	}
	echo "</select>";
	echo "<p>Dinner options</p>";
	echo '<select name="foodchoice3">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find3)) {
			while ($row = mysqli_fetch_assoc($r)) {
				if ($row["Food"] != "Select an option"){
					$name = $row["Food"];
					$c = $row["Calories"];
					echo "<option value=\"".$name."\">".$name."</option>";
				}
			}
	}
	echo "</select>";
	echo "<p>Dessert options</p>";
	echo '<select name="foodchoice4">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find4)) {
			while ($row = mysqli_fetch_assoc($r)) {
				if ($row["Food"] != "Select an option"){
					$name = $row["Food"];
					$c = $row["Calories"];
					echo "<option value=\"".$name."\">".$name."</option>";
				}
			}
	}
	echo "</select>";
	echo "<p>Drink options</p>";
	echo '<select name="foodchoice5">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find5)) {
			while ($row = mysqli_fetch_assoc($r)) {
				if ($row["Food"] != "Select an option"){
					$name = $row["Food"];
					$c = $row["Calories"];
					echo "<option value=\"".$name."\">".$name."</option>";
				}
			}
	}
	echo "</select>";
	echo "<p>Grab and Go options</p>";
	echo '<select name="foodchoice6">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find6)) {
			while ($row = mysqli_fetch_assoc($r)) {
				if ($row["Food"] != "Select an option"){
					$name = $row["Food"];
					$c = $row["Calories"];
					echo "<option value=\"".$name."\">".$name."</option>";
				}
			}
	}
	echo "</select>";
	echo "<p>Bakery options</p>";
	echo '<select name="foodchoice7">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $find7)) {
			while ($row = mysqli_fetch_assoc($r)) {
				if ($row["Food"] != "Select an option"){
					$name = $row["Food"];
					$c = $row["Calories"];
					echo "<option value=\"".$name."\">".$name."</option>";
				}
			}
	}
	echo "</select>";
	echo "<p>Search options</p>";
	echo "Search by name <input type=\"text\" name=\"search\"/>";
	echo "<p>Exercise options</p>";
	echo '<select name="Exercise">
			<option value="Select an exercise">Select an exercise</option>
					<option value="Run">Run</option>
					<option value="Cycle">Cycle</option>
					<option value="Swim">Swim</option>
					<option value="Tennis">Tennis</option>
					<option value="Walk">Walk</option>
			  </select>';
	echo "<br><br>";
	echo'<input type="submit" name="go">';
}

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
<form name="myform" method="GET">
	<div class="left">
	<fieldset>
	<legend><strong>Select your answer below!</strong></legend>
			<?php
				displayForm();
			?>
	</fieldset>
	</div>
		<div class="right">
		<?php
		$dbnow = connect_to_db( "hwangmn" );
		$find = "SELECT * FROM fooduser";
		$history = "SELECT * FROM food";
		if(isset($_GET["go"])){
			phpcalc($_GET["foodchoice1"], $_GET["foodchoice2"], $_GET["foodchoice3"], $_GET["foodchoice4"], $_GET["foodchoice5"], $_GET["foodchoice6"], $_GET["foodchoice7"], $_GET["search"], $dbnow, $history, $_GET["Exercise"]);
		}
		?>
		<form method="GET">
			<button input="submit" name="delhistory">Delete History</button>
		</form>
		<?php
			if (isset($_GET["delhistory"])) {
				$dbnow = connect_to_db( "hwangmn" );
				$delcomm = "DELETE FROM fooduser WHERE Email = \"".$_SESSION["user"]."\";";
				perform_query($dbnow, $delcomm);
			}
		?>
		</div>
</form>
</div>

<br><br><br>
<table style="width:100%">
	<tbody>
		<tr>
			<th>Email</th>
			<th>Food</th>
			<th>InputTime</th>
			<th>Type</th>
			<th>Calories</th>
		</tr>
		<?php
		$always = "SELECT * FROM fooduser ORDER BY InputTime ASC";
		$dbnow = connect_to_db( "hwangmn" );
		function isvalidfoodcal($thisone) {
			$command = "SELECT * FROM food";
			$dbnow = connect_to_db( "hwangmn" );
			$result = -10;
			if ($r = perform_query($dbnow, $command)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Calories"];
			    	}
			    }
			}
			if ($result != -10) {
				return $result;
			}
			else {
				return -10;
			}
		}
		function isvalidfoodname($thisone) {
			$command = "SELECT * FROM food";
			$dbnow = connect_to_db( "hwangmn" );
			$result = "";
			if ($r = perform_query($dbnow, $command)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Food"];
			    	}
			    }
			}
			if ($result != "") {
				return $result;
			}
			else {
				return "Select an option";
			}
		}
		function phpcalc($a, $b, $c, $d, $e, $f, $g, $h, $dbnow, $history, $exer){
			echo "
			<fieldset>
				<p id=\"result\"></p>
			</fieldset>";
			$h = isvalidfoodcal($h);
			if ($r = perform_query($dbnow, $history)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($a == $row["Food"]) {
			    		$a = $row["Calories"];
			    	}
			    	if ($b == $row["Food"]) {
						$b = $row["Calories"];
			    	}
			    	if  ($c == $row["Food"]) {
						$c = $row["Calories"];
			    	}
			    	if  ($d == $row["Food"]) {
						$d = $row["Calories"];
			    	}
			    	if  ($e == $row["Food"]) {
						$e = $row["Calories"];
			    	}
			    	if  ($f == $row["Food"]) {
						$f = $row["Calories"];
			    	}
			    	if  ($g == $row["Food"]) {
						$g = $row["Calories"];
			    	}
			    }
			}

		echo "<script type=\"text/javascript\">
					calculate(".$a.",".$b.",".$c.",".$d.",".$e.",".$f.", ".$g.",".$h.",\"".$exer."\");
				  </script>";
		}

		function all($dbnow, $always) {
			$counter = 1;
			if ($r = perform_query($dbnow, $always)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    		if ($_SESSION["user"] == $row["Email"]) {
							$e = $row["Email"];
							$f = $row["Food"];
							$t = $row["InputTime"];
							$ty = $row["Type"];
							$c = $row["Calories"];
			       			if ($counter%2 == 1) {
			       				echo "<tr>
			       						<td>".$e."</td>
			       						<td>".$f."</td>
			       						<td>".$t."</td>
			       						<td>".$ty."</td>
			       						<td>".$c."</td>
			       					 </tr>";
			       				$counter = $counter + 1;
			       			}
			       			else {
			       				echo "<tr>
										<td>".$e."</td>
										<td>".$f."</td>
										<td>".$t."</td>
										<td>".$ty."</td>
										<td>".$c."</td>
			       					 </tr>";
			       				$counter = $counter + 1;
			       			}
			       		}
				}
			}
		}

		if (isset($_GET["go"])){
			$getgoing = "SELECT * FROM food";
			//INSERT INTO `fooduser` VALUES ("wudh@bc.edu", "Big Mac", now());
			$one = $_SESSION["user"];
			$two = $_GET["foodchoice1"];
			$three = $_GET["foodchoice2"];
			$four = $_GET["foodchoice3"];
			$five = $_GET["foodchoice4"];
			$six = $_GET["foodchoice5"];
			$seven = $_GET["foodchoice6"];
			$eight = $_GET["foodchoice7"];
			$nine = isvalidfoodname($_GET["search"]);
			if (isset($_GET["foodchoice1"])) {
				if ($_GET["foodchoice1"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $two){
									$t1 = $row["Type"];
									$c1 = $row["Calories"];
								}
							}
					}
					$comm1 = "INSERT INTO fooduser VALUES (\"$one\",\"$two\", now(), \"$t1\", \"$c1\");";
					perform_query($dbnow, $comm1);
				}
			}
			if (isset($_GET["foodchoice2"])) {
				if ($_GET["foodchoice2"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $three){
									$t2 = $row["Type"];
									$c2 = $row["Calories"];
								}
							}
					}
					$comm2 = "INSERT INTO fooduser VALUES (\"$one\",\"$three\", now(), \"$t2\", \"$c2\");";
					perform_query($dbnow, $comm2);
				}
			}
			if (isset($_GET["foodchoice3"])) {
				if ($_GET["foodchoice3"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $four){
									$t3 = $row["Type"];
									$c3 = $row["Calories"];
								}
							}
					}
					$comm3 = "INSERT INTO fooduser VALUES (\"$one\",\"$four\", now(), \"$t3\", \"$c3\");";
					perform_query($dbnow, $comm3);
				}
			}
			if (isset($_GET["foodchoice4"])) {
				if ($_GET["foodchoice4"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $five){
									$t4 = $row["Type"];
									$c4 = $row["Calories"];
								}
							}
					}
					$comm4 = "INSERT INTO fooduser VALUES (\"$one\",\"$five\", now(), \"$t4\", \"$c4\");";
					perform_query($dbnow, $comm4);
				}
			}
			if (isset($_GET["foodchoice5"])) {
				if ($_GET["foodchoice5"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $six){
									$t5 = $row["Type"];
									$c5 = $row["Calories"];
								}
							}
					}
					$comm5 = "INSERT INTO fooduser VALUES (\"$one\",\"$six\", now(), \"$t5\", \"$c5\");";
					perform_query($dbnow, $comm5);
				}
			}
			if (isset($_GET["foodchoice6"])) {
				if ($_GET["foodchoice6"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $seven){
									$t6 = $row["Type"];
									$c6 = $row["Calories"];
								}
							}
					}
					$comm6 = "INSERT INTO fooduser VALUES (\"$one\",\"$seven\", now(), \"$t6\", \"$c6\");";
					perform_query($dbnow, $comm6);
				}
			}
			if (isset($_GET["foodchoice7"])) {
				if ($_GET["foodchoice7"] != "Select an option"){
					if ($r = perform_query($dbnow, $getgoing)) {
							while ($row = mysqli_fetch_assoc($r)) {
								if ($row["Food"] == $eight){
									$t7 = $row["Type"];
									$c7 = $row["Calories"];
								}
							}
					}
					$comm7 = "INSERT INTO fooduser VALUES (\"$one\",\"$eight\", now(), \"$t7\", \"$c7\");";
					perform_query($dbnow, $comm7);
				}
			}
			if ($nine != "Select an option"){
				if ($r = perform_query($dbnow, $getgoing)) {
						while ($row = mysqli_fetch_assoc($r)) {
							if ($row["Food"] == $nine){
								$t8 = $row["Type"];
								$c8 = $row["Calories"];
							}
						}
				}
				$comm8 = "INSERT INTO fooduser VALUES (\"$one\",\"$nine\", now(), \"$t8\", \"$c8\");";
				perform_query($dbnow, $comm8);
			}
		}
		all($dbnow, $always);
		?>
	</tbody>
</table>
<br><br>
<form method="GET" >
<button input type="submit" name="Logout" style="text-align: center">Log out</button>
</form>
<?php
	if (isset($_GET["Logout"])) {
		echo '<script type="text/javascript">
				document.location="http://cscilab.bc.edu/~wudh/project/login.php";
			</script>';
	}
?>

</body>
</html>