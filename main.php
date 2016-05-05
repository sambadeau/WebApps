<?php
include('dbconn.php');
session_start();

function displayMcForm() {
	$dbnow = connect_to_db( "hwangmn" );
	$popfind1 = "SELECT * FROM mcdonalds WHERE Type = \"Breakfast\"";
	$popfind2 = "SELECT * FROM mcdonalds WHERE Type = \"Lunch\"";
	$popfind3 = "SELECT * FROM mcdonalds WHERE Type = \"Dinner\"";
	$popfind4 = "SELECT * FROM mcdonalds WHERE Type = \"Dessert\"";
	$popfind5 = "SELECT * FROM mcdonalds WHERE Type = \"Drink\"";
	$popfind6 = "SELECT * FROM mcdonalds WHERE Type = \"Grab and Go\"";
	$popfind7 = "SELECT * FROM mcdonalds WHERE Type = \"Bakery\"";
	$popfind8 = "SELECT * FROM mcdonalds WHERE Type = \"Other\"";
	$popfind9 = "SELECT * FROM chipotle WHERE Type = \"Base\"";
	$popfind10 = "SELECT * FROM chipotle WHERE Type = \"Topping\"";
	echo "<p>Mcdonald's Breakfast options</p>";
	echo '<select name="popfoodchoice1">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind1)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Lunch options</p>";
	echo '<select name="popfoodchoice2">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind2)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Dinner options</p>";
	echo '<select name="popfoodchoice3">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind3)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Dessert options</p>";
	echo '<select name="popfoodchoice4">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind4)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Drink options</p>";
	echo '<select name="popfoodchoice5">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind5)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Grab and Go options</p>";
	echo '<select name="popfoodchoice6">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind6)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Bakery options</p>";
	echo '<select name="popfoodchoice7">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind7)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Mcdonald's Other options</p>";
	echo '<select name="popfoodchoice8">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $popfind8)) {
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
	echo "Search by name <input type=\"text\" name=\"mcsearch\"/>";
	echo "<p>Exercise options</p>";
	echo '<select name="McExercise">
			<option value="Select an exercise">Select an exercise</option>
					<option value="Run">Run</option>
					<option value="Cycle">Cycle</option>
					<option value="Swim">Swim</option>
					<option value="Tennis">Tennis</option>
					<option value="Walk">Walk</option>
			  </select>';
	echo "<br><br>";
	echo'<input type="submit" class="btn btn-default" value = "Log This Result" name="mcgo">';
}
function displaydunkinForm() {
	$dbnow = connect_to_db( "hwangmn" );
	$dunkinfind = "SELECT * FROM dunkin WHERE Type = \"Breakfast\"";
	$dunkinfind1 = "SELECT * FROM dunkin WHERE Type = \"Donuts\"";
	$dunkinfind2 = "SELECT * FROM dunkin WHERE Type = \"Beverages\"";
	$dunkinfind3 = "SELECT * FROM dunkin WHERE Type = \"Sandwiches & Burgers\"";
	echo "<p>Dunkin Breakfast options</p>";
	echo '<select name="dunkinfoodchoice1">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $dunkinfind)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Dunkin Donuts options</p>";
	echo '<select name="dunkinfoodchoice2">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $dunkinfind1)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Dunkin Beverages options</p>";
	echo '<select name="dunkinfoodchoice3">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $dunkinfind2)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Dunkin Sandwiches & Burgers options</p>";
	echo '<select name="dunkinfoodchoice4">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $dunkinfind3)) {
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
	echo "Search by name <input type=\"text\" name=\"dunkinsearch\"/>";
	echo "<p>Exercise options</p>";
	echo '<select name="dunkinExercise">
			<option value="Select an exercise">Select an exercise</option>
					<option value="Run">Run</option>
					<option value="Cycle">Cycle</option>
					<option value="Swim">Swim</option>
					<option value="Tennis">Tennis</option>
					<option value="Walk">Walk</option>
			  </select>';
	echo "<br><br>";
	echo'<input type="submit" class="btn btn-default" value = "Log This Result" name="dunkingo">';
}
function displaychipForm() {
	$dbnow = connect_to_db( "hwangmn" );
	$chipfind = "SELECT * FROM chipotle WHERE Type = \"Base\"";
	$chipfind1 = "SELECT * FROM chipotle WHERE Type = \"Topping\"";
	echo "<p>Chipotle Base options</p>";
	echo '<select name="chipfoodchoice1">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $chipfind)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Chipotle Topping options</p>";
	echo '<select name="chipfoodchoice2">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $chipfind1)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Chipotle Topping options</p>";
	echo '<select name="chipfoodchoice3">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $chipfind1)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Chipotle Topping options</p>";
	echo '<select name="chipfoodchoice4">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $chipfind1)) {
		while ($row = mysqli_fetch_assoc($r)) {
			if ($row["Food"] != "Select an option"){
				$name = $row["Food"];
				$c = $row["Calories"];
				echo "<option value=\"".$name."\">".$name."</option>";
			}
		}
	}
	echo "</select>";
	echo "<p>Chipotle Topping options</p>";
	echo '<select name="chipfoodchoice5">';
		echo '<option value="Select an option">Select an option</option>';
	if ($r = perform_query($dbnow, $chipfind1)) {
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
	echo "Search by name <input type=\"text\" name=\"chipsearch\"/>";
	echo "<p>Exercise options</p>";
	echo '<select name="chipExercise">
			<option value="Select an exercise">Select an exercise</option>
					<option value="Run">Run</option>
					<option value="Cycle">Cycle</option>
					<option value="Swim">Swim</option>
					<option value="Tennis">Tennis</option>
					<option value="Walk">Walk</option>
			  </select>';
	echo "<br><br>";
	echo'<input type="submit" class="btn btn-default" value = "Log This Result" name="chipgo">';
}
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
	echo'<input type="submit" class="btn btn-default" value = "Log This Result" name="go">';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Main Page</title>
	<link rel="stylesheet" href="bootstrap.css">
	<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		       var map;
		      var infowindow;

		      function initMap() {
		        var pyrmont = {lat: -33.867, lng: 151.195};
				var BC = {lat: 42.3355, lng: -71.1685};
		        map = new google.maps.Map(document.getElementById('map'), {
		          center: BC,
		          zoom: 12
		        });
					var marker=new google.maps.Marker({
		  			position:new google.maps.LatLng(42.3355,-71.1685),
		  			animation:google.maps.Animation.BOUNCE
		  		});


		marker.setMap(map);
		var bcwindow = new google.maps.InfoWindow({
		  content:"This is Boston College! Click around to see available areas to perform cardio"
		  });
		google.maps.event.addListener(marker, 'click', function() {
		  bcwindow.open(map,marker);
		  });


		        infowindow = new google.maps.InfoWindow();
		        var service = new google.maps.places.PlacesService(map);
		        service.nearbySearch({
		          location: BC,
		          radius: 5000,
		          type: ['gym']
		        }, callback);
		      }

		      function callback(results, status) {
		        if (status === google.maps.places.PlacesServiceStatus.OK) {
		          for (var i = 0; i < results.length; i++) {
		            createMarker(results[i]);
		          }
		        }
		      }

		      function createMarker(place) {
		        var placeLoc = place.geometry.location;
		        var marker = new google.maps.Marker({
		          map: map,
		          position: place.geometry.location
		        });




		        google.maps.event.addListener(marker, 'click', function() {
		          infowindow.setContent(place.name);
		          infowindow.open(map, this);
		        });
		      }
	</script>
