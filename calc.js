function calculate(a, b, c, d, e, newone) {
	if (newone != "Select an exercise"){
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
	}
	else {
		document.getElementById("result").innerHTML = "You didn't select an exercise!";
	}

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