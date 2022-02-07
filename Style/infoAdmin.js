
/********************************
        CHOISIT-IMAGE-PERSO
*********************************/
function choix_image_vendeur(){

    $(document).on('change', '.btn_choix_img_admin :file', function() {
        let maVariable = $(this),
            nvx_texte = maVariable.val().replace(/\\/g, '/').replace(/.*\//, '');
            maVariable.trigger('fileselect', [nvx_texte]);
    });

    $('.btn_choix_img_admin :file').on('fileselect', function(event, nvx_texte) {
        
        let nom_img = $(this).parents(".img_div_change").find(':text'),
        // let nom_img = $("#file_interrieur_inscription_img"),
        // let nom_img = $(".form-control"),
            mon_texte = nvx_texte;
        
        if( nom_img.length ) {
            nom_img.val(mon_texte);
        } else {
            if( mon_texte ) alert(mon_texte);
        }
    
    });

    function readURL(mon_img) {
        if (mon_img.files && mon_img.files[0]) {
            let read = new FileReader();
            
            read.onload = function (e) {
                $("#infoPerso_image").attr('src', e.target.result);
            }
            
            read.readAsDataURL(mon_img.files[0]);
        }
    }
    
    $("#file_interrieur_imgAdmin").change(function(){
        readURL(this);
    });

}


jQuery(document).ready(function(){

    document.getElementById('infoPerso_1').disabled=true;
    document.getElementById('infoPerso_2').disabled=true;
    document.getElementById('infoPerso_3').disabled=true;
    document.getElementById('infoPerso_4').disabled=true;
    document.getElementById('infoPerso_5').disabled=true;
    

    $("#btn_Browse").hide();
    $("#submit_valider_infoPerso").hide();
});


var modif = document.getElementById("btn_modif_infoPerso");
modif.addEventListener("click", modif_infoPerso);
function modif_infoPerso(){
    document.getElementById('infoPerso_1').disabled=false;
    document.getElementById('infoPerso_2').disabled=false;
    document.getElementById('infoPerso_3').disabled=false;
    document.getElementById('infoPerso_4').disabled=false;
    document.getElementById('infoPerso_5').disabled=false;

    $("#submit_valider_infoPerso").show();
    $("#btn_Browse").show();
}


var Annulmodif = document.getElementById("btn_Annulmodif_infoPerso");
Annulmodif.addEventListener("click", annulModif_infoPerso);
function annulModif_infoPerso(){
    document.getElementById('infoPerso_1').disabled=true;
    document.getElementById('infoPerso_2').disabled=true;
    document.getElementById('infoPerso_3').disabled=true;
    document.getElementById('infoPerso_4').disabled=true;
    document.getElementById('infoPerso_5').disabled=true;

    $("#submit_valider_infoPerso").hide();
    $("#btn_Browse").hide();
}


var reset = document.getElementById("btn_reset_infoPerso");
reset.addEventListener("click", reset_infoPerso);
function reset_infoPerso(){
    $(".infoPerso_input").val("");

    document.getElementById('infoPerso_1').innerHTML="";
    document.getElementById('infoPerso_2').innerHTML="";
    document.getElementById('infoPerso_3').innerHTML="";
    document.getElementById('infoPerso_4').innerHTML="";
    document.getElementById('infoPerso_5').innerHTML="";

}
