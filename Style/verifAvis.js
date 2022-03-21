        
/********************************
        VERIF Info Admin
*********************************/
var regex_lettre = /^[a-zA-Z]+$/;
var regex_chiffre = /^[0-9]+$/;
var regex_mixte = /^[a-zA-Z0-9]+$/;
var regex_mail = /^([a-zA-Z0-9])+\@(([a-z-])+\.)+([a-z]{2,9})+$/;
var regex_mdp = /[\s@&\.-]/;
var regex_tot = /^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-\s]+$/;


// Ajouter Véhicule
document.getElementById('avisEnvoie').addEventListener('click', verifAvis)
function verifAvis(event){

    var verifAvis=true;

    // input
    let exampleInputNote = document.getElementById('exampleInputNote');
    let exampleFormControlTextarea1 = document.getElementById('exampleFormControlTextarea1');

    // span
    let noteAvis = document.getElementById('noteAvis');
    let texteAvis = document.getElementById('texteAvis');

    // reset span
    noteAvis.innerHTML="";
    texteAvis.innerHTML="";


    // Note verif
    if(exampleInputNote.value.trim()==""){
        noteAvis.innerHTML = "Remplir le champs";
        verifAvis=false;
    }else if(regex_chiffre.test(exampleInputNote.value)==false){
        noteAvis.innerHTML = "Seulement les chiffres";
        verifAvis=false;
    }else if(exampleInputNote.value >= 6){
        noteAvis.innerHTML = "Existe pas";
        verifAvis=false;
    }else{
        noteAvis.innerHTML = "";
    }

    // commentaire verif
    if(exampleFormControlTextarea1.value.trim()==""){
        texteAvis.innerHTML = "Remplir le champs";
        verifAvis=false;
    }else if(exampleFormControlTextarea1.value.length >= 76){
        texteAvis.innerHTML = "Trop long";
        verifAvis=false;
    }else{
        texteAvis.innerHTML = "";
    }

    // verif event
    if(verifAvis == false){
        event.preventDefault();
    }

}