</head>
<script src="calc.js"></script>
<body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDkrojz5Qd_N2slW5lIl78xMbWhWPOLUA&libraries=places&callback=initMap" async defer></script>
<div class="jumbotron">
	<h1 style="text-align: center"> <small> Calorie Log Just For... </small><?php echo $_SESSION["user"]; ?>!</h1>
	<form method="GET">
		<button input="submit" class="col-xs-5 col-md-3 col-lg-1 btn btn-info btn-md" name="delhistory">Delete History</button>
	</form>
			<?php
				if (isset($_GET["delhistory"])) {
					$dbnow = connect_to_db( "hwangmn" );
					$delcomm = "DELETE FROM fooduser WHERE Email = \"".$_SESSION["user"]."\";";
					perform_query($dbnow, $delcomm);
				}
			?>

	<form method="GET" >
	<button input type="submit" class="btn btn-danger btn-md col-xs-5 col-md-3 col-lg-1" name="Logout" style="text-align: center">Log out</button>
	</form>
	<?php
		if (isset($_GET["Logout"])) {
			echo '<script type="text/javascript">
					document.location="http://cscilab.bc.edu/~wudh/project/login.php";
				</script>';
		}
	?>
</div>
<div class="container" align = "left">
<select id="place" onchange="showcase()">
	<option value="seleccionar" id="placeselect"> Select Where You Ate </option>
    <option value="uno" id="first"> BC Dining </option>
    <option value="dos" id="second"> McDonald's </option>
    <option value="tres" id="third"> Chipotle </option>
    <option value="cuatro" id="four"> Dunkin Donuts </option>
