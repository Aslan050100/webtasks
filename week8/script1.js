function onResponse(response){
	return response.text();
}		
function onError(error){
	console.log(error);
}
function onClick(value){
	fetch(value).then(onResponse,onError).then(onS);
}
function onS(text){
	let divka = document.getElementById('news');
	divka.innerHTML = text;
}
