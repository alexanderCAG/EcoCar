
$(window).scroll(function(){
  
    // Affiche Marque
    var trait_vert = document.getElementById("image_fond_marque1");
    if($(this).scrollTop() > 1330){
        var i = 0;
        for(i=0;i<30;i++){
            let nbr1 = 40 + i;
            let nbr2 = 35 + i;
            let nbr3 = 30 + i;
            trait_vert.style.clipPath = "polygon(0 60%, 0% 100%, 0 70%, 0 70%, 100% "+nbr1+"%, 100% 100%, 0 100%, 0 65%, 100% "+nbr2+"%, 100% "+nbr3+"%)";
            trait_vert.style.transition = "clip-path 1s ease 0s";
        }
    }else{
        trait_vert.style.clipPath = "polygon(0 60%, 0% 100%, 0 70%, 0 70%, 100% 40%, 100% 100%, 0 100%, 0 65%, 100% 35%, 100% 30%)";
    }

});

// Affiche marque btn

var marque_affiche = document.getElementById("rot_icone");
var icone_marque = $(".icone_affiche_marque");
var compteur_rot_icone = 0;
marque_affiche.addEventListener("click", rotation_icone);

function rotation_icone(){

    if(compteur_rot_icone%2 == 0){
        icone_marque.removeClass("bi-arrow-down-circle-fill");
        icone_marque.addClass("bi-arrow-up-circle-fill");
        compteur_rot_icone++;
    }else{
        icone_marque.removeClass("bi-arrow-up-circle-fill");
        icone_marque.addClass("bi-arrow-down-circle-fill");
        compteur_rot_icone++;
    }
}

// Carousel Avis
// $(document).ready(function(){
//     $(".wish-icon i").click(function(){
//         $(this).toggleClass("fa-heart fa-heart-o");
//     });
// });





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