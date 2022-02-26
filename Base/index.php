<?php 
    require('header.php');
    require('navbar.php');
    
    $avisAffichage = mysqli_query($con, "SELECT * FROM `avis` WHERE verif_commentaire = 1 ORDER BY id DESC LIMIT 4");
    $promoDernier = mysqli_query($con, "SELECT * FROM `voiture` WHERE promotion != 0 ORDER BY id DESC LIMIT 1");
    $promoAvantDernier = mysqli_query($con, "SELECT * FROM `voiture` WHERE promotion != 0 ORDER BY id DESC LIMIT 1,1");
    $bestSeller = mysqli_query($con, "SELECT * FROM `voiture` WHERE compteur_location = ( SELECT MAX(compteur_location) FROM `voiture`)");
    $demandeImgMarque = mysqli_query($con, "SELECT * FROM marque order by id desc LIMIT 4");
    $demandeImgMarque2 = mysqli_query($con, "SELECT * FROM marque order by id desc LIMIT 4,4");
 ?>

<section class="carousel_accueil">

    <!-- Fond Carousel -->
    <div class="row row_carousel">
        <div class="col-4">

        </div>
        <div class="col-8 bg_green3">

        </div>
    </div>

    <!-- Carousel -->
    <div class="carousel_tot" style="margin-top:-600px">

        <div class="container py-5" >
            <?php 
                if($rowPromoDernier = mysqli_fetch_assoc($promoDernier)){
                    $id = $rowPromoDernier['id'];
                    $id_marque = $rowPromoDernier['id_marque'];
                    $modele = $rowPromoDernier['modele'];
                    $categorie = $rowPromoDernier['categorie'];
                    $promotion = $rowPromoDernier['promotion'];
                    $image = $rowPromoDernier['image'];

                    $promoDernier2 = mysqli_query($con, "SELECT * FROM `model` WHERE id_voiture='$id'");
                    if($rowPromoDernier2 = mysqli_fetch_assoc($promoDernier2)){
                        $autonomie = $rowPromoDernier2['autonomie'];
                        $puissance = $rowPromoDernier2['puissance'];
                        $place = $rowPromoDernier2['place'];

                        $promoDernier3 = mysqli_query($con, "SELECT * FROM `marque` WHERE id='$id_marque'");
                        if($rowPromoDernier3 = mysqli_fetch_assoc($promoDernier3)){
                            $marque = $rowPromoDernier3['marque'];


            ?>
            <div class="row align-items-center promo_tot1"  id="promo_tot">
                <div class="col-md-8">
                    <img src="<?php echo $image ?>" class="img-fluid p-0 img_carousel_pres">
                </div>
                <div class="col-md-4">
                    <div class="bg-light w-100 p-4" id="" style="border: 15px solid #EFEFEF;margin-left:-80px">
                
                        <img src="../Image/ico_promo.png" alt="promotion" class="img-fluid m-auto d-block" style="width:40%; margin-top:-95px!important;">
                        
                        <p class="text-uppercase titre text-dark"><span class="h1"> <?php echo $modele ?></span><span class="badge bg-warning text-dark h5 mx-2"><?php echo $promotion ?>%</span></p>
                        <p class="fw-normal"><?php echo $marque ?></p>
                        <ul class="list-unstyled fw-light">
                            <li><i class="bi bi-dot"></i><i><?php echo $categorie ?></i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $autonomie ?> km</i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $puissance ?> ch</i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $place ?> places</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php 
                        }
                    }
                }
            ?>
            <?php 
                if($rowPromoDernier = mysqli_fetch_assoc($bestSeller)){
                    $id = $rowPromoDernier['id'];
                    $id_marque = $rowPromoDernier['id_marque'];
                    $modele = $rowPromoDernier['modele'];
                    $categorie = $rowPromoDernier['categorie'];
                    $compteur_location = $rowPromoDernier['compteur_location'];
                    $image = $rowPromoDernier['image'];

                    $promoDernier2 = mysqli_query($con, "SELECT * FROM `model` WHERE id_voiture='$id'");
                    if($rowPromoDernier2 = mysqli_fetch_assoc($promoDernier2)){
                        $autonomie = $rowPromoDernier2['autonomie'];
                        $puissance = $rowPromoDernier2['puissance'];
                        $place = $rowPromoDernier2['place'];

                        $promoDernier3 = mysqli_query($con, "SELECT * FROM `marque` WHERE id='$id_marque'");
                        if($rowPromoDernier3 = mysqli_fetch_assoc($promoDernier3)){
                            $marque = $rowPromoDernier3['marque'];


            ?>
            <div class="row align-items-center bestSeller_tot" id="bestSeller_tot">
                <div class="col-md-8">
                    <img src="<?php echo $image ?>" class="img-fluid p-0 img_carousel_pres">
                </div>
                <div class="col-md-4">
                    <div class="bg-light w-100 p-4"style="border: 15px solid #EFEFEF;margin-left:-80px">
                
                        <img src="../Image/ico_bs.png" alt="promotion" class="img-fluid m-auto d-block" style="width:40%; margin-top:-95px!important;">

                        <p class="text-uppercase titre text-dark"><span class="h1"> <?php echo $modele ?></span><span class="badge bg-warning text-dark h5 mx-2">nombre location : <?php echo $compteur_location ?></span></p>
                        <p class="fw-normal"><?php echo $marque ?></p>
                        <ul class="list-unstyled fw-light">
                            <li><i class="bi bi-dot"></i><i><?php echo $categorie ?></i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $autonomie ?> km</i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $puissance ?> ch</i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $place ?> places</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php 
                        }
                    }
                }
            ?>
            <?php 
                if($rowPromoDernier = mysqli_fetch_assoc($promoAvantDernier)){
                    $id = $rowPromoDernier['id'];
                    $id_marque = $rowPromoDernier['id_marque'];
                    $modele = $rowPromoDernier['modele'];
                    $categorie = $rowPromoDernier['categorie'];
                    $promotion = $rowPromoDernier['promotion'];
                    $image = $rowPromoDernier['image'];

                    $promoDernier2 = mysqli_query($con, "SELECT * FROM `model` WHERE id_voiture='$id'");
                    if($rowPromoDernier2 = mysqli_fetch_assoc($promoDernier2)){
                        $autonomie = $rowPromoDernier2['autonomie'];
                        $puissance = $rowPromoDernier2['puissance'];
                        $place = $rowPromoDernier2['place'];

                        $promoDernier3 = mysqli_query($con, "SELECT * FROM `marque` WHERE id='$id_marque'");
                        if($rowPromoDernier3 = mysqli_fetch_assoc($promoDernier3)){
                            $marque = $rowPromoDernier3['marque'];


            ?>
            <div class="row align-items-center promo_tot2"  id="promo_tot">
                <div class="col-md-8">
                    <img src="<?php echo $image ?>" class="img-fluid p-0 img_carousel_pres">
                </div>
                <div class="col-md-4">
                    <div class="bg-light w-100 p-4" id="" style="border: 15px solid #EFEFEF;margin-left:-80px">
                
                        <img src="../Image/ico_promo.png" alt="promotion" class="img-fluid m-auto d-block" style="width:40%; margin-top:-95px!important;">

                        <p class="text-uppercase titre text-dark"><span class="h1"> <?php echo $modele ?></span><span class="badge bg-warning text-dark h5 mx-2"><?php echo $promotion ?>%</span></p>
                        <p class="fw-normal"><?php echo $marque ?></p>
                        <ul class="list-unstyled fw-light">
                            <li><i class="bi bi-dot"></i><i><?php echo $categorie ?></i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $autonomie ?> km</i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $puissance ?> ch</i></li>
                            <li><i class="bi bi-dot"></i><i><?php echo $place ?> places</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php 
                        }
                    }
                }
            ?>
        </div>

    </div>

    <!-- Sous titre carousel -->
    <div class="row carousel_bas text-center">
        <button id="btn_promo1" onclick="ViewPromo1()" class="btn_carousel_bas1 col-4 bg_green3 border-0">
            <span class="carousel_bas1 text-uppercase">Promo</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </button>
        <button id="btn_bestSeller" onclick="ViewbestSeller()" class="btn_carousel_bas1 col-4 bg_green2 border-0">
            <span class="carousel_bas1 text-uppercase">Best Seller</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </button>
        <button id="btn_promo2" onclick="ViewPromo2()" class="btn_carousel_bas1 col-4 bg_green1 border-0">
            <span class="carousel_bas1 text-uppercase">Promo</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </button>
    </div>

