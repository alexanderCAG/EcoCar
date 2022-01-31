

$(document).ready(function(){
    // boucle();
    // document.getElementById('check_inscri').checked=true;

});

jQuery(document).ready(function(){

    $('.bestSeller_tot').hide();
    // $("#check_inscri").prop("checked", true);
});

// Carousel Presentation

// var presentation_promotion = document.getElementById("promo_tot");
// var presentation_bestSeller = document.getElementById("bestSeller_tot");

// var btn_presentation_promotion = document.getElementById("btn_promo1");
// var btn_presentation_bestSeller = document.getElementById("btn_bestSeller");

// btn_presentation_promotion.addEventListener("click", ViewPromo);
// btn_presentation_bestSeller.addEventListener("click", ViewbestSeller);

function ViewPromo(){
    // alert('prom');
    // presentation_promotion.removeClass("d-none");
    // presentation_bestSeller.addClass("d-none");
    // $('.promo_tot').removeClass('d-none');
    // $('.bestSeller_tot').addClass('d-none');
    $('.bestSeller_tot').hide();
    $('.promo_tot').show();
}

function ViewbestSeller(){
    // alert('BestSeller');
    // presentation_bestSeller.removeClass("d-none");
    // presentation_promotion.addClass("d-none");
    // $('.bestSeller_tot').removeClass('d-none');
    // $('.promo_tot').addClass('d-none');
    
    $('.promo_tot').hide();
    $('.bestSeller_tot').show(); 
}

function boucle(){
    let compteur_boucle = 0;
    do{
        setTimeout(function(){
            setTimeout(function(){$('#bestSeller_tot').hide();$('#promo_tot').show();}, 2000);
            setTimeout(function(){$('#promo_tot').hide();$('#bestSeller_tot').show();}, 2000);
            compteur_boucle++;
        }, 2000);
        
    }while(compteur_boucle==10);
}