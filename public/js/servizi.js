function onJSON(json){
    const container1 = document.querySelector("#prima .container");
    const img1 = document.createElement('img');
    const img2 = document.createElement('img');
    img1.src = json[5];
    img2.src = json[6];
    container1.appendChild(img1);
    container1.appendChild(img2);

    const text_container1 = document.querySelector("#prima .text_container");
    const contenuto1 = document.querySelector("#prima .contenuto1");
    const h1 = document.createElement("h1");
    h1.textContent = "Pulizia";
    const p = document.createElement("p");
    p.textContent = "Le nostre camere vengono pulite regolarmente così come la biancheria in tutte le camere, per noi l'igiene è fondamentale e vogliamo che il cliente si senta a casa."
    contenuto1.appendChild(h1);
    contenuto1.appendChild(p);
    text_container1.appendChild(contenuto1);

    const contenuto2 = document.querySelector("#prima .contenuto2");
    const h1_2 = document.createElement("h1");
    h1_2.textContent = "Servizio in camera";
    const p_2 = document.createElement("p");
    p_2.textContent = "Tutte le camere sono provviste di un telefono con cui contattare la reception attiva 24h/24 per qualsiasi informazione e per il servizio in camera."
    contenuto2.appendChild(h1_2);
    contenuto2.appendChild(p_2);
    text_container1.appendChild(contenuto2);

    const container2 = document.querySelector("#seconda .container");
    const img3 = document.createElement('img');
    const img4 = document.createElement('img');
    img3.src = json[7];
    img4.src = json[8];
    container2.appendChild(img3);
    container2.appendChild(img4);
    
    const text_container2 = document.querySelector("#seconda .text_container");
    const contenuto3 = document.querySelector("#seconda .contenuto1");
    const h1_3 = document.createElement("h1");
    h1_3.textContent = " Cucina raffinata";
    const p_3 = document.createElement("p");
    p_3.textContent = "Il nostro hotel si ispira al movimento del design moderno della metà del secolo e, a sua volta, il nostro ristorante e caffetteria in loco, Continental, è influenzato dalle cucine di tutto il mondo."
    contenuto3.appendChild(h1_3);
    contenuto3.appendChild(p_3);
    text_container2.appendChild(contenuto3);

    const contenuto4 = document.querySelector("#seconda .contenuto2");
    const h1_4 = document.createElement("h1");
    h1_4.textContent = "In hotel bar";
    const p_4 = document.createElement("p");
    p_4.textContent = "I barman mixologist del nostro bar, Refill, creano cocktail innovativi e deliziosi con la precisione di un chimico. Le birre prodotte dalle migliori birrerie londinesi sono alla spina e si alternano mensilmente per mantenere interessanti le nostre selezioni."
    contenuto4.appendChild(h1_4);
    contenuto4.appendChild(p_4);
    text_container2.appendChild(contenuto4);
}

function onJson(json) {
const section = document.querySelector("#terza");
const container = document.querySelector("#terza .container");
const objects = json;
container.innerHTML="";


    for(let i=0; i<=6; i++) {
    const div = document.createElement("div");
    div.classList.add("choice");
    const img = document.createElement("img");
    const h4 = document.createElement('h4');
    const textContainer = document.createElement('div');
    textContainer.classList.add("text_container");
    const like = document.createElement("img");
    like.classList.add("like");
    like.src = "http://localhost/hw2/public/images/default_like.jpg";
    img.src = objects.drinks[i].strDrinkThumb;
    h4.textContent = objects.drinks[i].strDrink;
    img.classList.add("api");
    textContainer.appendChild(h4);
    textContainer.appendChild(like);
    div.appendChild(img);
    div.appendChild(textContainer);
    container.appendChild(div);
    section.appendChild(container);
    const divs = document.querySelectorAll(".choice");
    for ( const div of divs) {
    div.addEventListener("click",liked_drink); 
        }
    }
}

