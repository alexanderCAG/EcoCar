<?php require('header.php'); ?>
<?php require('navbar.php'); ?>

<section class="carousel_accueil">

    <div class="row row_carousel">
        <div class="col-4">

        </div>
        <div class="col-8 bg_green3">

        </div>
    </div>

    <!-- carousel -->
    <div class="carousel_tot">
        
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img_carousel position-relative" src="../Image/voiture_test.jpg" alt="" class="test">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->

    </div>

    <div class="row carousel_bas text-center">
        <a href="" class="col-4 bg_green3 text-decoration-none">
            <span class="carousel_bas1 text-uppercase">Promo</span>
            <br>
            <span class="carousel_bas2 text-uppercase">texte essaie test texte</span>
        </a>
        <a href="" class="col-4 bg_green2 text-decoration-none">
            <span class="carousel_bas1 text-uppercase">Promo</span>
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
            <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <img class="image_fond_marque2" src="../Image/image_fond_vert.png" alt="image_fond_vert">
                <br>
                <i class="icone_affiche_marque bi bi-arrow-down-circle-fill fa-2x color_white"></i>
            </a>
        </p>
    </div>
</section>





<!-- Footer -->
<?php require('footer.php'); ?>