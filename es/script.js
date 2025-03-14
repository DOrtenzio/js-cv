function addNewTitolo(event) {
    event.preventDefault(); // Impedisce il comportamento predefinito del bottone
    box = document.getElementById("box2");
    div = document.createElement("div");
    div.setAttribute("class", "riga2");

    //Elementi per ogni riga
    //Titolo
    h = document.createElement("h5");
    h.innerHTML = "Titolo:";
    i = document.createElement("input");
    i.setAttribute("type", "text");
    i.setAttribute("placeholder","Laurea Magisterale");
    //Anno
    h1 = document.createElement("h5");
    h1.innerHTML = "Anno:";
    i1 = document.createElement("input");
    i1.setAttribute("type", "date");
    i1.setAttribute("placeholder","01-01-1500");
    //Luogo
    h2 = document.createElement("h5");
    h2.innerHTML = "Luogo:";
    i2 = document.createElement("input");
    i2.setAttribute("type", "text");
    i2.setAttribute("placeholder","Curno, Monaco di Baviera, GE");
    //Bottone
    bott=document.createElement("button");
    bott.innerHTML = "X";
    bott.setAttribute("class","btnR");
    bott.onclick = function () {
        this.parentNode.remove();
    };


    //Aggiunta
    div.appendChild(h);
    div.appendChild(i);
    div.appendChild(h1);
    div.appendChild(i1);
    div.appendChild(h2);
    div.appendChild(i2);
    div.appendChild(bott);
    box.appendChild(div);
}

function addNewQualifica(event) {
    event.preventDefault(); // Impedisce il comportamento predefinito del bottone
    box = document.getElementById("box3");
    div = document.createElement("div");
    div.setAttribute("class", "riga2");

    //Elementi per ogni riga
    //Titolo
    h = document.createElement("h5");
    h.innerHTML = "Posto:";
    i = document.createElement("input");
    i.setAttribute("type", "text");
    i.setAttribute("name", "posto");
    i.setAttribute("placeholder","Tecnico");
    //Anno
    h1 = document.createElement("h5");
    h1.innerHTML = "Durata:";
    i1 = document.createElement("input");
    i1.setAttribute("type", "number");
    i1.setAttribute("name", "durata");
    i1.setAttribute("placeholder","10");
    //Luogo
    h2 = document.createElement("h5");
    h2.innerHTML = "Luogo:";
    i2 = document.createElement("input");
    i2.setAttribute("type", "text");
    i2.setAttribute("name", "luogo");
    i2.setAttribute("placeholder","Braun GE");
    //Bottone
    bott=document.createElement("button");
    bott.innerHTML = "X";
    bott.setAttribute("class","btnR");
    bott.onclick = function () {
        this.parentNode.remove();
    };


    //Aggiunta
    div.appendChild(h);
    div.appendChild(i);
    div.appendChild(h1);
    div.appendChild(i1);
    div.appendChild(h2);
    div.appendChild(i2);
    div.appendChild(bott);
    box.appendChild(div);

}
