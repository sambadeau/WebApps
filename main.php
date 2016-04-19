<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../club/css/style10.css"/>
	<script type="text/javascript"src="valid.js"></script>
	<meta charset="utf-8" />
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script src="calc.js"></script>
<body>

<h1 style="text-align: center">Log in successful! Hello (name here)!</h1>

<div class="containall">
	<div class="left">
	Same line
	<table style="width:100%">
		<tbody>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Registration Date</th>
				<th>Member Type</th>
			</tr>
			<?php
			$find = "SELECT * FROM Club";

			function allfood($dbnow, $find) {
				$counter = 1;
				if ($r = perform_query($dbnow, $find)) {
				    while ($row = mysqli_fetch_assoc($r)) {
				    		$n = $row["Name"];
							$e = $row["Email"];
							$pw = $row["Password"];
							$ro = $row["Registrationdate"];
				       		$m = $row["Membershiptype"];
				       		if ($counter%2 == 1) {
				       			echo "<tr>
				       					<td>".$n."</td>
				       					<td>".$e."</td>
				       					<td>".$pw."</td>
				       					<td>".$ro."</td>
				       					<td>".$m."</td>
				       				 </tr>";
				       			$counter = $counter + 1;
				       		}
				       		else {
				       			echo "<tr>
										<td>".$n."</td>
										<td>".$e."</td>
										<td>".$pw."</td>
										<td>".$ro."</td>
										<td>".$m."</td>
				       				 </tr>";
				       			$counter = $counter + 1;
				       		}
				       	}
				}
			}


		?>
			</tbody>
	</table>
	</div>
	<div class="right">
	<fieldset>
	<legend><strong>Select your answer below!</strong></legend>
	<form name="myform" onsubmit="return false;">
			<select id="food">
				<option name = "which" value="563"> Big Mac</option>
	 			<option name = "which" value="677"> Whooper</option>
	 			<option name = "which" value="550"> Dave's Single from Wendy's</option>
			</select>
			<input type="submit" value="Submit" onclick="calculate();">
			<input type="reset" value="Reset">
	</form>
	</fieldset>
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
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Registration Date</th>
			<th>Member Type</th>
		</tr>
		<?php
		$find = "SELECT * FROM Club";

		function all($dbnow, $find) {
			$counter = 1;
			if ($r = perform_query($dbnow, $find)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    		$n = $row["Name"];
						$e = $row["Email"];
						$pw = $row["Password"];
						$ro = $row["Registrationdate"];
			       		$m = $row["Membershiptype"];
			       		if ($counter%2 == 1) {
			       			echo "<tr>
			       					<td>".$n."</td>
			       					<td>".$e."</td>
			       					<td>".$pw."</td>
			       					<td>".$ro."</td>
			       					<td>".$m."</td>
			       				 </tr>";
			       			$counter = $counter + 1;
			       		}
			       		else {
			       			echo "<tr>
									<td>".$n."</td>
									<td>".$e."</td>
									<td>".$pw."</td>
									<td>".$ro."</td>
									<td>".$m."</td>
			       				 </tr>";
			       			$counter = $counter + 1;
			       		}
			       	}
			}
		}


?>
	</tbody>
</table>

</body>
</html>