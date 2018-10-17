let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];



const divka = document.getElementById("cars");

for (var i = 0; i < cars.length; i++) {

	var div = document.createElement("div");

	var car = document.createElement("img");

	car.className="card";

	div.className="card";

	car.src=cars[i].image_url;

	var str = document.createElement("p");

	str.innerHTML=cars[i].brand + " "+ cars[i].model;

	str.style="margin: 5px; font-weight: 600;";



	var shop = document.createElement("img");

	shop.className="cars";

	shop.classList.add("basket");

	shop.src="basket.png";

	shop.width= 30 ;

	shop.height = 30;

	shop.dataset.status="not selected";

	shop.dataset.price=cars[i]["price"];

	div.appendChild(shop);

	div.appendChild(car);

	div.appendChild(str);

	divka.appendChild(div);

};

var basket = document.getElementsByClassName("basket");



for (var i = 0; i < basket.length; i++) {

	var index=i;

	basket[i].addEventListener("click",function(event,index){

		if(event.currentTarget.dataset.status=="not selected"){

			var sum=parseInt(document.getElementById("sum").innerHTML);

			var item=parseInt(document.getElementById("items").innerHTML);

			event.currentTarget.src="dollar.png";

			event.currentTarget.dataset.status="selected";

			document.getElementById("sum").innerHTML=sum+parseInt(event.currentTarget.dataset.price);

			document.getElementById("items").innerHTML=item+1;

		}

		else{

			var sum=parseInt(document.getElementById("sum").innerHTML);

			var item=parseInt(document.getElementById("items").innerHTML);

			event.currentTarget.src="basket.png";

			event.currentTarget.dataset.status="not selected";

			document.getElementById("sum").innerHTML=sum-parseInt(event.currentTarget.dataset.price);

			document.getElementById("items").innerHTML=item-1;

		}

	})

};