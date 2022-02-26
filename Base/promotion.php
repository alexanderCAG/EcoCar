<!-- Header -->
<?php require('header.php');

    // recup categorie
    $listeCategorie = mysqli_query($con, "SELECT DISTINCT(categorie) as liste_categorie FROM `voiture`");
    $totalCategorie = mysqli_query($con, "SELECT count(DISTINCT(categorie)) as total_categorie FROM `voiture`");
    // recup marque
    $listeMarque = mysqli_query($con, "SELECT DISTINCT(marque) as liste_marque FROM `marque`");
    $totalMarque = mysqli_query($con, "SELECT count(DISTINCT(marque)) as total_marque FROM `marque`");
    // recup couleur
    $listeCouleur = mysqli_query($con, "SELECT DISTINCT(couleur) as liste_couleur FROM `voiture`");
    $totalCouleur = mysqli_query($con, "SELECT count(DISTINCT(couleur)) as total_couleur FROM `voiture`");

    // affiche general voiture
    $afficheTotal = mysqli_query($con, "SELECT * FROM `voiture` WHERE `dispo` = 1 AND `promotion` > 7");

?>
<!-- Navbar -->
<nav class="bg_black navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <img src="../Image/logo.png" alt="logo" class="img_logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav_ul" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="color_white nav-link" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="color_white nav-link" aria-current="page" href="#">Presentation</a>
            </li>
            <li class="nav-item dropdown">
            <a class="color_white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
            </a>
            <ul class="dropdown-menu bg_black" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item color_white" href="categoriePage.php?catItem=Hybride">Hybride</a></li>
                <li><a class="dropdown-item color_white" href="categoriePage.php?catItem=Electrique">Electrique</a></li>
                <li><a class="dropdown-item color_white" href="promotion.php">Promotion</a></li>
                <li><a class="dropdown-item color_white" href="categorie.php">Tout</a></li>
            </ul>
            </li>
            <!-- <li class="nav-item">
            <a class="color_white nav-link" aria-current="page" href="promotion.php">Promotion</a>
            </li> -->
            <li class="nav-item">
            <a class="color_white nav-link" aria-current="page" href="#avis_redirection">Avis</a>
            </li>
            <li class="nav-item" >
                <a href="connexion.php"><i class="color_white bi bi-person-fill h2" id="icone_con"></i></a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="haut_categorie bg_green3">
     <div class="titre_haut_categorie bg_white shadow">
        <div class="titre_haut_tot">
            <div class="gauche_titre_haut bg_green1"></div>
            <h1 class="text-uppercase centre_titre_haut">Nos Promotions</h1>
            <div class="doit_titre_haut bg_green1"></div>
        </div>
        <p class="para_categorie">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quos, nobis et vero sapiente ipsam incidunt cumque beatae doloremque sit voluptates mollitia cupiditate modi facilis repudiandae exercitationem culpa possimus magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iure voluptatibus sed ducimus voluptates eligendi odio architecto molestias, suscipit numquam veniam delectus nemo commodi dicta consequatur dignissimos beatae quam ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eum adipisci vitae quaerat alias, itaque aut error fugiat nisi voluptate et nesciunt enim quo, suscipit reprehenderit accusamus odit labore dignissimos?
        </p>
     </div>
</div>

<div class="total_categorie_user">

    <!-- Sidebar -->
  

    <div class="contenue_user bg_gray3">

        <!-- Contenue -->
        <section style="margin-top: 50px">
            <!-- 3 lignes max -->
            <div class="row px-5" style="margin-left: 15px">
            <?php
                for($i=0;$i<6;$i++){
                    if($afficheTot = mysqli_fetch_assoc($afficheTotal)){
                        $modeleTot= $afficheTot['modele'];              
                        $imageTot= $afficheTot['image'];          
                        $idTot= $afficheTot['id'];          
            ?>
                <div class="col-6 mb-4">
                    <div class="div_contenu_detail shadow">
                        <div class="img_cate_voiture" style='background-image: url("<?php echo $imageTot ?>");'>
                            <p class="titre_voiture"><?php echo $modeleTot ?></p>
                        </div>
                        <div class="contenu_cate_detailHover">
                            <a href="detail_voiture.php?idVoiture=<?php echo $idTot ?>" class="text-decoration-none">
                                <p class="text-uppercase color_white textHover_cate">Voir la fiche</p>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
            </div>
        </section>

        <!-- Pagination -->
        <section style="margin-top:100px; margin-bottom:118px;">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>

        <!-- Footer -->
        <footer class="pt-4 bg_black">
            <div class="container mb-5 px-4">
                <div class="row">

                    <div class="col-7">
                    <img src="../Image/logo.png" class="img-fluid img-responsive w-25"/>
                    <div class="row mt-3">
                            <div class="col-5">
                                <ul class="text-light text-uppercase list-unstyled">
                                    <li class="my-2"><small><a class="color_white nav_footer" href="index.php">Accueil</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Présentation</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="promotion.php">Promotion</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Voiture hybride</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Voiture électrique</a></small></li>
                                </ul> 
                            </div> 
                            <div class="col-6"> 
                                <ul class="text-light text-upp ercase list-unstyled">
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Mentions Légales</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Politique en matière de cookie</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Politique de confidentialité</a></small></li>
                                    <li class="my-2"><small><a class="color_white nav_footer" href="">Condition d'utilisation</a></small></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-1 droite_footer"></div>

                    <div class="col-4 border-0 pl-5" id="avis_redirection">
                        <h2 class="titre_footer text-center">Commentaire</h2>
                        <small><p class="text-center text-light"><i>Laissez-nous un commentaire</i> </p></small>
                        <form class="pl-5">
                            <div class="row ll-5" >
                                <div class="col-6">
                                    <input type="pseudo" placeholder="Pseudonyme" class="form-control" id="exampleInputPseudo" aria-describedby="pseudoHelp">
                                </div>
                                <div class="col-6">
                                    <input type="note" placeholder="Note sur 5" class="form-control" id="exampleInputNote" aria-describedby="noteHelp">
                                </div>
                            </div>
                            <textarea class="form-control mt-3" placeholder="Commentaire..." id="exampleFormControlTextarea1" rows="5"></textarea>
                            <a href="connexion.php" class="btn_vert10 float_right mt-3 border-0"> Envoyer</a>
                        </form>
                    </div>

                </div>
            </div>

            <div class="container-fluid bg_green1">
                <div class="row">
                    <div class="col">
                        <p class="text-center text-white my-auto">&copy; Site internet Marine Alexander</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- Carousel Avis -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<!-- JS -->
<script src="../Style/affiche_marque.js"></script>
<script src="../Style/carousel.js"></script>
<script src="../Style/categorie.js"></script>



</body>

</html>