</section>

<!-- Presentation -->
<section class="presentation_tot ">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="titre_presentation text-uppercase">Presentation</h1>
                <small><p class="petit_texte"><i>Petit texte ici</i> </p></small>
                <p class="texte_presentation">Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente pariatur, aperiam alias ullam et odit dolorum facilis, ea minus expedita laudantium quia atque provident fugit sit! Impedit placeat aliquam corporis Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ea delectus expedita odit maiores accusantium suscipit veniam dolore non quia eveniet reiciendis nisi, fugit iusto aliquid itaque ut ex. Maxime? , ipsum dolor sit amet consectetur adipisicing elit. Cumque, quisquam id? Minima itaque nam quia, laboriosam consectetur rerum quod quo esse quaerat eius sint sed, ex excepturi nesciunt temporibus. Omnis.</p>
                <a href="presentation.php" class="btn_vert30 btn_presention">Lire plus</a>
            </div>
            <div class="col-6">
                <img src="../Image/voiture_test.jpg" alt="img_bg_carousel" class="img_presentation">
            </div>
        </div>
    </div>
</section>

<!-- Affiche Marque -->
<section>
    <img class="image_fond_marque1" id="image_fond_marque1" src="../Image/image_fond_vert.png" alt="image_fond_vert">
    <div class="marque_titre text-center">
        <h1 class="text-uppercase text_marque_gen color_white">Nos Marques</h1>
        <small><p class="petit_texte text-light"><i>Petit texte ici</i> </p></small>
    </div>

    <div class="bg_green1">
        <div class="row row_marque ">
            <?php
                for($i=0; $i<4; $i++){
                    if($row = mysqli_fetch_assoc($demandeImgMarque)){
                        $logoMarque=$row['logo'];  
            ?>
            <div class="col-3 ">
                <img src="<?php echo $logoMarque ?>" alt="img_marque" class="img-responsive img-fluid img_marque" style="height:200px!important">
            </div>
            <?php
                    }
                }
            ?>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body bg_green1 p-0">
                <div class="row">
                    <?php
                        for($i=0; $i<4; $i++){
                            if($row2 = mysqli_fetch_assoc($demandeImgMarque2)){
                                $logoMarque2=$row2['logo'];  
                    ?>
                    <div class="col-3">
                        <img src="<?php echo $logoMarque2 ?>" alt="img_marque" class="img-fluid img_marque m-auto d-block" style="height:200px!important">
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row_marque2">
        <p class="btn_affiche_marque">
            <a id="rot_icone" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <img class="image_fond_marque2" src="../Image/image_fond_vert.png" alt="image_fond_vert">
                <br>
                <i id="icone_marque" class="icone_affiche_marque bi bi-arrow-down-circle-fill fa-2x color_white"></i>
            </a>
        </p>
    </div>
</section>

<!-- Avis -->
<section class="avis_tot bg_gray3">
    <div class="bg_gray3">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                <h1 class="text-uppercase titre text-dark text-center">avis clients</h1>
                <p class="text-center fw-light">Laissez nous votre avis depuis le formulaire ci-dessous</p>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row" >
                                    <?php
                                        for ($i=0; $i<4;$i++){
                                            if($rowAvisAffichage = mysqli_fetch_assoc($avisAffichage)){
                                                // $dateCommentaire = $rowAvisAffichage['dateCommentaire'];
                                                $commentaire = $rowAvisAffichage['commentaire'];
                                                $etoile = $rowAvisAffichage['etoile'];
                                                $id_inscription = $rowAvisAffichage['id_inscription'];

                                                $avisAffichage2 = mysqli_query($con, "SELECT * FROM `inscription` WHERE id='$id_inscription'");
                                                if($rowAvisAffichage2 = mysqli_fetch_assoc($avisAffichage2)){
                                                    $prenom = $rowAvisAffichage2['prenom'];
                                                ?>
                                                <div class="col-sm-3">
                                                    <div class="thumb-wrapper" style="border-bottom:10px solid #33985D; width:241px; height:250px">                                                    
                                                        <div class="thumb-content">
                                                            <h4 class="text-uppercase titre text-dark text-center"><?php echo $prenom ?></h4>
                                                            <div class="star-rating">
                                                                <ul class="list-inline">
                                                                    <?php    
                                                                            for ($j=0; $j<$etoile;$j++){
                                                                    ?>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                            <p class="fst-italic fw-normal text-dark "><?php echo $commentaire ?></p>
                                                        </div>	
                                                    </div>
                                                    <div class="triangle_commentaire"></div>
                                                </div>
                                                <?php
                                                }
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<!-- Footer -->
<?php require('footer.php'); ?>