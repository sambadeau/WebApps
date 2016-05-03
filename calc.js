function calculate(a, b, c, d, e, f, g, h, newone) {
	if (newone != "Select an exercise" && h != -10){
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
	else if (h == -10) {
		document.getElementById("result").innerHTML = "Food not found in database - try again";
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