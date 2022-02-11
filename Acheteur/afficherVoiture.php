<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Détails Voiture'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <div class="container" style="margin-bottom: 415px">
            <div class="ajoutVoiture_tot" style="margin-top: 70px;">
                <div class="row">
                    <div class="col-6" style="margin-left:140px; margin-top:30px;width:50%">

                        <input class="border_ligne afficherVoiture_input" id="affiche1_voiture1" type="text" name="" placeholder="Marque">
                        <input class="border_ligne afficherVoiture_input" id="affiche1_voiture2" type="text" name="" id="" placeholder="Catégorie">
                        <br><br>
                        
                        <input class="border_ligne afficherVoiture_input" id="affiche1_voiture3" type="text" name="" placeholder="Modèle">
                        <input class="border_ligne afficherVoiture_input" id="affiche1_voiture4" type="text" name="" placeholder="Référence">
                        <br><br>

                        <input class="form-control-file afficherVoiture_input" id="affiche1_voiture5" name="background_seller" placeholder="Color" data-value="#xxxxxx" value=""/>

                    </div>
                    <div class="col-6" style="width:30%">
                        <img id="ajoutVoiture_image" class="ajoutVoiture_image" src="../Image/voiture_test.jpg" alt="user_img">
                    </div>
                    <hr style="margin-top: 50px">
                </div>
            </div>
        </div>       
        
        

<!-- Footer -->
<?php require('footer.php'); ?>