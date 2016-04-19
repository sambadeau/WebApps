function calculate() {
	var getting = document.getElementById("food");
	var whichfood = getting.options[getting.selectedIndex].value;
	document.getElementById("result1").innerHTML = whichfood;
}

function run(x) {
}