<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Mon compte'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <div class="container">
            <div class="compte_tot" style="margin-top: 70px;">
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <input class="border_ligne infoPerso_input" type="text" placeholder="Nom du site">
                            <br>
                            <small><span class="infoPerso_span" id="ErreurCon_1"></span></small>
                            <br>

                            <input class="border_ligne infoPerso_input" type="text" placeholder="Téléphone">
                            <br>
                            <small><span class="infoPerso_span" id="ErreurCon_2"></span></small>
                            <br>

                            <input class="border_ligne infoPerso_input" type="email" placeholder="Email">
                            <br>
                            <small><span class="infoPerso_span" id="ErreurCon_3"></span></small>
                            <br>

                            <input class="border_ligne infoPerso_input" type="text" placeholder="Mot de passe">
                            <br>
                            <small><span class="infoPerso_span" id="ErreurCon_4"></span></small>
                            <br>

                            <input class="border_ligne infoPerso_input" type="text" placeholder="Vérification mot de passe">
                            <br>
                            <small><span class="infoPerso_span" id="ErreurCon_5"></span></small>
                            <br>

                        </div>
                        <div class="col-6">
                            <img id="infoPerso_image" class="infoPerso_image" src="../Image/voiture_test.jpg" alt="user_img">
                            <hr style="margin-top: 270px">
                            <div class="img_div_change">
                                <span class="file_inscription_img">
                                    <span onclick="choix_image_vendeur()" id="btn_Browse" class="btn btn-default btn_choix_img_admin">
                                        Browse 
                                        <input type="file" name="infoPerso_img" id="file_interrieur_imgAdmin" accept="image/png, image/jpg, image/jpeg">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly value="">
                                <span id="imageErreur_infoPersovendeur"></span>
                                <br>
                            </div>
                    </div>
                    </div>
                </form>
            </div>

            Nom de site --> pas de modif <br>
            Telephone <br>
            Email <br>
            Mdp <br>
            Verif mdp <br>

            image <br>

            Btn : <br>
            - modifier <br>
            - annuler modi <br>
            - supprimer / reset <br>
            - valider <br>
        </div>       
        
        

<!-- Footer -->
<?php require('footer.php'); ?>