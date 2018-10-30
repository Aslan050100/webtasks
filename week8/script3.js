const JSON_PATH = 'http://demo4296963.mockable.io/listCars';
var qwe = 0;
let ar;
var num = 0;
function sortByMaker(q,w){
    return q.maker.localeCompare(w.maker);
}
        
function sortByPrice(q,w){
    return q.price - w.price;
}
        
function onClick(value){
    qwe =1;
    document.getElementById("loading").style.display = 'block';
    const but = document.querySelector('button');
    but.innerHTML = "loading...";
            
    setTimeout(function(){
    document.getElementById('loading').style.display = 'none';
    but.innerHTML = 'Items are loaded';

    fetch(JSON_PATH).then(onResponse,onError).then(onS);
    } , 2000);
}

function onS(text){
    const cards  = document.getElementById('cards');
    const a  = JSON.parse(text);
    ar = a;

    for(let i of a){
        var sad = document.createElement('div');
        var div1 = document.createElement('div');
        var div2 = document.createElement('div');
        sad.classList.add('card');
        div1.classList.add('title');
        div2.classList.add('price');
        div1.innerHTML = i.maker + " " + i.model;
        div2.innerHTML = i.maker;
        sad.appendChild(div1);
        sad.appendChild(div2);
        cards.appendChild(sad);

    }
}

function onResponse(response){
    return response.text();
}
        
function onError(error){
    console.log(error);
}
       
function onClick2(value){
  if(qwe!=0){
    document.getElementById('cards').innerHTML = "";
    num = value;
    if(num == 1){
        ar.sort(sortByMaker);
    }
    else if(num ==2){
        ar.sort(sortByPrice);
    }
    for(let i of ar){
        var sad=document.createElement('div');
        var div1=document.createElement('div');
        var div2=document.createElement('div');
        sad.classList.add('card');
        div1.classList.add('title');
        div2.classList.add('price');
        div1.innerHTML=i.maker + ' '+ i.model;
        div2.innerHTML=i.price;
        sad.appendChild(div1);
        sad.appendChild(div2);
        cards.appendChild(sad);
    }
  }
}