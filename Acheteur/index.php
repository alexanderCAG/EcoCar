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
        <a href="" class="color_white text-decoration-none titre_sidebar bg_gray1"><h5 class="titre_sidebar2 text-uppercase">tableau de bord</h5></a>
        <ul class="text-uppercase list-unstyled liste_titre_sidebar">
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Produits</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Marques</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Devis</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Clients</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Paramètre</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Mon compte</li></a>
            <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Deconnexion</li></a>
        </ul>
        <!-- <ul>
            <li class="sidebar_liste_menu"><a href="boulangerie.php" class="nom_menu_sidebar deco_none text-uppercase">Boulangerie</a></li><br>
            <li class="sidebar_liste_menu"><a href="gateau.php" class="nom_menu_sidebar deco_none text-uppercase">Gateaux</a></li><br>
            <li class="sidebar_liste_menu"><a href="entremet.php" class="nom_menu_sidebar deco_none text-uppercase">Entremets</a></li><br>
        </ul> -->
    </nav>

    <!-- Contenue -->
    <div class="contenue">

        <div class="div_accueil_color bg_green1"> </div>

        <!-- Presentation categorie -->
        <div class="container">
                <div class="row presentation_categorie">
                    <div class="col-6">
                        <p class="texte_presentation_categorie text-uppercase">Boulangerie</p>
                        <p class="sous_texte_presentation_categorie">Amusez vous à écrire vos propres recette de Boulangerie</p>
                        <input class="barre_recherche_categorie pt-2 pb-2" type="text" placeholder="Rechercher une recette"><i class="bi bi-search barre_recherche_categorie_icone"></i></input>
                    </div>

                    <div class="col-6">
                        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                            <defs>
                                <clipPath id="shape">
                                    <path id="blob" d="M436,329.5Q377,409,290.5,431Q204,453,122,402Q40,351,39,249.5Q38,148,120.5,96.5Q203,45,302.5,52Q402,59,448.5,154.5Q495,250,436,329.5Z" fill="#d1d8e0"></path>
                                </clipPath>
                            </defs>
                            <image x="0" y="0" width="100%" height="100%" clip-path="url(#shape)" xlink:href="image/boulangerie_fd.png" preserveAspectRatio="none"></image>
                        </svg>
                    </div>
                </div>
            </div>

        </div>

</div>

<!-- Footer -->
<?php require('footer.php'); ?>