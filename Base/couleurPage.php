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

    // recup promo
    $totalPromotion = mysqli_query($con, "SELECT count(promotion) as total_promo FROM `voiture` WHERE `dispo` = 1 AND `promotion` > 0");

    // affichage Nom categorie
    $colItem=$_GET['colItem'];
    $_SESSION['colItem']=$colItem;

    // affiche general voiture
    // $afficheTotal = mysqli_query($con, "SELECT * FROM `voiture` WHERE `dispo` = 1 and `couleur` = '$colItem'");

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
            <a class="color_white nav-link" aria-current="page" href="presentation.php">Presentation</a>
            </li>
            <li class="nav-item dropdown">
            <a class="color_white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
            </a>
            <ul class="dropdown-menu bg_black" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item color_white" href="categoriePage.php?catItem=Hybride">Hybride</a></li>
                <li><a class="dropdown-item color_white" href="categoriePage.php?catItem=Electrique">Electrique</a></li>
                <li><a class="dropdown-item color_white" href="promoPage.php">Promotion</a></li>
                <li><a class="dropdown-item color_white" href="categorie.php">Tout</a></li>
            </ul>
            </li>
            <!-- <li class="nav-item">
            <a class="color_white nav-link" aria-current="page" href="promotion.php">Promotion</a>
            </li> -->
            <li class="nav-item">
            <a class="color_white nav-link" aria-current="page" href="#avis_redirection">Avis</a>
            </li>
            <li class="nav-item">
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
            <h1 class="text-uppercase centre_titre_haut">Nos catégories</h1>
            <div class="doit_titre_haut bg_green1"></div>
        </div>
        <p class="para_categorie">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quos, nobis et vero sapiente ipsam incidunt cumque beatae doloremque sit voluptates mollitia cupiditate modi facilis repudiandae exercitationem culpa possimus magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iure voluptatibus sed ducimus voluptates eligendi odio architecto molestias, suscipit numquam veniam delectus nemo commodi dicta consequatur dignissimos beatae quam ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eum adipisci vitae quaerat alias, itaque aut error fugiat nisi voluptate et nesciunt enim quo, suscipit reprehenderit accusamus odit labore dignissimos?
        </p>
     </div>
</div>

