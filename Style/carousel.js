

$(document).ready(function(){
    // boucle();
    // document.getElementById('check_inscri').checked=true;

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

// function boucle(){
//     let compteur_boucle = 0;
//     do{
//         setTimeout(function(){
//             setTimeout(function(){$('#bestSeller_tot').hide();$('#promo_tot').show();}, 2000);
//             setTimeout(function(){$('#promo_tot').hide();$('#bestSeller_tot').show();}, 2000);
//             compteur_boucle++;
//         }, 2000);
        
//     }while(compteur_boucle==10);
// }