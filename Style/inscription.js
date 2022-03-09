
/********************************
        VERIF Info Admin
*********************************/
var regex_lettre = /^[a-zA-Z]+$/;
var regex_chiffre = /^[0-9]+$/;
var regex_mixte = /^[a-zA-Z0-9]+$/;
var regex_mail = /^([a-zA-Z0-9])+\@(([a-z-])+\.)+([a-z]{2,3})+$/;
var regex_mdp = /[\s@&\.-]/;
var regex_tot = /^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-\s]+$/;

// Ajouter inscrit
document.getElementById('submit_validerInscription').addEventListener('click', verifAjoutInscription)
function verifAjoutInscription(event){

    var verifInscrit=true;

    // input
    let infoPerso_1 = document.getElementById('nomInscrit');
    let infoPerso_6 = document.getElementById('prenomInscrit');
    let infoPerso_2 = document.getElementById('telephoneInscrit');
    let infoPerso_3 = document.getElementById('emailInscrit');
    let infoPerso_4 = document.getElementById('mdpInscrit');
    let infoPerso_5 = document.getElementById('verif_mdpInscrit');
    // span
    let ErreurCon_1 = document.getElementById('erreur_nom');
    let ErreurCon_6 = document.getElementById('erreur_prenom');
    let ErreurCon_2 = document.getElementById('erreur_telephone');
    let ErreurCon_3 = document.getElementById('erreur_email');
    let ErreurCon_4 = document.getElementById('erreur_mdp');
    let ErreurCon_5 = document.getElementById('erreur_verif_mdp');
    // reset span
    ErreurCon_1.innerHTML="";
    ErreurCon_6.innerHTML="";
    ErreurCon_2.innerHTML="";
    ErreurCon_3.innerHTML="";
    ErreurCon_4.innerHTML="";
    ErreurCon_5.innerHTML="";

    // Nom verif
    if(infoPerso_1.value.trim()==""){
        ErreurCon_1.innerHTML = "Remplir le champs";
        verifInscrit=false;
    }else if(regex_mixte.test(infoPerso_1.value)==false){
        ErreurCon_1.innerHTML = "Caractere spéciaux pas pris en compte";
        verifInscrit=false;
    }else if(infoPerso_1.value.length >= 25){
        ErreurCon_1.innerHTML = "Trop long";
        verifInscrit=false;
    }else{
        ErreurCon_1.innerHTML = "";
    }

    // Prenom verif
    if(infoPerso_6.value.trim()==""){
        ErreurCon_6.innerHTML = "Remplir le champs";
        verifInscrit=false;
    }else if(regex_mixte.test(infoPerso_6.value)==false){
        ErreurCon_6.innerHTML = "Caractere spéciaux pas pris en compte";
        verifInscrit=false;
    }else if(infoPerso_6.value.length >= 25){
        ErreurCon_6.innerHTML = "Trop long";
        verifInscrit=false;
    }else{
        ErreurCon_6.innerHTML = "";
    }

    // telephone verif
    if(infoPerso_2.value.trim()==""){
        ErreurCon_2.innerHTML = "Remplir le champs";
        verifInscrit=false;
    }else if(regex_chiffre.test(infoPerso_2.value)==false){
        ErreurCon_2.innerHTML = "Lettre pas pris en compte";
        verifInscrit=false;
    }else if(infoPerso_2.value.length != 10){
        ErreurCon_2.innerHTML = "N'existe pas";
        verifInscrit=false;
    }else{
        ErreurCon_2.innerHTML = "";
    }

    // mail verif
    if(infoPerso_3.value.trim()==""){
        ErreurCon_3.innerHTML = "Remplir le champs";
        verifInscrit=false;
    }else if(regex_mail.test(infoPerso_3.value)==false){
        ErreurCon_3.innerHTML = "Email pas correct";
        verifInscrit=false;
    }else if(infoPerso_3.value.length >= 40){
        ErreurCon_3.innerHTML = "Trop long";
        verifInscrit=false;
    }else{
        ErreurCon_3.innerHTML = "";
    }

    // mdp verif
    if(infoPerso_4.value.trim()==""){
        ErreurCon_4.innerHTML = "Remplir le champs";
        ErreurCon_4.setAttribute("style","color:red");
        verifInscrit=false;
    }else if(!/[a-z]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des minuscules";
        verifInscrit=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des majuscules";
        verifInscrit=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des chiffres";
        verifInscrit=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(/[1-9]/.test(infoPerso_4.value) && regex_mdp.test(infoPerso_4.value)==false){
        ErreurCon_4.innerHTML = "Moyen";
        ErreurCon_4.setAttribute("style","color:orange");
    }else if(regex_mdp.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Fort";
        ErreurCon_4.setAttribute("style","color:green");
    }else{
        ErreurCon_4.innerHTML = "";
    }

    // mdp verif 2
    if(infoPerso_5.value.trim()==""){
        ErreurCon_5.innerHTML = "Remplir le champs";
        ErreurCon_5.setAttribute("style","color:red");
        verifInscrit=false;
    }else if(infoPerso_4.value.trim() != infoPerso_5.value.trim()){
        ErreurCon_5.innerHTML = "Mot de passe différent";
        ErreurCon_5.setAttribute("style","color:red");
        verifInscrit=false;
    }else if(infoPerso_4.value.trim() == infoPerso_5.value.trim()){
        ErreurCon_5.innerHTML = "Correcte";
        ErreurCon_5.setAttribute("style","color:green");
    }else if(regex_mdp.test(infoPerso_4.value) != regex_mdp.test(infoPerso_5.value)){
        ErreurCon_5.innerHTML = "Mot de passe pas sécurisé";
        ErreurCon_5.setAttribute("style","color:red");
        verifInscrit=false;
    }else if(/[1-9]/.test(infoPerso_4.value) && regex_mdp.test(infoPerso_4.value)==false != /[1-9]/.test(infoPerso_5.value) && regex_mdp.test(infoPerso_5.value)==false){
        ErreurCon_5.innerHTML = "Mot de passe pas sécurisé";
        ErreurCon_5.setAttribute("style","color:red");
        verifInscrit=false;
    }else{
        ErreurCon_5.innerHTML = "";
    }

    // verif event
    if(verifInscrit == false){
        event.preventDefault();
    }
}