<div class="total_categorie_user">

    <!-- Sidebar -->
    <nav class="sidebar_user shadow ">

        <div style="margin-left: 20px; margin-top: 25px">
            <h4 class="text-uppercase titre2" style="font-weight: bold;letter-spacing: 2px;">Filtrer par</h4>
            <hr style="background-color: black; height: 2px; width: 175px">

            <!-- Partie 1 -->
            <h5 onclick="cate_side1()" class="float-start categorie1_sideTot" style="cursor: pointer;">Catégories</h5>
            <?php 
                if($totalCat = mysqli_fetch_assoc($totalCategorie)){
                    $totalCategorie= $totalCat['total_categorie'];
            ?> 
            <span class="float-end" style="margin-right: 30px;"><?php echo $totalCategorie?></span>
            
            <div class="categorie1_side">
                <ul class="list-unstyled" style="margin-left: 25px">
                    <a class="text-decoration-none text-dark" href="categorie.php"><li class="liste_categorie1">Tout<i class="bi bi-arrow-right float-end color_white" style="margin-right:20px"></i></li></a>
                    <?php 
                        for($i=0; $i< $totalCategorie; $i++) {
                            if($rowCat = mysqli_fetch_assoc($listeCategorie)){
                                $categorie= $rowCat['liste_categorie']; 
                    ?>
                        <a class="text-decoration-none" href="categoriePage.php?catItem=<?= $categorie ?>" type="button" style="color: #616161;"><li class="liste_categorie1"><?php echo $categorie?><i class="bi bi-arrow-right float-end color_white" style="margin-right:20px"></i></li></a><br>
                    <?php 
                        }
                    }
                    ?> 
                </ul>
            </div>
            <?php 
                }
            ?> 

            <!-- Partie 2 -->
            <br><br>
            <h5 onclick="cate_side2()" class="float-start categorie2_sideTot" style="cursor: pointer;">Marques</h5>
            <?php 
                if($totalMq = mysqli_fetch_assoc($totalMarque)){
                    $totalMarque= $totalMq['total_marque'];
            ?>
            <span class="float-end" style="margin-right: 30px;"><?php echo $totalMarque?></span>

            <div class="categorie2_side">
                <ul class="list-unstyled" style="margin-left: 25px">
                    <a class="text-decoration-none text-dark"href="categorie.php"><li class="liste_categorie2">Tout<i class="bi bi-arrow-right float-end color_white" style="margin-right:20px"></i></li></a>
                    <?php 
                        for($i=0; $i< $totalMarque; $i++) {
                            if($rowMq = mysqli_fetch_assoc($listeMarque)){
                                $marque= $rowMq['liste_marque']; 
                    ?>
                    <a class="text-decoration-none" href="marquePage.php?mqItem=<?= $marque ?>" type="button" style="color: #616161;"><li class="liste_categorie2"><?php echo $marque?><i class="bi bi-arrow-right float-end color_white" style="margin-right:20px"></i></li></a><br>
                    <?php 
                        }
                    }
                    ?> 
                </ul>
            </div>
            <?php 
                }
            ?> 

            <!-- Partie 3 -->
            <br><br>
            <h5 onclick="cate_side3()" class="float-start categorie3_sideTot" style="cursor: pointer;">Couleurs</h5>
            <?php 
                if($totalCol = mysqli_fetch_assoc($totalCouleur)){
                    $totalCouleur= $totalCol['total_couleur'];
            ?>
            <span class="float-end" style="margin-right: 30px;"><?php echo $totalCouleur?></span>

            <div class="categorie3_side">
                <div class="row" style="margin-left: 25px;width: 170px;">
                    <a href="categorie.php" class="col-4 liste_categorie3 border-0" style="background-image:url('../Image/multicolor.png');background-size:cover"></a>
                    <?php 
                        for($i=0; $i< $totalCouleur; $i++) {
                            if($rowCol = mysqli_fetch_assoc($listeCouleur)){
                                $couleur= $rowCol['liste_couleur']; 
                    ?>
                    <a href="couleurPage.php?colItem=<?= $couleur ?>" type="button" class="col-4 liste_categorie3" style="background-color: #<?php echo $couleur?>;<?php if($couleur == $colItem){echo "border:5px double white;height:33px!important;";}?>"></a>
                    <?php 
                        }
                    }
                    ?>
                </div>
            </div>
            <?php 
                }
            ?>

            <!-- Partie 4 -->
            <br><br>
            <h5 class="float-start categorie3_sideTot" style="cursor: pointer; margin-top:40px;"><a class="text-decoration-none color_black" href="promoPage.php">Promotion</a></h5>
            <?php 
                if($totalPromo = mysqli_fetch_assoc($totalPromotion)){
                    $totalPromotion= $totalPromo['total_promo'];
            ?>
            <span class="float-end" style="margin-right: 30px; margin-top:40px;"><?php echo $totalPromotion?></span>
            <?php 
                }
            ?>

        </div>
        

    </nav>

    <div class="contenue_user bg_gray3">

        <!-- Contenue -->
        <section style="margin-top: 50px">
            <!-- 3 lignes max -->
            <div class="row px-5" style="margin-left: 15px">
            <?php
                if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                $page_no = $_GET['page_no'];
                } else {
                    $page_no = 1;
                    }

                $total_records_per_page = 6;
                $offset = ($page_no-1) * $total_records_per_page;
                $previous_page = $page_no - 1;
                $next_page = $page_no + 1;
                $adjacents = "2"; 

                $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `voiture`");
                $total_records = mysqli_fetch_array($result_count);
                $total_records = $total_records['total_records'];
                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                $second_last = $total_no_of_pages - 1; // total page minus 1

                $result = mysqli_query($con,"SELECT * FROM `voiture` WHERE `dispo` = 1 and `couleur` = '$colItem' LIMIT $offset, $total_records_per_page ");
                while($afficheTot = mysqli_fetch_array($result)){
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
            ?>
            </div>
        </section>

        <!-- Pagination -->
        <?php 
            if($_SESSION['catItem']!=NULL){
                $info_cat = $_SESSION['catItem'];
                $info_mq = $_SESSION['mqItem'];
                $info_col = $_SESSION['colItem'];
            }
            else if($_SESSION['mqItem']!=NULL){
                    $info_cat = $_SESSION['catItem'];
                    $info_mq = $_SESSION['mqItem'];
                    $info_col = $_SESSION['colItem'];
            }
            else if($_SESSION['colItem']!=NULL){
                    $info_cat = $_SESSION['catItem'];
                    $info_mq = $_SESSION['mqItem'];
                    $info_col = $_SESSION['colItem'];
            }else{
                    $info_cat = 0;
                    $info_mq = 0;
                    $info_col = 0;
            }
        ?>
        <section style="margin-top:100px; margin-bottom:118px;">
            <nav aria-label="Page navigation example">                
                <ul class="pagination justify-content-center">
                    <?php
                        if($page_no > 1){ echo "<li class='page-item'><a class='page-link' href='?page_no=1&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>&#139;&#139; First Page</a></li>"; } 
                    ?>  
                    
                    <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled page-item'"; } ?>>
                        <a class="page-link" <?php if($page_no > 1){ echo "href='?page_no=$previous_page&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'"; } ?>>Previous</a>
                    </li>

                    <?php require('pagination.php');?>
                    
                    <li class='page-item' <?php if($page_no >= $total_no_of_pages){ echo "class='disabled page-item'"; } ?>>
                        <a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'"; } ?>>Next</a>
                    </li>
                    <?php if($page_no < $total_no_of_pages){
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>Last &rsaquo;&rsaquo;</a></li>";
                    } ?>
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