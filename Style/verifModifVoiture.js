        
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
    let color_ajoutVoiture = document.getElementById('color_modifVoiture');
    let file_interrieur_imgAdminAjout = document.getElementById('file_interrieur_imgAdminmodif');

    // span
    let ErreurAjout_1 = document.getElementById('Erreurmodif_1');
    let ErreurAjout_2 = document.getElementById('Erreurmodif_2');
    let ErreurAjout_3 = document.getElementById('Erreurmodif_3');
    let ErreurAjout_4 = document.getElementById('Erreurmodif_4');
    let ErreurAjout_5 = document.getElementById('Erreurmodif_5');
    let imageErreur_ajoutVoiture = document.getElementById('imageErreur_modifVoiture');

    // reset span
    ErreurAjout_1.innerHTML="";
    ErreurAjout_2.innerHTML="";
    ErreurAjout_3.innerHTML="";
    ErreurAjout_4.innerHTML="";
    ErreurAjout_5.innerHTML="";
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


    // verif event
    if(verifAjoutVoiture_Admin == false){
        event.preventDefault();
    }

}