</select>
<form name="myform" method="GET">
	<div class="left" id = "Dunkin Donuts" style="display: none;">
	<fieldset>
	<legend><strong>Select your answer below from Dunkin Donuts!</strong></legend>
			<?php
				displaydunkinForm();
			?>
	</fieldset>
	</div>
	<div class="left" id = "BC" style="display: none;">
	<fieldset>
	<legend><strong>Select your answer below (From BC Dining)!</strong></legend>
			<?php
				displayForm();
			?>
	</fieldset>
	</div>
	<div class="left" id = "Mcdonald's" style="display: none;">
	<fieldset>
	<legend><strong>Select your answer below from McDonalds</strong></legend>
			<?php
				displayMcForm();
			?>
	</fieldset>
	</div>
	<div class="left" id = "Chipotle" style="display: none;">
	<fieldset>
	<legend><strong>Select your answer below from Chipotle</strong></legend>
			<?php
				displaychipForm();
			?>
	</fieldset>
	</div>
	</form>
</div>
		<?php
		$dbnow = connect_to_db( "hwangmn" );
		$find = "SELECT * FROM fooduser";
		$history = "SELECT * FROM food";
		$mcfind = "SELECT * FROM mcdonalds";
		$chipphp = "SELECT * FROM chipotle";
		$dunkinphp = "SELECT * FROM dunkin";
		echo '<div align = "right" class = \"container\">
		<div align = "right" style="width:200px" class="col-xs-3,col-xs-6,col-xs-3 panel panel-default">
				<div class="panel-heading">Exercise Notification</div>
		  		<div id = "result" class="panel-body">How Much Did You Eat Today?</div>
  		</div>

		<h1><small>Burn Those Calories in These Local Gyms...</small></h1>
			<div id="map" style="width:500px;height:380px;"></div></div>';
		if(isset($_GET["go"])){
			phpcalc($_GET["foodchoice1"], $_GET["foodchoice2"], $_GET["foodchoice3"], $_GET["foodchoice4"], $_GET["foodchoice5"], $_GET["foodchoice6"], $_GET["foodchoice7"], $_GET["search"], $dbnow, $history, $_GET["Exercise"]);
		}
		if(isset($_GET["mcgo"])){
			phpmccalc($_GET["popfoodchoice1"], $_GET["popfoodchoice2"], $_GET["popfoodchoice3"], $_GET["popfoodchoice4"], $_GET["popfoodchoice5"], $_GET["popfoodchoice6"], $_GET["popfoodchoice7"], $_GET["popfoodchoice8"], $_GET["search"], $dbnow, $mcfind, $_GET["McExercise"]);
		}
		if(isset($_GET["chipgo"])){
			phpchipcalc($_GET["chipfoodchoice1"], $_GET["chipfoodchoice2"], $_GET["chipfoodchoice3"], $_GET["chipfoodchoice4"], $_GET["chipfoodchoice5"], $_GET["chipsearch"], $dbnow, $chipphp, $_GET["chipExercise"]);
		}
		if(isset($_GET["dunkingo"])){
			phpdunkincalc($_GET["dunkinfoodchoice1"], $_GET["dunkinfoodchoice2"], $_GET["dunkinfoodchoice3"], $_GET["dunkinfoodchoice4"], $_GET["dunkinsearch"], $dbnow, $dunkinphp, $_GET["dunkinExercise"]);
		}
		?>
		</div>
</form>
</div>

