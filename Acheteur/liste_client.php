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
                        <h4 class="text-uppercase mx-4 pt-4 t_bold titre color_white" style="margin-top: 5px;">Liste de clients</h4>
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
        <section class="mx-5" style="margin-top:-65px">
            <table class="table table-striped bg_white shadow" style="border-radius: 20px 20px 0 0; vertical-align:30px">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Permis</th>
                        <th scope="col">Email</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Nombre de location</th>
                        <th scope="col"><i class="icone_listeBtnVoiture_th bi bi-three-dots fa-2x float-end"></i></th>
                    </tr>
                </thead>
                <!-- Pas plus de 15 lignes -->
                <tbody>

                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span>alexander@gmail.com</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td>

                            <div class="statut_info_listeVoiture">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="" class="text-decoration-none">
                                            <i class="bi bi-file-earmark-fill bg-success color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="" class="text-decoration-none">
                                            <i class="bi bi-pencil-square bg-success color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="" class="text-decoration-none">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    
                </tbody>
            </table>
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