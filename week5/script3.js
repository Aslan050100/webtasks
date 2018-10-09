function addStu(){
	const q = true;
	var val = document.querySelector("#name").value;
	if(!val){
		document.querySelector("#name").classList.add("error");
		q = false;
	}
	else{
		document.querySelector("#name").classList.remove("error");
	}
	var val2 = document.querySelector("#surname").value;
	if(!val2){
		document.querySelector("#surname").classList.add("error");
		q = false;
	}
	else{
		document.querySelector("#surname").classList.remove("error");
	}
	if(q){
		addTable(); 
	}
}
		
	function addTable(){
		var fname = document.querySelector("#name").value;
		var fsurname = document.querySelector("#surname").value;
		var ffaculty = document.querySelector("#faculty").value;

		var table = document.querySelector("#students");

		var newRow = table.insertRow(table.rows.length);


		var cel1 = newRow.insertCell(0);
		var cel2 = newRow.insertCell(1);
		var cel3 = newRow.insertCell(2);

		cel1.innerHTML = fname;
		cel2.innerHTML = fsurname;
		cel3.innerHTML = ffaculty;
	}

	document.querySelector("#addStudent").addEventListener('click',addStu);