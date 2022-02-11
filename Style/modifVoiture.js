
jQuery(document).ready(function(){

    $("#btn_Browse2").hide();
    $("#submit_valider_ajoutVoiture").hide();

    document.getElementById('ajoutVoiture1').disabled=true;
    document.getElementById('ajoutVoiture2').disabled=true;
    document.getElementById('ajoutVoiture3').disabled=true;
    document.getElementById('ajoutVoiture4').disabled=true;
    document.getElementById('ajoutVoiture5').disabled=true;

});


// COLOR PICKER

$("input.color").each(function() {
    var that = this;
    $(this).parent().prepend($("<i class='fa fa-paint-brush color-icon'></i>").click(function() {
        that.type = (that.type == "color") ? "text" : "color";
}));
}).change(function() {
    $(this).attr("data-value", this.value);
    this.type = "text";
});


// Ajout Voiture

function modif_Voiture(){
    $("#submit_valider_ajoutVoiture").show();
    $("#btn_Browse2").show();

    document.getElementById('ajoutVoiture1').disabled=false;
    document.getElementById('ajoutVoiture2').disabled=false;
    document.getElementById('ajoutVoiture3').disabled=false;
    document.getElementById('ajoutVoiture4').disabled=false;
    document.getElementById('ajoutVoiture5').disabled=false;


}

function annulModif_Voiture(){
    $("#submit_valider_ajoutVoiture").hide();
    $("#btn_Browse2").hide();
    
    document.getElementById('ajoutVoiture1').disabled=true;
    document.getElementById('ajoutVoiture2').disabled=true;
    document.getElementById('ajoutVoiture3').disabled=true;
    document.getElementById('ajoutVoiture4').disabled=true;
    document.getElementById('ajoutVoiture5').disabled=true;

}

function reset_Voiture(){
    $(".ajoutVoiture_input").val("");

    document.getElementById('ErreurAjout1').innerHTML="";
    document.getElementById('ErreurAjout2').innerHTML="";
    document.getElementById('ErreurAjout3').innerHTML="";
    document.getElementById('ErreurAjout4').innerHTML="";
    document.getElementById('ErreurAjout5').innerHTML="";

}