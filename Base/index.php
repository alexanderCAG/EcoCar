<?php require('header.php'); ?>
<?php require('navbar.php'); ?>

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
            <div class="row align-items-center promo_tot"  id="promo_tot">
                <div class="col-md-8">
                    <img src="https://images.pexels.com/photos/9800006/pexels-photo-9800006.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid p-0 img_carousel_pres">
                </div>
                <div class="col-md-4">
                    <div class="bg-light w-100 p-4" id="" style="border: 15px solid #EFEFEF;margin-left:-80px">
                
                        <img src="../Image/ico_promo.png" alt="promotion" class="img-fluid m-auto d-block" style="width:40%; margin-top:-95px!important;">

                        <h1 class="text-uppercase titre text-dark">Promotion 1</h1>
                        <p class="fw-normal">lOREM IPSUM lOREM IPSUM lOREM IPSUM lOREM IPSU</p>
                        <ul class="list-unstyled fw-light">
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="row align-items-center bestSeller_tot" id="bestSeller_tot">
                <div class="col-md-8">
                    <img src="https://images.pexels.com/photos/5391510/pexels-photo-5391510.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid p-0 img_carousel_pres">
                </div>
                <div class="col-md-4">
                    <div class="bg-light w-100 p-4"style="border: 15px solid #EFEFEF;margin-left:-80px">
                
                        <img src="../Image/ico_bs.png" alt="promotion" class="img-fluid m-auto d-block" style="width:40%; margin-top:-95px!important;">

                        <h1 class="text-uppercase titre text-dark">Best seller 1</h1>
                        <p class="fw-normal">lOREM IPSUM lOREM IPSUM lOREM IPSUM lOREM IPSU</p>
                        <ul class="list-unstyled fw-light">
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                            <li><i class="bi bi-dot"></i><i>4 chambres, 3 salles de bains</i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Sous titre carousel -->
    <div class="row carousel_bas text-center">
        <a href="" id="btn_promo1" onclick="ViewPromo()" class="col-4 bg_green3 text-decoration-none">
            <span class="carousel_bas1 text-uppercase">Promo</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </a>
        <a href="" id="btn_bestSeller" onclick="ViewbestSeller()" class="col-4 bg_green2 text-decoration-none">
            <span class="carousel_bas1 text-uppercase">Best Seller</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </a>
        <a href="" class="col-4 bg_green1 text-decoration-none">
            <span class="carousel_bas1 text-uppercase">Promo</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </a>
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
                <a href="" class="btn_vert30 btn_presention">Lire plus</a>
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
        <div class="row row_marque">
            <div class="col-3">
                <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
            </div>
            <div class="col-3">
                <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
            </div>
            <div class="col-3">
                <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
            </div>
            <div class="col-3">
                <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body bg_green1 p-0">
                <div class="row">
                    <div class="col-3">
                        <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
                    </div>
                    <div class="col-3">
                        <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
                    </div>
                    <div class="col-3">
                        <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
                    </div>
                    <div class="col-3">
                        <img src="../Image/voiture_test.jpg" alt="img_marque" class="img_marque">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row_marque2">
        <p class="btn_affiche_marque">
            <a id="rot_icone" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <img class="image_fond_marque2" src="../Image/image_fond_vert.png" alt="image_fond_vert">
                <br>
                <i id="icone_marque" class="icone_affiche_marque bi bi-arrow-left-circle-fill fa-2x color_white"></i>
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
                                    <div class="col-sm-3 s">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Alex98</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Alex98</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Alex98</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Alex98</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                        
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Marine20</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Marine20</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Marine20</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Marine20</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                        
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Yvi16</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Yvi16</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Yvi16</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper" style="border-bottom:10px solid #33985D;">
                                            <div class="thumb-content">
                                                <h4 class="text-uppercase titre text-dark text-center">Yvi16</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="fst-italic fw-normal text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation+</p>
                                            </div>						
                                        </div>
                                        <div class="triangle_commentaire"></div>
                                    </div>
                        
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