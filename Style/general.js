
$(window).scroll(function(){
  
    var trait_vert = document.getElementById("image_fond_accueil");
    if($(this).scrollTop() > 1330){
        // alert('ok');
        let i = 0;
        for(i=0;i<30;i++){
            let nbr1 = 40 + i;
            let nbr2 = 35 + i;
            let nbr3 = 30 + i;
            trait_vert.style.clipPath = "inset(0 60%, 0% 100%, 0 70%, 0 70%, 100% "+nbr1+"%, 100% 100%, 0 100%, 0 65%, 100% "+nbr2+"%, 100% "+nbr3+"%)" 
        }
    }

});