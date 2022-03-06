
// set up text to print, each item in array is new line
var aText = new Array(
    "Mes informations",
    "personnelles"
);

var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row

function typewriter(){

    sContents =  ' ';
    iRow = Math.max(0, iIndex-iScrollAt);
    var destination = document.getElementById("titreBande");
    
    while ( iRow < iIndex ) {
        sContents += aText[iRow++] + '<br />';
    }

    destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";

    if ( iTextPos++ == iArrLength ) {
        iTextPos = 0;
        iIndex++;

        if ( iIndex != aText.length ) {
        iArrLength = aText[iIndex].length;
        setTimeout("typewriter()", 500);
        }

    } else {
        setTimeout("typewriter()", iSpeed);
    }

}

typewriter();

/********************************
        VERIF Info User
*********************************/
var regex_lettre = /^[a-zA-Z]+$/;
var regex_chiffre = /^[0-9]+$/;
var regex_mixte = /^[a-zA-Z0-9]+$/;
var regex_mail = /^([a-zA-Z0-9])+\@(([a-z-])+\.)+([a-z]{2,3})+$/;
var regex_mdp = /[\s@&\.-]/;
var regex_tot = /^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-\s]+$/;


// InfoPerso
document.getElementById('UserModifInfo').addEventListener('click', verifInfoUser)
function verifInfoUser(event){

    var verifInfoPerso_User=true;

    // input
    let infoPerso_1 = document.getElementById('NomUser');
    let infoPerso_6 = document.getElementById('PrenomUser');
    let infoPerso_2 = document.getElementById('TelephoneUser');
    let infoPerso_3 = document.getElementById('EmailUser');
    let infoPerso_4 = document.getElementById('MdpUser');
    let infoPerso_5 = document.getElementById('Mdp2User');
    // let file_interrieur_imgAdmin = document.getElementById('file_interrieur_imgAdmin2');

    // span
    let ErreurCon_1 = document.getElementById('ErreurNom');
    let ErreurCon_6 = document.getElementById('ErreurPrenom');
    let ErreurCon_2 = document.getElementById('ErreurTelephone');
    let ErreurCon_3 = document.getElementById('ErreurEmail');
    let ErreurCon_4 = document.getElementById('ErreurMdp');
    let ErreurCon_5 = document.getElementById('ErreurMdp2');

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
        verifInfoPerso_User=false;
    }else if(regex_lettre.test(infoPerso_1.value)==false){
        ErreurCon_1.innerHTML = "Caractere spéciaux pas pris en compte";
        verifInfoPerso_User=false;
    }else if(infoPerso_1.value.length >= 25){
        ErreurCon_1.innerHTML = "Trop long";
        verifInfoPerso_User=false;
    }else{
        ErreurCon_1.innerHTML = "";
    }

    // Prenom verif
    if(infoPerso_6.value.trim()==""){
        ErreurCon_6.innerHTML = "Remplir le champs";
        verifInfoPerso_User=false;
    }else if(regex_lettre.test(infoPerso_6.value)==false){
        ErreurCon_6.innerHTML = "Caractere spéciaux pas pris en compte";
        verifInfoPerso_User=false;
    }else if(infoPerso_6.value.length >= 25){
        ErreurCon_6.innerHTML = "Trop long";
        verifInfoPerso_User=false;
    }else{
        ErreurCon_6.innerHTML = "";
    }

    // telephone verif
    if(infoPerso_2.value.trim()==""){
        ErreurCon_2.innerHTML = "Remplir le champs";
        verifInfoPerso_User=false;
    }else if(regex_chiffre.test(infoPerso_2.value)==false){
        ErreurCon_2.innerHTML = "Lettre pas pris en compte";
        verifInfoPerso_User=false;
    }else if(infoPerso_2.value.length > 10){
        ErreurCon_2.innerHTML = "N'existe pas, trop long";
        verifInfoPerso_User=false;
    }else{
        ErreurCon_2.innerHTML = "";
    }

    // mail verif
    if(infoPerso_3.value.trim()==""){
        ErreurCon_3.innerHTML = "Remplir le champs";
        verifInfoPerso_User=false;
    }else if(regex_mail.test(infoPerso_3.value)==false){
        ErreurCon_3.innerHTML = "Email pas correct";
        verifInfoPerso_User=false;
    }else if(infoPerso_3.value.length >= 40){
        ErreurCon_3.innerHTML = "Trop long";
        verifInfoPerso_User=false;
    }else{
        ErreurCon_3.innerHTML = "";
    }

    // mdp verif
    if(infoPerso_4.value.trim()==""){
        ErreurCon_4.innerHTML = "Remplir le champs";
        ErreurCon_4.setAttribute("style","color:red");
        verifInfoPerso_User=false;
    }else if(!/[a-z]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des minuscules";
        verifInfoPerso_User=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des majuscules";
        verifInfoPerso_User=false;
        ErreurCon_4.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(infoPerso_4.value)){
        ErreurCon_4.innerHTML = "Ajouter des chiffres";
        verifInfoPerso_User=false;
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
        verifInfoPerso_User=false;
    }else if(infoPerso_4.value.trim() != infoPerso_5.value.trim()){
        ErreurCon_5.innerHTML = "Mot de passe différent";
        ErreurCon_5.setAttribute("style","color:red");
        verifInfoPerso_User=false;
    }else if(infoPerso_4.value.trim() == infoPerso_5.value.trim()){
        ErreurCon_5.innerHTML = "Correcte";
        ErreurCon_5.setAttribute("style","color:green");
    }else if(regex_mdp.test(infoPerso_4.value) != regex_mdp.test(infoPerso_5.value)){
        ErreurCon_5.innerHTML = "Mot de passe pas sécurisé";
        ErreurCon_5.setAttribute("style","color:red");
        verifInfoPerso_User=false;
    }else if(/[1-9]/.test(infoPerso_4.value) && regex_mdp.test(infoPerso_4.value)==false != /[1-9]/.test(infoPerso_5.value) && regex_mdp.test(infoPerso_5.value)==false){
        ErreurCon_5.innerHTML = "Mot de passe pas sécurisé";
        ErreurCon_5.setAttribute("style","color:red");
        verifInfoPerso_User=false;
    }else{
        ErreurCon_5.innerHTML = "";
    }


    // verif event
    if(verifInfoPerso_User == false){
        event.preventDefault();
    }

}