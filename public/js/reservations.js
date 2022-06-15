function onJSON(json) {
const section = document.querySelector("#prima");

let table = document.createElement('table');
let thead = document.createElement('thead');
table.appendChild(thead);

if(json.length !== 0) {
const row = document.createElement('tr');
    for(let value of Object.keys(json[0]))
            {
            const heading = document.createElement('th');
            heading.classList.add("riga");
            heading.textContent = value.toUpperCase();
            row.appendChild(heading);
            }
thead.appendChild(row);   
        
    for (const x in json)
        {
            const row = document.createElement('tr');
            for(let value of Object.values(json[x]) )
                {
                const heading = document.createElement('th');
                heading.textContent = value;
                row.appendChild(heading);
                }
        thead.appendChild(row);
        }  
        section.appendChild(table);
}
else {
    const section = document.querySelector("#prima");
    const button = document.querySelector('.button-container');
    button.classList.add("hidden")
    const p = document.createElement("p");
    p.classList.add("error");
    p.textContent="Non risultano prenotazioni a tuo nome."
    section.appendChild(p);
}
}

function onjson (json) {
const section = document.querySelector("#seconda");
const container = document.querySelector("#seconda .container");
const objects = json;

if(json.length !== 0) {
for(let i=0; i< Object.keys(objects).length; i++) {
    const div = document.createElement("div");
    div.classList.add("choice");
    const img = document.createElement("img");
    const h4 = document.createElement('h4');
    const textContainer = document.createElement('div');
    textContainer.classList.add("text_container");
    img.src = objects[i].src;
    h4.textContent = objects[i].nome;
    img.classList.add("api");
    textContainer.appendChild(h4);
    div.appendChild(img);
    div.appendChild(textContainer);
    container.appendChild(div);
    }
}

else {
    const section = document.querySelector("#seconda");
    const button = document.querySelector('#seconda .button-container');
    button.classList.add("hidden");
    const p = document.createElement("p");
    p.classList.add("error");
    p.textContent="Non risultano preferiti a tuo nome."
    section.appendChild(p);
    }
}

function deleteLikes() {
    fetch(BASE_URL + 'reservations/delete/like').then(onResponse).then(cleanLikes);
}

function deleteReservations() {
    fetch(BASE_URL + 'reservations/delete/reservations').then(onResponse).then(cleanReservations);
}

function cleanLikes(){
    const button = document.querySelector("#seconda .button-container");
    const container = document.querySelector("#seconda .container");
    container.innerHTML="";
    button.innerHTML="";
}

function cleanReservations() {
    const section = document.querySelector("#prima");
    const container = document.querySelector(".button-container");
    section.innerHTML="";
    container.innerHTML="";
}

function onResponse(response)
{
return response.json();
}

fetch(BASE_URL + 'reservations/get').then(onResponse).then(onJSON);
fetch(BASE_URL + 'reservations/like').then(onResponse).then(onjson);
const button_1 = document.querySelector(".button-container button");
const button_2 = document.querySelector("#seconda button");
button_1.addEventListener('click', deleteReservations);
button_2.addEventListener('click', deleteLikes);