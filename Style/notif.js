jQuery(document).ready(function(){

    $('.notif_like').hide();

});

function notification(){
    setTimeout(function(){$('.notif_like').show();}, 0);
    setTimeout(function(){$('.notif_like').hide();}, 2000);
}