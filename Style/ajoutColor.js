

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


var compteurBody = 0;
function changementBody(){
    if(compteurBody%2==0){
        $('.div_accueil_color').addClass('changCol');
        $('.div_accueil_color').removeClass('bg_green1');
        compteurBody++;
    }else{
        $('.div_accueil_color').removeClass('changCol');
        $('.div_accueil_color').addClass('bg_green1');
        compteurBody++;
    }
}
