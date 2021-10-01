
/************************************
 * Atelier 1.1 Première utilisation
 ************************************/

// récupération de l'objet body (s'il est accessible)
let body = document.getElementsByTagName('body')[0]
console.log('L\'élément ' + body.tagName + ' a été récupéré !');

/************************************
 * Atelier 1.2 Fonction simple
 ************************************/

function formule(x) {
    // TODO : calculer x
    y = 2 * (7 / 22) * x ** 2
    return y
}

/************************************
 * Atelier 1.3 Devine
 ************************************/

function devine() {
    // TODO : générer un nombre et le faire deviner à l'utilisateur
}

/************************************
 * Atelier 1.4 Interagir avec la page
 ************************************/
window.onload = function () {
    document.getElementById('form').onsubmit = function (e) {
        console.log('exec')
        //Empêcher le rechargement de la page
        e.preventDefault();
        let nbr1 = document.getElementById("nbr1").value;
        let nbr2 = document.getElementById("nbr2").value;
        console.log(nbr1, nbr2)
        let nbr3 = nbr1 * nbr2;
        document.getElementById("res").innerHTML = nbr3;
        //TODO lire le contenu du formulaire
    };
}
/************************************
 * Atelier 1.5 Gestion des évènements
 ************************************/

function helloworld(event) {
    if (typeof event === 'undefined') {
        console.log('Je suis helloworld() MAIS je ne sais pas qui m\'a apellé :-(');
    } else {
        console.log('Je suis helloworld() et j\'ai été appelé par "' + event.target.textContent + '" \\o/');
        console.log(event.target);
    }
}


document.addEventListener('DOMContentLoaded', function (event) { // chargement du DOM (e gros : uniquement le HTML)
    let bouton3 = document.getElementById('btn_methode_3');
    bouton3.onclick = helloworld; // (sans parenthèse !)

    let bouton4 = document.getElementById('btn_methode_4');
    bouton4.addEventListener('click', function (event) {
        helloworld(event);
    });
});

const imgs = ['/images/Bean.webp', '/images/Elfo.webp', '/images/Luci.webp']
var index = 0
function loadimg(event) {
    let img = document.getElementById("image");
    if(event == 'prev'){
        index *= -1
        index = ((index-1) %3)
        index = Math.abs(index);
    }else{
        index = ((index+1) %3)
    }
    img.src = imgs[index];
}

document.addEventListener('DOMContentLoaded', function (event) { // chargement du DOM (e gros : uniquement le HTML)
    let btn_prev = document.getElementById('btn_prev');
    btn_prev.addEventListener('click', function (event) {
        loadimg('prev');
    });

    let btn_next = document.getElementById('btn_next');
    btn_next.addEventListener('click', function (event) {
        loadimg('next');
    });
});

