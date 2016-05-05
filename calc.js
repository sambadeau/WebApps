function showcase() {
	x = ["BC", "Mcdonald's", "Chipotle", "Dunkin Donuts"];
	xlen = x.length;
	for (i = 0; i < xlen; i++) {
		document.getElementById(x[i]).style = "display: none;";
	}
	if(document.getElementById('place').value == "uno") {
		document.getElementById("BC").style = "display: block;";
	}
	if(document.getElementById('place').value == "dos") {
		document.getElementById("Mcdonald's").style = "display: block;";
	}
	if(document.getElementById('place').value == "tres") {
		document.getElementById("Chipotle").style = "display: block;";
	}
	if(document.getElementById('place').value == "cuatro") {
		document.getElementById("Dunkin Donuts").style = "display: block;";
	}
}
function mcdonaldscalculate(a, b, c, d, e, f, g, h, i, newone, checking) {
	if (checking == 1 && i == -10) {
		if (newone == "Select an exercise") {
			document.getElementById("result").innerHTML = "You didn't select an exercise!";
		}
		else {
			document.getElementById("result").innerHTML = "Food not found in database - try again";
		}
	}
	else if (newone != "Select an exercise"){
		if (i == -10) {
			i = 0;
		}
		var total;
		total = a + b + c + d + e + f + g + h + i;


		if (newone == "Run") {
			run(total);
		}
		if (newone == "Cycle") {
			cycle(total);
		}
		if (newone == "Swim") {
			swim(total);
		}
		if (newone == "Tennis") {
			tennis(total);
		}
		if (newone == "Walk") {
			walk(total);
		}
	}
	else {
		document.getElementById("result").innerHTML = "You didn't select an exercise!";
	}

}
function dunkincalculate(a, b, c, d, e, newone, checking) {
	if (checking == 1 && e == -10) {
			if (newone == "Select an exercise") {
				document.getElementById("result").innerHTML = "You didn't select an exercise!";
			}
			else {
				document.getElementById("result").innerHTML = "Food not found in database - try again";
			}
	}
	else if (newone != "Select an exercise"){
		if (e == -10) {
			e = 0;
		}
		var total;
		total = a + b + c + d + e;


		if (newone == "Run") {
			run(total);
		}
		if (newone == "Cycle") {
			cycle(total);
		}
		if (newone == "Swim") {
			swim(total);
		}
		if (newone == "Tennis") {
			tennis(total);
		}
		if (newone == "Walk") {
			walk(total);
		}
	}
	else {
		document.getElementById("result").innerHTML = "You didn't select an exercise!";
	}

}
function chipotlecalculate(a, b, c, d, e, f, newone, checking) {
	if (checking == 1 && f == -10) {
			if (newone == "Select an exercise") {
				document.getElementById("result").innerHTML = "You didn't select an exercise!";
			}
			else {
				document.getElementById("result").innerHTML = "Food not found in database - try again";
			}
	}
	else if (newone != "Select an exercise"){
		if (f == -10) {
			f = 0;
		}
		var total;
		total = a + b + c + d + e + f;


		if (newone == "Run") {
			run(total);
		}
		if (newone == "Cycle") {
			cycle(total);
		}
		if (newone == "Swim") {
			swim(total);
		}
		if (newone == "Tennis") {
			tennis(total);
		}
		if (newone == "Walk") {
			walk(total);
		}
	}
	else {
		document.getElementById("result").innerHTML = "You didn't select an exercise!";
	}

}
function calculate(a, b, c, d, e, f, g, h, newone, checking) {
	if (checking == 1 && h == -10) {
			if (newone == "Select an exercise") {
				document.getElementById("result").innerHTML = "You didn't select an exercise!";
			}
			else {
				document.getElementById("result").innerHTML = "Food not found in database - try again";
			}
	}
	else if (newone != "Select an exercise"){
		if (h == -10) {
			h = 0;
		}
		var total;
		total = a + b + c + d + e + f + g + h;


		if (newone == "Run") {
			run(total);
		}
		if (newone == "Cycle") {
			cycle(total);
		}
		if (newone == "Swim") {
			swim(total);
		}
		if (newone == "Tennis") {
			tennis(total);
		}
		if (newone == "Walk") {
			walk(total);
		}
	}
	else {
		document.getElementById("result").innerHTML = "You didn't select an exercise!";
	}

}
function walk(x) {
	var a = parseInt(x);
	var r = (a) / (25/6);
	var real = r.toFixed(2);
	document.getElementById("result").innerHTML = "You have to walk (about 3 mph) for " + real + " minutes to burn off that item(s)";

}
function tennis(x) {
	var a = parseInt(x);
	var r = (a) / 5;
	var real = r.toFixed(2);
	document.getElementById("result").innerHTML = "You have play tennis (singles) on average for " + real + " minutes to burn off that item(s)";

}
function run(x) {
	var a = parseInt(x);
	var r = (a) / (52/19);
	var real = r.toFixed(2);
	document.getElementById("result").innerHTML = "You have to run for " + real + " minutes to burn off that item(s)";

}
function cycle(x) {
	var a = parseInt(x);
	var r = (a) / (13);
	var real = r.toFixed(2);
	document.getElementById("result").innerHTML = "You have to cycle for " + real + " minutes to burn off that item(s)";

}
function swim(x) {
	var a = parseInt(x);
	var r = (a) / (9.975);
	var real = r.toFixed(2);
	document.getElementById("result").innerHTML = "You have to swim at a moderate pace for " + real + " minutes to burn off that item(s)";

}