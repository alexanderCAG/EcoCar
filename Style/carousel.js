

$(document).ready(function(){
    boucle();
});

jQuery(document).ready(function(){

    $('.bestSeller_tot').hide();
    $('.promo_tot2').hide();
});

// Carousel Presentation

function ViewPromo1(){
    $('.bestSeller_tot').hide();
    $('.promo_tot2').hide();
    $('.promo_tot1').show();
}

function ViewbestSeller(){   
    $('.promo_tot1').hide();
    $('.promo_tot2').hide();
    $('.bestSeller_tot').show(); 
}

function ViewPromo2(){
    $('.bestSeller_tot').hide();
    $('.promo_tot1').hide();
    $('.promo_tot2').show();
}

function boucle(){
    setTimeout(function(){
        setTimeout(function(){$('#bestSeller_tot').hide();$('#promo_tot2').hide();$('#promo_tot1').show();}, 2000);
        setTimeout(function(){$('#promo_tot1').hide();$('#promo_tot2').hide();$('#bestSeller_tot').show();}, 2000);
        setTimeout(function(){$('#promo_tot1').hide();$('#bestSeller_tot').hide();$('#promo_tot2').show();}, 2000);
    }, 2000);
        
}