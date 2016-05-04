<?php
include('dbconn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap.css">
	<script type="text/javascript"src="../include/valid.js"></script>
	<!--<script src="http://maps.googleapis.com/maps/api/js"></script>-->
	<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDkrojz5Qd_N2slW5lIl78xMbWhWPOLUA&libraries=places"></script>-->

<script>
/*
var BC = new google.maps.LatLng(42.3355,-71.1685);
var NC = new google.maps.LatLng(42.3441,-71.1738);
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(42.3355,-71.1685),
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  
  
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
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


	var res = new google.maps.Marker({
		position: new google.maps.LatLng(42.334851,-71.159391)
	});

	res.setMap(map);
	var reswindow = new google.maps.InfoWindow({
  content:"Chestnut hill reservoir trail, Brighton, MA 02135, USA. Great place to run...1.5 miles around!"
  });
google.maps.event.addListener(res, 'click', function() {
  reswindow.open(map,res);
  });
  

}

google.maps.event.addDomListener(window, 'load', initialize);
*/
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
	<meta charset="utf-8" />
	<title>Welcome To Calorie Calculator</title>

	<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>

	<div class="jumbotron">
		<h1> Diet Is Easy & Fun <small> with Calorie Calulator</small> </h1>
		<form action='dboperation.php'>
		<input type="submit" name = "join" class="col-xs-5 col-md-3 col-lg-1 btn btn-info btn-md" value= "Sign Up!">
	</form>

	<form method = 'post'>
		<input type="submit" name = "pwlost" class="btn btn-danger btn-md col-xs-5 col-md-3 col-lg-1"  value= "Forgot Password?">
	</form>

	</div>
	<div class = "container">

	<img src="diet.jpg" align = "right" class = "img-responsive img-thumbnail img-rounded" alt="Norway" style="width:50%">

		<legend> Please Login to Access Your Calorie Log! </legend>

	<form method= 'post' name = 'myForm' onsubmit = 'return validateForm2()'>

		<fieldset class="form-group">
		<label> Username</label>
		<input type="text" class="form-control" name= 'email' placeholder="Enter Username">
		</fieldset>

		<fieldset class="form-group">
		<label>Password</label>
	    <input type="password" name= 'pw' class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
	  	</fieldset>

		<input type='submit' value = 'Login' name = 'submit' class="btn btn-warning btn-lg" > <br>
	</form>

	</div>

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
<!--<div id="googleMap" style="width:500px;height:380px;"></div><br><br>-->
<div id="map" style="width:500px;height:380px;"></div>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDkrojz5Qd_N2slW5lIl78xMbWhWPOLUA&libraries=places&callback=initMap" async defer></script>
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

		$email = $row['username'];
		$pw = $row['password'];

		if ($useremail == $email) {
			if(sha1($userpw) == $pw) {
				session_unset();
				$_SESSION["user"] = $email;
				echo '<script type="text/javascript">
				document.location="http://cscilab.bc.edu/~badeau/project/main.php";
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
