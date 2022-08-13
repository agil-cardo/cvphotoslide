// declaration des variables 

let cvFrancais = document.getElementById('texte-fr');
let cvEspagnol = document.getElementById('texte-esp');



// creation de function 

function french() {
    cvEspagnol.style.display = "none" ;
    cvFrancais.style.display = "block";
}

function spanish() {
    cvEspagnol.style.display = "block" ;
    cvFrancais.style.display = "none";
}

