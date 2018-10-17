function ClickFn() {
	event.currentTarget.dataset.status = "done";
}
let tasks = document.getElementById("tasks");
let divItems = tasks.querySelectorAll("div");

for (let item of divItems){
	item.addEventListener("click", ClickFn);
}
