
jQuery(document).ready(function(){

    // document.getElementById('infoPerso_1').disabled=true;
    document.getElementById('infoPerso_2').disabled=true;
    document.getElementById('infoPerso_3').disabled=true;
    document.getElementById('infoPerso_4').disabled=true;
    document.getElementById('infoPerso_5').disabled=true;

    // $("#btn_Browse").hide();
    $("#submit_valider_infoPerso").hide();

});


function modif_infoPerso(){
    // document.getElementById('infoPerso_1').disabled=false;
    document.getElementById('infoPerso_2').disabled=false;
    document.getElementById('infoPerso_3').disabled=false;
    document.getElementById('infoPerso_4').disabled=false;
    document.getElementById('infoPerso_5').disabled=false;

    $("#submit_valider_infoPerso").show();
    // $("#btn_Browse").show();
}

function annulModif_infoPerso(){
    // document.getElementById('infoPerso_1').disabled=true;
    document.getElementById('infoPerso_2').disabled=true;
    document.getElementById('infoPerso_3').disabled=true;
    document.getElementById('infoPerso_4').disabled=true;
    document.getElementById('infoPerso_5').disabled=true;

    $("#submit_valider_infoPerso").hide();
    // $("#btn_Browse").hide();
}

function reset_infoPerso(){
    // $(".infoPerso_input").val("");

    document.getElementById('infoPerso_2').innerHTML="";
    document.getElementById('infoPerso_3').innerHTML="";
    document.getElementById('infoPerso_4').innerHTML="";
    document.getElementById('infoPerso_5').innerHTML="";
    document.getElementById('ErreurCon_1').innerHTML="";
    document.getElementById('ErreurCon_2').innerHTML="";
    document.getElementById('ErreurCon_3').innerHTML="";
    document.getElementById('ErreurCon_4').innerHTML="";
    document.getElementById('ErreurCon_5').innerHTML="";
    // document.getElementById('imageErreur_infoPerso').innerHTML="";

}