<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Total de location des véhicules'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <section class="mx-5" style="margin-top:-65px">
            <table class="table table-striped bg_white shadow" style="border-radius: 20px 20px 0 0; vertical-align:30px">
                <thead>
                    <tr>
                    <th scope="col" style="width:90px;"></th>
                    <th scope="col" style="width:120px;">Catégorie</th>
                    <th scope="col" style="width:170px;">Marque</th>
                    <th scope="col" style="width:130px;">Référence</th>
                    <th scope="col" style="width:130px;">Modèle</th>
                    <th scope="col" style="width:100px;">Couleur</th>
                    <th scope="col" style="width:100px;">Location</th>
                    <th scope="col" style="width:100px;">Pormotion</th>
                    <th scope="col" style="width:150px;">Statut</th>
                    <th scope="col" style="width:150px;"><i class="icone_listeBtnVoiture_th bi bi-three-dots fa-2x float-end"></i></th>
                    </tr>
                </thead>
                <!-- Pas plus de 15 lignes -->
                <!-- Ne pas oublier de blinder ou max les carac par colonne -->
                <tbody>

                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
                        <td>

                            <div class="statut_info_listeVoiture">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="afficherVoiture.php" class="text-decoration-none">
                                            <i class="bi bi-file-earmark-fill bg-success color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="modifVoiture.php" class="text-decoration-none">
                                            <i class="bi bi-pencil-square bg-success color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <!-- <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div> -->
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td><img class="img_listeVoiture" src="../Image/voiture_test.jpg" alt="user"></td>
                        <td><span>Hybide</span></td>
                        <td><span class="text-uppercase">Range Rover</span></td>
                        <td><span class="text-uppercase">A6d23325</span></td>
                        <td><span class="text-uppercase">ag15</span></td>
                        <td><span class="text-uppercase">Bleu</span></td>
                        <td><span>15</span></td>
                        <td><span class="text-uppercase">15</span>%</td>
                        <td>
                            <div class="statut_info_listeVoiture bg-success color_white"><span>Disponible</span></div>
                            <!-- <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div> -->
                        </td>
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
                                        <button class="border-0">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </button>
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