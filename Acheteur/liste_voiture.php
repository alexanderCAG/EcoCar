<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <section>
            <div class="div_accueil_color bg_green1">
                
                <div class="row">
                    <div class="col-8">
                        <a href="#" class="sidebar-toggle" id="sidebar_retract">
                            <i class="bi bi-arrow-left-circle-fill fa-2x color_white icone_retract_sidebar float-start" style="margin-right: 400px;"></i>
                        </a>
                        <h4 class="text-uppercase mx-4 pt-4 t_bold titre color_white" style="margin-top: 5px;">Total de location des véhicules</h4>
                    </div>
                    <div class="col-4">
                        <a href="">
                            <div class="bg_gray2 div_ajout_admin2">
                                <small><p>Ajouter un véhicule</p></small>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg_gray2 div_notif_admin2">
                                <i class="fas fa-user-friends icone_notif2"></i>
                                <span>50</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="div_info_glob_liste bg_white">
                    <div class="row text-uppercase text-center px-5">
                        <div class="col-1">Catégorie</div>
                        <div class="col-2">Marque</div>
                        <div class="col-1">Référence</div>
                        <div class="col-2">Modèle</div>
                        <div class="col-1">Location</div>
                        <div class="col-2">Promotion</div>
                        <div class="col-1">Statut</div>
                        <div class="col-2">
                            <i class="bi bi-three-dots fa-2x float-end"></i>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="mt-5"></div>
        
        <!-- Partie Centrale contenu -->
        <section>

        </section>
        

<!-- Footer -->
<?php require('footer.php'); ?>