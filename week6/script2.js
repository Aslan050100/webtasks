let countries = ["Kazakhstan","Russia","England","France"];

let cities_by_country = {"Kazakhstan":["Almaty","Astana","Aktobe"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

	let selectItem1 = document.querySelector("#countries");
	for(let count of countries){
		var optionItem1 = document.createElement("option");	
		optionItem1.textContent = count;
		selectItem1.appendChild(optionItem1);
}

function changeFn(){

	document.getElementById("cities").options.length = 1;
	let selected1 = document.getElementById("countries");

	let selected2 = document.getElementById("cities");


	var r = selected1.value;

	

	var arr = cities_by_country[r];

	for (var i=0; i<arr.length; i++) { 

		var optionItem2 = document.createElement('option');

		optionItem2.textContent = arr[i];

		selected2.appendChild(optionItem2);
	}
}



var choice = document.querySelector('#countries');

choice.addEventListener('click',changeFn);

