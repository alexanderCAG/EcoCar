
jQuery(document).ready(function(){

    // $("#btn_Browse3").hide();
    // $("#submit_valider_modifVoiture").hide();

    // document.getElementById('modifVoiture1').disabled=true;
    // document.getElementById('modifVoiture2').disabled=true;
    // document.getElementById('modifVoiture3').disabled=true;
    // document.getElementById('modifVoiture4').disabled=true;
    // document.getElementById('modifVoiture5').disabled=true;

});


// modif Voiture

function modif_Voiture(){
    $("#submit_valider_modifVoiture").show();
    $("#btn_Browse3").show();

    document.getElementById('modifVoiture1').disabled=false;
    document.getElementById('modifVoiture2').disabled=false;
    document.getElementById('modifVoiture3').disabled=false;
    document.getElementById('modifVoiture4').disabled=false;
    document.getElementById('modifVoiture5').disabled=false;


}

function annulModif_Voiture(){
    $("#submit_valider_modifVoiture").hide();
    $("#btn_Browse3").hide();
    
    document.getElementById('modifVoiture1').disabled=true;
    document.getElementById('modifVoiture2').disabled=true;
    document.getElementById('modifVoiture3').disabled=true;
    document.getElementById('modifVoiture4').disabled=true;
    document.getElementById('modifVoiture5').disabled=true;

}

function reset_Voiture(){
    $(".modifVoiture_input").val("");

    document.getElementById('Erreurmodif1').innerHTML="";
    document.getElementById('Erreurmodif2').innerHTML="";
    document.getElementById('Erreurmodif3').innerHTML="";
    document.getElementById('Erreurmodif4').innerHTML="";
    document.getElementById('Erreurmodif5').innerHTML="";

}