function onjson(json)   {
const section = document.querySelector("#quarta");
const form = document.querySelector("#due");
const container = document.querySelector("#quarta .container");
const objects = json;
container.innerHTML= "";


for(let i=0; i<objects.meals.length; i++) {
    const div = document.createElement("div");
    div.classList.add("choice");
    const img = document.createElement("img");
    const h4 = document.createElement('h4');
    const textContainer = document.createElement('div');
    textContainer.classList.add("text_container");
    const like = document.createElement("img");
    like.classList.add("like");
    like.src = "http://localhost/hw2/public/images/default_like.jpg";
    img.src = objects.meals[i].strMealThumb;
    h4.textContent = objects.meals[i].strMeal;
    img.classList.add("api");
    textContainer.appendChild(h4);
    textContainer.appendChild(like);
    div.appendChild(img);
    div.appendChild(textContainer);
    container.appendChild(div);
    const divs = document.querySelectorAll(".choice");
    for ( const div of divs) {
    div.addEventListener("click",liked_meal); 
        }
    }
}

function fetchDrinks(event) {
const form_data = new FormData(document.querySelector("form"));
drink = encodeURIComponent(form_data.get('search'));
fetch(BASE_URL + 'servizi/search/drink/' + drink ).then(onResponse).then(onJson);
event.preventDefault();
}

function fetchFood(event) {
const form_data_2 = new FormData(document.querySelector("#due"));
meal =  encodeURIComponent(form_data_2.get('search'));
fetch(BASE_URL + 'servizi/search/meal/' + meal ).then(onResponse).then(onjson);
event.preventDefault();
}

function liked_drink (event) {
if(document.querySelectorAll(".chosen_drink").length == '0') {
event.currentTarget.classList.add("chosen_drink");
const like_button = document.querySelector(".chosen_drink .like");
like_button.src ="http://localhost/hw2/public/images/like.png";
event.currentTarget.removeEventListener("click", liked_drink);
event.currentTarget.addEventListener("click", unliked_drink);
    }
}

function liked_meal (event) {
    if(document.querySelectorAll(".chosen_meal").length == '0') {
    event.currentTarget.classList.add("chosen_meal");
    const like_button = document.querySelector(".chosen_meal .like");
    like_button.src ="http://localhost/hw2/public/images/like.png";
    event.currentTarget.removeEventListener("click", liked_meal);
    event.currentTarget.addEventListener("click", unliked_meal);
        }
    }
function unliked_meal(event) {
const like_button = document.querySelector(".chosen_meal .like");
like_button.src ="http://localhost/hw2/public/images/default_like.jpg";
event.currentTarget.classList.remove("chosen_meal");
event.currentTarget.removeEventListener("click", unliked_meal);
event.currentTarget.addEventListener("click", liked_meal);
}

function unliked_drink(event) {
    const like_button = document.querySelector(".chosen_drink .like");
    like_button.src ="http://localhost/hw2/public/images/default_like.jpg";
    event.currentTarget.classList.remove("chosen_drink");
    event.currentTarget.removeEventListener("click", unliked_drink);
    event.currentTarget.addEventListener("click", liked_drink);
    }

function sendImages(event) {

const liked_drink = document.querySelector(".chosen_drink");
const liked_meal = document.querySelector(".chosen_meal");

const liked_drink_src = liked_drink.childNodes[0].currentSrc;
const liked_drink_name = liked_drink.childNodes[1].innerText;
const liked_meal_src = liked_meal.childNodes[0].currentSrc;
const liked_meal_name = liked_meal.childNodes[1].innerText;

const formData = new FormData();
formData.append('liked_drink_src', liked_drink_src);
formData.append('liked_drink_name', liked_drink_name);
formData.append('liked_meal_src', liked_meal_src);
formData.append('liked_meal_name', liked_meal_name);
formData.append('_token', csrf_token);

fetch (BASE_URL + 'servizi/insert', {
  method: 'POST',
  body: formData
})
.then(onResponse)
.then(end);
}

function end () {
    const section_1 = document.querySelector("#terza");
    const section_2 = document.querySelector("#quarta");
    section_1.innerHTML="";
    section_2.innerHTML="";
    const p = document.createElement("p");
    p.classList.add("finale");
    p.textContent="Inserimento avvenuto con successo!."
    section_2.appendChild(p);
}


function onResponse(response)
{
return response.json();
}

const button = document.querySelector("#button");
const button_2 = document.querySelector("#button_2");
const button_container = document.querySelector(".button-container");
button_container.addEventListener("click", sendImages);
button.addEventListener("click", fetchDrinks);
button_2.addEventListener("click", fetchFood);

fetch(BASE_URL + 'servizi/contents').then(onResponse).then(onJSON);
