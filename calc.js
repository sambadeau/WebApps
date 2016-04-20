function calculate() {
	var getting = document.getElementById("food");
	var whichfood = getting.options[getting.selectedIndex].value;
	foodcal(whichfood);
}

function run(x) {
	var a = parseInt(x);
	var r = (a) / (52/19);
	var real = r.toFixed(2);
	document.getElementById("result1").innerHTML = "You have to run for " + real + " minutes to burn off that item(s)";

}
function cycle(x) {
	var a = parseInt(x);
	var r = (a) / (13);
	var real = r.toFixed(2);
	document.getElementById("result2").innerHTML = "You have to cycle for " + real + " minutes to burn off that item(s)";

}
function swim(x) {
	var a = parseInt(x);
	var r = (a) / (9.975);
	var real = r.toFixed(2);
	document.getElementById("result3").innerHTML = "You have to swim at a moderate pace for " + real + " minutes to burn off that item(s)";

}
function foodcal(food){
	var a;
	switch(food) {
		case "Big Mac":
			a = "563";
			run(a);
			cycle(a);
			swim(a);
			break;
		case "Whooper":
			a = "677";
			run(a);
			cycle(a);
			swim(a);
			break;
		case "Dave's Single from Wendy's":
			a = "550";
			run(a);
			cycle(a);
			swim(a);
			break;
		default:
			document.getElementById("result1").innerHTML = "error";
			document.getElementById("result2").innerHTML = "error";
			document.getElementById("result3").innerHTML = "error";
	}
}