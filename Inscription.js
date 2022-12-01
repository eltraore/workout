function TestNom() {
    var diverreurNom=document.getElementById("erreurNom");  
    
    var nom=document.getElementById("nom").value;

    if (!nom.match(checkLetter)) {
        diverreurNom.innerHTML="<p id='error'>Votre nom doit comporter uniquement des lettres !!!</p>";
    }
    else if (nom.length < 3){
        diverreurNom.innerHTML="<p id='error'>Votre nom doit comporter au moins 3 lettre !!!</p>";
    }
    else {
        diverreurNom.innerHTML="";
    }
}

function TestPrenom() {
    var diverreurPrenom=document.getElementById("erreurPrenom");  
    
    var prenom=document.getElementById("prenom").value;

    if (!prenom.match(checkLetter)) {
        diverreurPrenom.innerHTML="<p id='error'>Votre prenom doit comporter uniquement des lettres !!!</p>";
    }
    else if (prenom.length < 2) {
        diverreurPrenom.innerHTML="<p id='error'>Votre prenom doit comporter au moins 2 lettre !!!</p>";
    }
    else {
        diverreurPrenom.innerHTML="";
    }
}

function TestMdp_verif() {
    var diverreurMdp=document.getElementById("erreurMdp");  
    
    var mdp=document.getElementById("mdp").value;
    var mdp_verif=document.getElementById("mdp_verif").value;


    if (mdp!=mdp_verif) {
        diverreurMdp.innerHTML="<p  id='error'>Mot de passe ne correspond pas.</p>";
    }
    else {
        diverreurMdp.innerHTML="";
    }
    ToutBon();
}

function ToutBon() {
    var calculer = document.getElementById("calculer");
    var nada = document.getElementById("nada");

    if (document.getElementById('error')) {
        calculer.disabled = true;        
    }
    else if (nada = undefined) {
        calculer.disabled = true;
    }
    else {
        calculer.disabled = false;
    }
}



var nom = ""
var prenom = ""



var checkLetter = /^[a-zA-Z- ]+$/;
var checkNumber = /^[0-9]+$/;
var checkFloat = /^[0-9-.]+$/;
var checkMail= /^([a-zA-Z0-9_-]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;