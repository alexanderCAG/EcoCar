<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <nav class="sidebar shadow" id="sidebar">
        <p class="date_admin_accueil text-uppercase">
            <?php
                setlocale(LC_ALL, 'fr_FR', 'fra_FRA');
                echo strftime('%A %d %B');
            ?>
        </p>
        <a href="" class="color_white text-decoration-none titre_sidebar bg_gray1"><p class="titre_sidebar2 text-uppercase">tableau de bord</p></a>
        <ul class="text-uppercase list-unstyled liste_titre_sidebar">
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Produits</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Marques</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Devis</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Clients</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Paramètre</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Mon compte</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Deconnexion</li></a>
        </ul>
    </nav>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <section>
            <div class="div_accueil_color bg_green1">
                <div class="row">
                    <div class="col-8"></div>
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
            </div>
        </section>
        
        <!-- Partie Centrale contenu -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- Gauche -->
                    <div class="col-9 div_gauche_admin">
                        
                        <!-- Partie 1 -->
                        <div class="contenu_gauche1_admin shadow bg_white mx-2">
                            <div class="row">
                                <div class="col-3">
                                    <img src="../Image/voiture_test.jpg" alt="last vehicule" class="img_last_save">
                                </div>
                                <div class="col-9">
                                    <div class="gauche1_admin_texteUp text-uppercase titre">
                                        <h4>Dernier devis enregistré</h4>
                                        <h6>Nom Prenom</h6>
                                        <p class="prix_last_save"><span>500,50</span>€/Mois</p>
                                    </div>
                                    <p class="texte_last_save">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate impedit iure ad cumque iusto reiciendis explicabo expedita harum praesentium nihil necessitatibus enim placeat neque debitis, tenetur nisi aliquam eaque! Soluta?</p>
                                    <div class="info_last_save text-uppercase">
                                        <i class="bi bi-shield-fill-check fa-2x color_green1"></i>
                                        <small><span>Garantie 24 mois | 2021 | 14 137 km</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Partie 2 -->
                        <div class="mt-4 contenu_gauche2_admin shadow bg_white container mx-2">
                            <h4 class="text-uppercase mx-4 pt-4 t_bold titre">Total de location des véhicules</h4>
                            <div class="row align-items-center mt-5">
                                <div class="col-9">
                                    <p class="mx-4">Contrat de location signés</p>
                                </div>
                                <div class="col-3">
                                    <div class="row legende_admin">
                                        <div class="col-6">
                                            <span class="titre2 legende_graphe">Hybride</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="legende_graphe_color"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row legende_admin mt-3">
                                        <div class="col-6">
                                            <span class="titre2 legende_graphe">Electrique</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="legende_graphe_color2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Droit -->
                    <div class="col-3">

                        <!-- Partie 1 -->
                        <div class="contenu_droit1_admin shadow bg_white">
                            <div class="row">
                                <div class="col-11">
                                    <h4 class="text-uppercase titre_droit1_admin titre">Messages/Avis</h4>
                                </div>
                                <div class="col-1">
                                    <a href="" class="color_black"><i class="bi bi-three-dots fa-2x icone_droit1_admin"></i></a>
                                </div>
                            </div>                            
                            <div class="row liste_droit1_admin mx-2">
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="date_droit1_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="date_droit1_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="date_droit1_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="date_droit1_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


</div>

<!-- Footer -->
<?php require('footer.php'); ?>