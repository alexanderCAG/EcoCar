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
                        <h4 class="text-uppercase mx-4 pt-4 t_bold titre color_white" style="margin-top: 5px;">Liste des Avis</h4>
                    </div>
                    <div class="col-4">
                        <a href="">
                            <div class="bg_gray2 div_ajout_admin2 shadow">
                                <small><p>Ajouter un véhicule</p></small>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg_gray2 div_notif_admin2 shadow">
                                <i class="fas fa-user-friends icone_notif2"></i>
                                <span>50</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        
        <!-- Partie Centrale contenu -->
        <section class="container mt-5">
            <div class="row mx-3">
                <div class="col-3 bg_white shadow col_avis">
                    
                </div>
                <div class="col-3 bg_white shadow col_avis">
                    
                </div>
                <div class="col-3 bg_white shadow col_avis">
                    
                </div>
                <div class="col-3 bg_white shadow col_avis">
                    
                </div>
            </div>
        </section>

        <!-- Pagination -->
        <section style="margin-top:70px; margin-bottom:55px;">
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
<?php require('footer.php'); ?>