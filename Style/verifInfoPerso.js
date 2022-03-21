        
/********************************
        VERIF Info Admin
*********************************/
var regex_lettre = /^[a-zA-Z]+$/;
var regex_chiffre = /^[0-9]+$/;
var regex_mixte = /^[a-zA-Z0-9]+$/;
var regex_mail = /^([a-zA-Z0-9])+\@(([a-z-])+\.)+([a-z]{2,9})+$/;
var regex_mdp = /[\s@&\.-]/;
var regex_tot = /^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-\s]+$/;


// InfoPerso
document.getElementById('submit_valider_infoPerso').addEventListener('click', verifInfo)
function verifInfo(event){

    var verifInfoPerso_Admin=true;

    // input
    // let infoPerso_1 = document.getElementById('infoPerso_1');
    let infoPerso_2 = document.getElementById('infoPerso_2');
    let infoPerso_3 = document.getElementById('infoPerso_3');
    let infoPerso_4 = document.getElementById('infoPerso_4');
    let infoPerso_5 = document.getElementById('infoPerso_5');
    // let file_interrieur_imgAdmin = document.getElementById('file_interrieur_imgAdmin2');

    // span
    // let ErreurCon_1 = document.getElementById('ErreurCon_1');
    let ErreurCon_2 = document.getElementById('ErreurCon_2');
    let ErreurCon_3 = document.getElementById('ErreurCon_3');
    let ErreurCon_4 = document.getElementById('ErreurCon_4');
    let ErreurCon_5 = document.getElementById('ErreurCon_5');
    // let imageErreur_infoPerso = document.getElementById('imageErreur_infoPerso');

    // reset span
    // ErreurCon_1.innerHTML="";
    ErreurCon_2.innerHTML="";
    ErreurCon_3.innerHTML="";
    ErreurCon_4.innerHTML="";
    ErreurCon_5.innerHTML="";
    // imageErreur_infoPerso.innerHTML="";


    // Nom du site verif
    // if(infoPerso_1.value.trim()==""){
    //     ErreurCon_1.innerHTML = "Remplir le champs";
    //     verifInfoPerso_Admin=false;
    // }else if(regex_mixte.test(infoPerso_1.value)==false){
    //     ErreurCon_1.innerHTML = "Caractere spéciaux pas pris en compte";
    //     verifInfoPerso_Admin=false;
    // }else if(infoPerso_1.value.length >= 25){
    //     ErreurCon_1.innerHTML = "Trop long";
    //     verifInfoPerso_Admin=false;
    // }else{
    //     ErreurCon_1.innerHTML = "";
    // }

    // telephone verif
    if(infoPerso_2.value.trim()==""){
        ErreurCon_2.innerHTML = "Remplir le champs";
        verifInfoPerso_Admin=false;
    }else if(regex_chiffre.test(infoPerso_2.value)==false){
        ErreurCon_2.innerHTML = "Lettre pas pris en compte";
        verifInfoPerso_Admin=false;
    }else if(infoPerso_2.value.length > 10){
        ErreurCon_2.innerHTML = "N'existe pas, trop long";
        verifInfoPerso_Admin=false;
    }else{
        ErreurCon_2.innerHTML = "";
    }

    // mail verif
    if(infoPerso_3.value.trim()==""){
        ErreurCon_3.innerHTML = "Remplir le champs";
        verifInfoPerso_Admin=false;
    }else if(regex_mail.test(infoPerso_3.value)==false){
        ErreurCon_3.innerHTML = "Email pas correct";
        verifInfoPerso_Admin=false;
    }else if(infoPerso_3.value.length >= 40){
        ErreurCon_3.innerHTML = "Trop long";
        verifInfoPerso_Admin=false;
    }else{
        ErreurCon_3.innerHTML = "";
    }

    // mdp verif
    if(infoPerso_4.value.trim()==""){
        ErreurCon_4.innerHTML = "Remplir le champs";
        ErreurCon_4.setAttribute("style","color:red");
        verifInfoPerso_Admin=false;
    }else if(!/[a-z]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des minuscules";
        verifInfoPerso_Admin=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des majuscules";
        verifInfoPerso_Admin=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des chiffres";
        verifInfoPerso_Admin=false;
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
        verifInfoPerso_Admin=false;
    }else if(infoPerso_4.value.trim() != infoPerso_5.value.trim()){
        ErreurCon_5.innerHTML = "Mot de passe différent";
        ErreurCon_5.setAttribute("style","color:red");
        verifInfoPerso_Admin=false;
    }else if(infoPerso_4.value.trim() == infoPerso_5.value.trim()){
        ErreurCon_5.innerHTML = "Correcte";
        ErreurCon_5.setAttribute("style","color:green");
    }else if(regex_mdp.test(infoPerso_4.value) != regex_mdp.test(infoPerso_5.value)){
        ErreurCon_5.innerHTML = "Mot de passe pas sécurisé";
        ErreurCon_5.setAttribute("style","color:red");
        verifInfoPerso_Admin=false;
    }else if(/[1-9]/.test(infoPerso_4.value) && regex_mdp.test(infoPerso_4.value)==false != /[1-9]/.test(infoPerso_5.value) && regex_mdp.test(infoPerso_5.value)==false){
        ErreurCon_5.innerHTML = "Mot de passe pas sécurisé";
        ErreurCon_5.setAttribute("style","color:red");
        verifInfoPerso_Admin=false;
    }else{
        ErreurCon_5.innerHTML = "";
    }

    // image verif
    // if(file_interrieur_imgAdmin.value.length==""){
    //     imageErreur_infoPerso.innerHTML = "Remplir le champs";
    //     verifInfoPerso_Admin=false;
    // }else{
    //     imageErreur_infoPerso.innerHTML = "";
    // }


    // verif event
    if(verifInfoPerso_Admin == false){
        event.preventDefault();
    }

}
