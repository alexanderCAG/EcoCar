
/********************************
        VERIF Info Admin
*********************************/
var regex_lettre = /^[a-zA-Z]+$/;
var regex_chiffre = /^[0-9]+$/;
var regex_mixte = /^[a-zA-Z0-9]+$/;
var regex_mail = /^([a-zA-Z0-9])+\@(([a-z-])+\.)+([a-z]{2,3})+$/;
var regex_mdp = /[\s@&\.-]/;
var regex_tot = /^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-\s]+$/;


// Ajouter Véhicule
document.getElementById('submit_valider_ajoutInscription').addEventListener('click', verifAjoutInscription)
function verifAjoutInscription(event){

    var verifAjoutInscription_Admin=true;

    // input
    let ajoutInscription1 = document.getElementById('nom');
    let ajoutInscription2 = document.getElementById('prenom');
    let ajoutInscription3 = document.getElementById('telephone');
    let ajoutInscription4 = document.getElementById('email');
    let ajoutInscription5 = document.getElementById('mdp');
    let ajoutInscription6 = document.getElementById('verif_mdp');

    // span
    let ErreurAjout_1 = document.getElementById('erreur_nom');
    let ErreurAjout_2 = document.getElementById('erreur_prenom');
    let ErreurAjout_3 = document.getElementById('erreur_telephone');
    let ErreurAjout_4 = document.getElementById('erreur_email');
    let ErreurAjout_5 = document.getElementById('erreur_mdp');
    let ErreurAjout_6 = document.getElementById('erreur_verif_mdp');
    
    // reset span
    ErreurAjout_1.innerHTML="";
    ErreurAjout_2.innerHTML="";
    ErreurAjout_3.innerHTML="";
    ErreurAjout_4.innerHTML="";
    ErreurAjout_5.innerHTML="";
    ErreurAjout_6.innerHTML="";
    
    // Nom verif
    if(ajoutInscription1.value.trim()==""){
        ErreurAjout_1.innerHTML = "Remplir le champs";
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription1.value.length >= 25){
        ErreurAjout_1.innerHTML = "Trop long";
        verifAjoutInscription_Admin=false;
    }else{
        ErreurAjout_1.innerHTML = "";
    }

    // Prenom verif
    if(ajoutInscription2.value.trim()==""){
        ErreurAjout_2.innerHTML = "Remplir le champs";
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription2.value.length >= 25){
        ErreurAjout_2.innerHTML = "Trop long";
        verifAjoutInscription_Admin=false;
    }else{
        ErreurAjout_2.innerHTML = "";
    }

    // Telephone verif
    if(ajoutInscription3.value.trim()==""){
        ErreurAjout_3.innerHTML = "Remplir le champs";
        verifAjoutInscription_Admin=false;
    }else if(regex_chiffre.test(ajoutInscription3.value)==false){
        ErreurAjout_3.innerHTML = "Seulement les chiffres";
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription3.value.length > 10){
        ErreurAjout_3.innerHTML = "Trop long";
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription3.value.length < 10){
        ErreurAjout_3.innerHTML = "Trop court";
        verifAjoutInscription_Admin=false;
    }else{
        ErreurAjout_3.innerHTML = "";
    }

    // Email verif
    if(ajoutInscription4.value.trim()==""){
        ErreurAjout_4.innerHTML = "Remplir le champs";
        verifAjoutInscription_Admin=false;
    }else if(regex_mail.test(ajoutInscription3.value)==false){
        ErreurAjout_4.innerHTML = "Email incorrecte nom de diou !";
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription4.value.length >= 40){
        ErreurAjout_4.innerHTML = "Trop long BEAUCOUP TROP LONG";
        verifAjoutInscription_Admin=false;
    }else{
        ErreurAjout_4.innerHTML = "";
    }

    // Mdp verif
    if(ajoutInscription5.value.trim()==""){
        ErreurAjout_5.innerHTML = "Remplir le champs";
        verifAjoutInscription_Admin=false;
    }else if(!/[a-z]/.test(ajoutInscription5.value)){
        ErreurAjout_5.innerHTML = "Ajouter des minuscules";
        verifAjoutInscription_Admin=false;
        ErreurAjout_5.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(ajoutInscription5.value)){
        ErreurAjout_5.innerHTML = "Ajouter des majuscules";
        verifAjoutInscription_Admin=false;
        ErreurAjout_5.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(ajoutInscription5.value)){
        ErreurAjout_5.innerHTML = "Ajouter des chiffres";
        verifAjoutInscription_Admin=false;
        ErreurAjout_5.setAttribute("style","color:red");
    }else if(/[1-9]/.test(ajoutInscription5.value) && regex_mdp.test(ajoutInscription5.value)==false){
        ErreurAjout_5.innerHTML = "Moyen";
        ErreurAjout_5.setAttribute("style","color:orange");
    }else if(regex_mdp.test(ajoutInscription5.value)){
        ErreurAjout_5.innerHTML = "Fort";
        ErreurAjout_5.setAttribute("style","color:green");
    }else{
        ErreurAjout_5.innerHTML = "";
    }

    // Mdp verif
    if(ajoutInscription6.value.trim()==""){
        ErreurAjout_6.innerHTML = "Remplir le champs";
        ErreurAjout_6.setAttribute("style","color:red");
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription5.value.trim() != ajoutInscription6.value.trim()){
        ErreurAjout_6.innerHTML = "Mot de passe différent";
        ErreurAjout_6.setAttribute("style","color:red");
        verifAjoutInscription_Admin=false;
    }else if(ajoutInscription5.value.trim() == ajoutInscription6.value.trim()){
        ErreurAjout_6.innerHTML = "Correcte";
        ErreurAjout_6.setAttribute("style","color:green");
    }else if(regex_mdp.test(ajoutInscription5.value) != regex_mdp.test(ajoutInscription6.value)){
        ErreurAjout_6.innerHTML = "Mot de passe pas sécurisé";
        ErreurAjout_6.setAttribute("style","color:red");
        verifAjoutInscription_Admin=false;
    }else if(/[1-9]/.test(ajoutInscription5.value) && regex_mdp.test(ajoutInscription5.value)==false != /[1-9]/.test(ajoutInscription6.value) && regex_mdp.test(ajoutInscription6.value)==false){
        ErreurAjout_6.innerHTML = "Mot de passe pas sécurisé";
        ErreurAjout_6.setAttribute("style","color:red");
        verifAjoutInscription_Admin=false;
    }else{
        ErreurAjout_6.innerHTML = "";
    }
    
    // verif event
    if(verifAjoutInscription_Admin == false){
        event.preventDefault();
    }

}