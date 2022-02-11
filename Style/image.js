
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
            
            // infoPerso_Admin
            read.onload = function (e) {
                $("#infoPerso_image").attr('src', e.target.result);
            }
            
            // Ajout Voiture
            read.onload = function (e) {
                $("#ajoutVoiture_image").attr('src', e.target.result);
            }
            
            read.readAsDataURL(mon_img.files[0]);
        }
    }
    
    // infoPerso_Admin
    $("#file_interrieur_imgAdmin").change(function(){
        readURL(this);
    });

    // Ajout Voiture
    $("#file_interrieur_imgAdminAjout").change(function(){
        readURL(this);
    });


}