<br><br><br>
<table style="width:100%" class="table table-striped table-hover">
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
			$mccomm = "SELECT * FROM mcdonalds";
			$chipcomm = "SELECT * FROM chipotle";
			$dunkincomm = "SELECT * FROM dunkin";
			$dbnow = connect_to_db( "hwangmn" );
			$result = -10;
			if ($r = perform_query($dbnow, $command)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Calories"];
			    	}
			    }
			}
			if ($r = perform_query($dbnow, $mccomm)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Calories"];
			    	}
			    }
			}
			if ($r = perform_query($dbnow, $chipcomm)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Calories"];
			    	}
			    }
			}
			if ($r = perform_query($dbnow, $dunkincomm)) {
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
			$mccomm = "SELECT * FROM mcdonalds";
			$chipcomm = "SELECT * FROM chipotle";
			$dunkincomm = "SELECT * FROM dunkin";
			$dbnow = connect_to_db( "hwangmn" );
			$result = "";
			if ($r = perform_query($dbnow, $command)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Food"];
			    	}
			    }
			}
			if ($r = perform_query($dbnow, $mccomm)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Food"];
			    	}
			    }
			}
			if ($r = perform_query($dbnow, $chipcomm)) {
			    while ($row = mysqli_fetch_assoc($r)) {
			    	if ($thisone == $row["Food"]) {
			    		$result = $row["Food"];
			    	}
			    }
			}
			if ($r = perform_query($dbnow, $dunkincomm)) {
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
		function phpdunkincalc($a, $b, $c, $d, $e, $dbnow, $history, $exer){
			$checking = 0;
			if ($a == "Select an option" && $b == "Select an option" && $c == "Select an option" && $d == "Select an option"){
				$checking = 1;
			}
			$e = isvalidfoodcal($e);
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
			    }
			}

		echo "<script type=\"text/javascript\">
					dunkincalculate(".$a.",".$b.",".$c.",".$d.",".$e.",\"".$exer."\", ".$checking.");
				  </script>";
		}
		function phpchipcalc($a, $b, $c, $d, $e, $f, $dbnow, $history, $exer){
			$checking = 0;
			if ($a == "Select an option" && $b == "Select an option" && $c == "Select an option" && $d == "Select an option" && $e == "Select an option"){
				$checking = 1;
			}
			$f = isvalidfoodcal($f);
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
			    }
			}

		echo "<script type=\"text/javascript\">
					chipotlecalculate(".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",\"".$exer."\", ".$checking.");
				  </script>";
		}
		function phpmccalc($a, $b, $c, $d, $e, $f, $g, $h, $i, $dbnow, $history, $exer){
			$checking = 0;
			if ($a == "Select an option" && $b == "Select an option" && $c == "Select an option" && $d == "Select an option" && $e == "Select an option"
			 && $f == "Select an option" && $g == "Select an option" && $h == "Select an option"){
				$checking = 1;
			}
			$i = isvalidfoodcal($i);
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
			    	if ($h == $row["Food"]) {
			    		$h = $row["Calories"];
			    	}
			    }
			}

		echo "<script type=\"text/javascript\">
					mcdonaldscalculate(".$a.",".$b.",".$c.",".$d.",".$e.",".$f.", ".$g.",".$h.",".$i.",\"".$exer."\", ".$checking.");
				  </script>";
		}
		function phpcalc($a, $b, $c, $d, $e, $f, $g, $h, $dbnow, $history, $exer){
			$checking = 0;
			if ($a == "Select an option" && $b == "Select an option" && $c == "Select an option" && $d == "Select an option" && $e == "Select an option"
			 && $f == "Select an option" && $g == "Select an option"){
				$checking = 1;
			}
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
					calculate(".$a.",".$b.",".$c.",".$d.",".$e.",".$f.", ".$g.",".$h.",\"".$exer."\", ".$checking.");
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
		if (isset($_GET["dunkingo"])){
					$getgoing = "SELECT * FROM dunkin";
					//INSERT INTO `fooduser` VALUES ("wudh@bc.edu", "Big Mac", now());
					$one = $_SESSION["user"];
					$two = $_GET["dunkinfoodchoice1"];
					$three = $_GET["dunkinfoodchoice2"];
					$four = $_GET["dunkinfoodchoice3"];
					$five = $_GET["dunkinfoodchoice4"];
					$six = isvalidfoodname($_GET["dunkinsearch"]);
					if (isset($_GET["dunkinfoodchoice1"])) {
						if ($_GET["dunkinfoodchoice1"] != "Select an option"){
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
					if (isset($_GET["dunkinfoodchoice2"])) {
						if ($_GET["dunkinfoodchoice2"] != "Select an option"){
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
					if (isset($_GET["dunkinfoodchoice3"])) {
						if ($_GET["dunkinfoodchoice3"] != "Select an option"){
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
					if (isset($_GET["dunkinfoodchoice4"])) {
						if ($_GET["dunkinfoodchoice4"] != "Select an option"){
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
					if ($six != "Select an option"){
						if ($r = perform_query($dbnow, $getgoing)) {
								while ($row = mysqli_fetch_assoc($r)) {
									if ($row["Food"] == $six){
										$t9 = $row["Type"];
										$c9 = $row["Calories"];
									}
								}
						}
						$comm9 = "INSERT INTO fooduser VALUES (\"$one\",\"$six\", now(), \"$t9\", \"$c9\");";
						perform_query($dbnow, $comm9);
					}
		}
		if (isset($_GET["chipgo"])){
					$getgoing = "SELECT * FROM chipotle";
					//INSERT INTO `fooduser` VALUES ("wudh@bc.edu", "Big Mac", now());
					$one = $_SESSION["user"];
					$two = $_GET["chipfoodchoice1"];
					$three = $_GET["chipfoodchoice2"];
					$four = $_GET["chipfoodchoice3"];
					$five = $_GET["chipfoodchoice4"];
					$six = $_GET["chipfoodchoice5"];
					$seven = isvalidfoodname($_GET["chipsearch"]);
					if (isset($_GET["chipfoodchoice1"])) {
						if ($_GET["chipfoodchoice1"] != "Select an option"){
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
					if (isset($_GET["chipfoodchoice2"])) {
						if ($_GET["chipfoodchoice2"] != "Select an option"){
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
					if (isset($_GET["chipfoodchoice3"])) {
						if ($_GET["chipfoodchoice3"] != "Select an option"){
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
					if (isset($_GET["chipfoodchoice4"])) {
						if ($_GET["chipfoodchoice4"] != "Select an option"){
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
					if (isset($_GET["chipfoodchoice5"])) {
						if ($_GET["chipfoodchoice5"] != "Select an option"){
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
					if ($seven != "Select an option"){
						if ($r = perform_query($dbnow, $getgoing)) {
								while ($row = mysqli_fetch_assoc($r)) {
									if ($row["Food"] == $seven){
										$t9 = $row["Type"];
										$c9 = $row["Calories"];
									}
								}
						}
						$comm9 = "INSERT INTO fooduser VALUES (\"$one\",\"$seven\", now(), \"$t9\", \"$c9\");";
						perform_query($dbnow, $comm9);
					}
		}
		if (isset($_GET["mcgo"])){
					$getgoing = "SELECT * FROM mcdonalds";
					//INSERT INTO `fooduser` VALUES ("wudh@bc.edu", "Big Mac", now());
					$one = $_SESSION["user"];
					$two = $_GET["popfoodchoice1"];
					$three = $_GET["popfoodchoice2"];
					$four = $_GET["popfoodchoice3"];
					$five = $_GET["popfoodchoice4"];
					$six = $_GET["popfoodchoice5"];
					$seven = $_GET["popfoodchoice6"];
					$eight = $_GET["popfoodchoice7"];
					$nine = $_GET["popfoodchoice8"];
					$ten = isvalidfoodname($_GET["mcsearch"]);
					if (isset($_GET["popfoodchoice1"])) {
						if ($_GET["popfoodchoice1"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice2"])) {
						if ($_GET["popfoodchoice2"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice3"])) {
						if ($_GET["popfoodchoice3"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice4"])) {
						if ($_GET["popfoodchoice4"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice5"])) {
						if ($_GET["popfoodchoice5"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice6"])) {
						if ($_GET["popfoodchoice6"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice7"])) {
						if ($_GET["popfoodchoice7"] != "Select an option"){
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
					if (isset($_GET["popfoodchoice8"])) {
						if ($_GET["popfoodchoice8"] != "Select an option"){
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
					if ($ten != "Select an option"){
						if ($r = perform_query($dbnow, $getgoing)) {
								while ($row = mysqli_fetch_assoc($r)) {
									if ($row["Food"] == $nine){
										$t9 = $row["Type"];
										$c9 = $row["Calories"];
									}
								}
						}
						$comm9 = "INSERT INTO fooduser VALUES (\"$one\",\"$ten\", now(), \"$t9\", \"$c9\");";
						perform_query($dbnow, $comm9);
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

</body>
</html>