<?php require('header.php'); ?>
<?php require('navbar.php'); ?>

<section class="carousel_accueil">
    <!-- <img src="../Image/img_bg_carousel.png" alt="img_bg_carousel" class="img_bg_carousel"> -->

    <div class="carousel_tot">
        <!-- carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img_carousel position-relative" src="../Image/voiture_test.jpg" alt="" class="test" sty>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- <div class="row ">
        <div class="col-4 bg_green3 carousel_bas">
            Promo
        </div>
        <div class="col-4 bg_green2 carousel_bas">
            Promo
        </div>
        <div class="col-4 bg_green1 carousel_bas">
            Promo
        </div>

    </div> -->

</section>

<!-- Footer -->
<?php require('footer.php'); ?>