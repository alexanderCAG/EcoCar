        
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
document.getElementById('submit_valider_modifVoiture').addEventListener('click', verifAjoutVoiture)
function verifAjoutVoiture(event){

    var verifAjoutVoiture_Admin=true;

    // input
    let ajoutVoiture1 = document.getElementById('modifVoiture1');
    let ajoutVoiture2 = document.getElementById('modifVoiture2');
    let ajoutVoiture3 = document.getElementById('modifVoiture3');
    let ajoutVoiture4 = document.getElementById('modifVoiture4');
    let ajoutVoiture5 = document.getElementById('modifVoiture5');
    let ajoutVoiture6 = document.getElementById('modifVoiture6');
    let ajoutVoiture7 = document.getElementById('modifVoiture7');
    let ajoutVoiture8 = document.getElementById('modifVoiture8');
    let ajoutVoiture9 = document.getElementById('modifVoiture9');
    let ajoutVoiture10 = document.getElementById('modifVoiture10');
    let ajoutVoiture11 = document.getElementById('modifVoiture11');
    let color_ajoutVoiture = document.getElementById('color_modifVoiture');
    let file_interrieur_imgAdminAjout = document.getElementById('file_interrieur_imgAdminmodif');

    // span
    let ErreurAjout_1 = document.getElementById('Erreurmodif_1');
    let ErreurAjout_2 = document.getElementById('Erreurmodif_2');
    let ErreurAjout_3 = document.getElementById('Erreurmodif_3');
    let ErreurAjout_4 = document.getElementById('Erreurmodif_4');
    let ErreurAjout_5 = document.getElementById('Erreurmodif_5');
    let ErreurAjout_6 = document.getElementById('Erreurmodif_6');
    let ErreurAjout_7 = document.getElementById('Erreurmodif_7');
    let ErreurAjout_8 = document.getElementById('Erreurmodif_8');
    let ErreurAjout_9 = document.getElementById('Erreurmodif_9');
    let ErreurAjout_10 = document.getElementById('Erreurmodif_10');
    let ErreurAjout_11 = document.getElementById('Erreurmodif_11');
    let ErreurAjout_12 = document.getElementById('Erreurmodif_12');
    let imageErreur_ajoutVoiture = document.getElementById('imageErreur_modifVoiture');

    // reset span
    ErreurAjout_1.innerHTML="";
    ErreurAjout_2.innerHTML="";
    ErreurAjout_3.innerHTML="";
    ErreurAjout_4.innerHTML="";
    ErreurAjout_5.innerHTML="";
    ErreurAjout_6.innerHTML="";
    ErreurAjout_7.innerHTML="";
    ErreurAjout_8.innerHTML="";
    ErreurAjout_9.innerHTML="";
    ErreurAjout_10.innerHTML="";
    ErreurAjout_11.innerHTML="";
    ErreurAjout_12.innerHTML="";
    imageErreur_ajoutVoiture.innerHTML="";


    // marque (select) verif
    if(ajoutVoiture1.value == "choixMarque"){
        ErreurAjout_1.innerHTML = "Choisir une marque";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_1.innerHTML = "";
    }

    // catégorie (select) verif
    if(ajoutVoiture2.value == "choixCategorie"){
        ErreurAjout_2.innerHTML = "Choisir une catégorie";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_2.innerHTML = "";
    }

    // Modèle verif
    if(ajoutVoiture3.value.trim()==""){
        ErreurAjout_3.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_mixte.test(ajoutVoiture3.value)==false){
        ErreurAjout_3.innerHTML = "Caractere spéciaux pas pris en compte";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture3.value.length >= 25){
        ErreurAjout_3.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_3.innerHTML = "";
    }

    // Référence verif
    if(ajoutVoiture4.value.trim()==""){
        ErreurAjout_4.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_mixte.test(ajoutVoiture4.value)==false){
        ErreurAjout_4.innerHTML = "Caractere spéciaux pas pris en compte";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture4.value.length >= 25){
        ErreurAjout_4.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_4.innerHTML = "";
    }

    // Couleur verif
    if(color_ajoutVoiture.value.trim()==""){
        ErreurAjout_5.innerHTML = "Choisir une couleur";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_5.innerHTML = "";
    }

    // image verif
    if(file_interrieur_imgAdminAjout.value.length==""){
        imageErreur_ajoutVoiture.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else{
        imageErreur_ajoutVoiture.innerHTML = "";
    }

    // Autonomie
    if(ajoutVoiture5.value.trim()==""){
        ErreurAjout_6.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture5.value)==false){
        ErreurAjout_6.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture5.value.length >= 10){
        ErreurAjout_6.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_6.innerHTML = "";
    }

    // Puissance
    if(ajoutVoiture6.value.trim()==""){
        ErreurAjout_7.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture6.value)==false){
        ErreurAjout_7.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture6.value.length >= 10){
        ErreurAjout_7.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_7.innerHTML = "";
    }

    // Consommation
    if(ajoutVoiture7.value.trim()==""){
        ErreurAjout_8.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture7.value)==false){
        ErreurAjout_8.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture7.value.length >= 10){
        ErreurAjout_8.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_8.innerHTML = "";
    }

    // Nb place
    if(ajoutVoiture8.value.trim()==""){
        ErreurAjout_9.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture8.value)==false){
        ErreurAjout_9.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture8.value.length >= 10){
        ErreurAjout_9.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_9.innerHTML = "";
    }

    // Prix jour
    if(ajoutVoiture9.value.trim()==""){
        ErreurAjout_10.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture9.value)==false){
        ErreurAjout_10.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture9.value.length >= 10){
        ErreurAjout_10.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_10.innerHTML = "";
    }

    // Prix semaine
    if(ajoutVoiture10.value.trim()==""){
        ErreurAjout_11.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture10.value)==false){
        ErreurAjout_11.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture10.value.length >= 10){
        ErreurAjout_11.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_11.innerHTML = "";
    }

    // Prix mois
    if(ajoutVoiture11.value.trim()==""){
        ErreurAjout_12.innerHTML = "Remplir le champs";
        verifAjoutVoiture_Admin=false;
    }else if(regex_chiffre.test(ajoutVoiture11.value)==false){
        ErreurAjout_12.innerHTML = "Seulement les chiffres";
        verifAjoutVoiture_Admin=false;
    }else if(ajoutVoiture11.value.length >= 10){
        ErreurAjout_12.innerHTML = "Trop long";
        verifAjoutVoiture_Admin=false;
    }else{
        ErreurAjout_12.innerHTML = "";
    }


    // verif event
    if(verifAjoutVoiture_Admin == false){
        event.preventDefault();
    }

}