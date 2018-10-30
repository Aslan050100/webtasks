const JSON_PATH = 'http://demo4296963.mockable.io/listCars';
var qwe=0;

function onClick(value){
    if(qwe==0){
        document.getElementById('loading').style.display = 'block';
        const but=document.querySelector('button');
        but.innerHTML='loading...';
        setTimeout(function(){
        document.getElementById('loading').style.display = 'none';
        but.innerHTML='Items are loaded';
        fetch(JSON_PATH).then(onResponse,onError).then(onS);
      }, 2000);}

      qwe=1;
      }

      function onS(text){
        const cards = document.getElementById('cards');
        const a = JSON.parse(text);
        for(let i of a){
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

      function onResponse(response){
          return response.text();

      }

      function onError(error){
          console.log(error);

      }