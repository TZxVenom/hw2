function onJSON(json){
    const div = document.querySelector("#prima div");
    const h1 = document.createElement("h1");
    h1.textContent = "Design eccezionale.\nServizio straordinario.";
    h1.classList.add("space");
    div.appendChild(h1);

    const container1 = document.querySelector("#prima .container");
    const img1 = document.createElement('img');
    img1.src = json[1];
    container1.appendChild(img1);

    const container2 = document.querySelector("#seconda .container");
    const img2 = document.createElement('img');
    img2.src = json[2];
    container2.appendChild(img2);

    const contenuto1 = document.querySelector("#seconda .contenuto");
    const h2 = document.createElement("h2");
    h2.textContent = " Informazioni sull'hotel\n";
    h2.classList.add("space");
    const a = document.createElement("a");
    a.textContent = "Progettato per essere un santuario del design e del moderno nel centro dellà città, il Vaine fà del comfort il suo punto focale. Nella pagina prenotazioni avrete la possibità di prenotare la camera che più si addice alle vostre necessità!";
    contenuto1.appendChild(h2);
    contenuto1.appendChild(a);
    container2.appendChild(contenuto1);

    const container3 = document.querySelector(".container_reversed");
    const img3 = document.createElement('img');
    img3.src = json[3];
    container3.appendChild(img3);

    const contenuto2 = document.querySelector(".container_reversed .contenuto");
    const h2_2 = document.createElement("h2");
    h2_2.textContent = " Fai un viaggio con noi\n";
    h2_2.classList.add("space");
    const a_2 = document.createElement("a");
    a_2.textContent = "Un soggiorno al Vaine è qualcosa di più di una camera. Esplora una giornata nella vita di una comunità di artisti, innovatori e viaggiatori..";
    contenuto2.appendChild(h2_2);
    contenuto2.appendChild(a_2);
    container3.appendChild(contenuto2);

    const container4 = document.querySelector("#quarta .container");
    const img4 = document.createElement('img');
    img4.src = json[4];
    container4.appendChild(img4);

    const contenuto3 = document.querySelector("#quarta .contenuto");
    const h2_3 = document.createElement("h2");
    h2_3.textContent = " Servizi\n";
    h2_3.classList.add("space");
    const a_3 = document.createElement("a");
    a_3.textContent = "Qualunque siano le vostre esigenze, il Vaine saprà soddisfarvi: la nostra cucina pluripremiata e il bar in hotel sono i nostri fiori all'occhiello. Nella pagina servizi inoltre potrete comunicarci il vostro drink e piatto preferito in modo da soddisfare tutti i vostri desideri.";
    contenuto3.appendChild(h2_3);
    contenuto3.appendChild(a_3);
    container4.appendChild(contenuto3);

    const overlay = document.querySelector("#overlay");
    const button = document.createElement("div");
    const link = document.createElement('a');
    link.href = BOOKING_URL;
    link.textContent = "Prenota una camera";
    button.classList.add("button");
    button.appendChild(link);
    const h1_2 = document.createElement("h1");
    h1_2.textContent = "Scegli il meglio, prenota un soggiorno con noi oggi!";
    overlay.appendChild(h1_2);
    overlay.appendChild(button);
}

function onClick() {
    const button = document.querySelector("button");
    button.innerHTML="";
    fetch(BASE_URL + 'home/contents').then(onResponse).then(onJson); 
}

function onJson(json) {
const container = document.querySelector("#quinta .container");
const img1 = document.createElement('img');
img1.src = json[9];
const img2 = document.createElement('img');
img2.src = json[10];
container.appendChild(img1);
container.appendChild(img2);

const text_container = document.querySelector("#quinta .text_container");
const contenuto1 = document.querySelector(".text_container .contenuto1");
const h1 = document.createElement("h1");
h1.textContent = "Benchmark";
const p = document.createElement("p");
p.textContent = "La Benchmark è una camera singola spaziosa e moderna dotata di tutti i comfort di cui una persona ha bisogno, rimarrai stupito dalla qualità nonostante il prezzo economico!";
contenuto1.appendChild(h1);
contenuto1.appendChild(p);
text_container.appendChild(contenuto1);

const contenuto2 = document.querySelector(".text_container .contenuto2");
const h1_2 = document.createElement("h1");
h1_2.textContent = "The Sovereign";
const p_2 = document.createElement("p");
p_2.textContent = "The Sovereign è una camera doppia dotata di un morbido letto matrimoniale, mini frigorifero e televisione HD, scegli questa stanza per trascorrere un periodo di puro relax con il tuo partner. ";
contenuto2.appendChild(h1_2);
contenuto2.appendChild(p_2);
text_container.appendChild(contenuto2);


const container2 = document.querySelector("#quinta .container2");
const img3 = document.createElement('img');
img3.src = json[11];
const img4 = document.createElement('img');
img4.src = json[12];
container2.appendChild(img3);
container2.appendChild(img4);

const text_container2 = document.querySelector("#quinta .text_container2");
const contenuto3 = document.querySelector(".text_container2 .contenuto1");
const h1_3 = document.createElement("h1");
h1_3.textContent = "Diamond";
const p_3 = document.createElement("p");
p_3.textContent = "La Diamond è una camera quadrupla con un letto matrimoniale e due letti singoli disposti a castello, dispone inoltre di due bagni, frigorifero e mobili da cucina.";
contenuto3.appendChild(h1_3);
contenuto3.appendChild(p_3);
text_container2.appendChild(contenuto3);

const contenuto4 = document.querySelector(".text_container2 .contenuto2");
const h1_4 = document.createElement("h1");
h1_4.textContent = "Aspire";
const p_4 = document.createElement("p");
p_4.textContent = "L'Aspire è la nostra camera doppia di lusso, si tratta di una suite completamente moderna e attrezzata e dispone di camera da letto con letto matrimoniale, zona soggiorno separata e bagno con un'ampia vasca idromassaggio. Scegli questa camera se vuoi vivere un'esperienza unica!";
contenuto4.appendChild(h1_4);
contenuto4.appendChild(p_4);
text_container2.appendChild(contenuto4);
}

function onResponse(response)
{
return response.json();
}

const button = document.querySelector("button");
button.addEventListener("click", onClick);
fetch(BASE_URL + 'home/contents').then(onResponse).then(onJSON);