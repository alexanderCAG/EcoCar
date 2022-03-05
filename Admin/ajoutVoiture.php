<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Ajout de Voiture'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->        
        <div class="card p-2 mt-3 shadow" style="width:96%;margin-left:2%;border-radius:10px;margin-bottom:596px">
            <h5 class="titre t_bold" >&nbsp; Quelle catégorie de véhicule voulez-vous ajouter ? <br></h5>
            <div class="w-75 mt-3"> &nbsp; &nbsp; 
                <button id="btn_categorie_ajouter1" class="py-3 text-uppercase btn_categorie_ajouter">Hybride</button>
                <button id="btn_categorie_ajouter2" class="py-3 text-uppercase btn_categorie_ajouter">Électrique</button>
            </div>
            <form action="../Bdd/ajoutVoiture.php" method="POST" enctype="multipart/form-data">
                <div class="row container mt-3 my-5 contenu_ajoutVoiture">
                    <div class="col-md-8">
                        <div class="shadow m-2 p-4">
                            <div class="form-row">
                                <div class="row ">
                                    <div class="col" style="height:38px;">
                                        <input type="text" name="ajoutCategorie" id="ajoutVoiture2" class="form-control bg-light" placeholder="Catégorie" value="" disabled>
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_2"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <select name="ajoutMarque" id="ajoutVoiture1" class="form-control">
                                            <option value="choixMarque" selected>Choisir une marque</option>
                                            <?php
                                                // recup marque
                                                $listeMarqueAdmin = mysqli_query($con, "SELECT DISTINCT(marque) as liste_marque FROM `marque`");
                                                $totalMarqueAdmin = mysqli_query($con, "SELECT count(DISTINCT(marque)) as total_marque FROM `marque`");
                                                if($totalMq = mysqli_fetch_assoc($totalMarqueAdmin)){
                                                    $totalMarque= $totalMq['total_marque'];

                                                    for($i=0; $i< $totalMarque; $i++) {
                                                        if($rowMq = mysqli_fetch_assoc($listeMarqueAdmin)){
                                                            $marqueTot= $rowMq['liste_marque'];
                                            ?>
                                            <option value="<?= $marqueTot ?>"><?= $marqueTot ?></option>
                                            <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_1"></span></small>
                                    </div>
                                </div>
                                <div class="row  mt-4">
                                    <div class="col" style="height:38px;">
                                        <input type="text" name="ajoutModele" id="ajoutVoiture3" class="form-control" placeholder="Modèle">
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_3"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" name="ajoutReference" id="ajoutVoiture4" class="form-control" placeholder="Référence">
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_4"></span></small>
                                    </div>
                                </div>
                                <div class="row  mt-4">
                                    <div class="col" style="height:38px;">
                                        <input type="text" name="ajoutAutonomie" id="ajoutVoiture5" class="form-control" placeholder="Autonomie (km)">
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_6"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" name="ajoutPuissance" id="ajoutVoiture6" class="form-control" placeholder="Puissance (ch)">
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_7"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" name="ajoutConsommation" id="ajoutVoiture7" class="form-control" placeholder="Conso (kWh/100km)">
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_8"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="number" name="ajoutPlace" id="ajoutVoiture8" class="form-control" placeholder="Nombre de place">
                                        <small><span class="ajoutVoiture_span" id="ErreurAjout_9"></span></small>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="row mt-4">
                                <div class="col" style="height:38px;">
                                    <input class="form-control" type="text" name="ajoutPrixJ" id="ajoutVoiture9" placeholder="Prix (jour)">
                                    <small><span class="ajoutVoiture_span" id="ErreurAjout_10"></span></small>
                                </div>
                                <div class="col" style="height:38px;">
                                    <input class="form-control" type="text" name="ajoutPrixS" id="ajoutVoiture10" placeholder="Prix (semaine)">
                                    <small><span class="ajoutVoiture_span" id="ErreurAjout_11"></span></small>
                                </div>
                                <div class="col" style="height:38px;">
                                    <input class="form-control" type="text" name="ajoutPrixM" id="ajoutVoiture11" placeholder="Prix (mois)">
                                    <small><span class="ajoutVoiture_span" id="ErreurAjout_12"></span></small>
                                </div>
                            </div>

                            <div class="row form-row mt-4">
                            <div class="form-group col-md-4 col-4" style="margin-top: 48px; height:38px;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-unstyled">
                                            <div class="row">
                                                <div class="col-md-15">
                                                    <label class="w-100 label_color">
                                                        <input class="color form-control-file color_ajoutVoiture" id="color_ajoutVoiture" name="backgroundSeller" placeholder="Color" data-value="#xxxxxx" value=""/>
                                                    </label> 
                                                </div>
                                            </div>
                                            <small><span class="ajoutVoiture_span" id="ErreurAjout_5"></span></small>
                                            <br>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-8 col-8">
                                    <div class="img_div_change">
                                        <span class="file_inscription_img">
                                            <span onclick="choix_image_vendeur()" id="btn_Browse3" class="btn btn-default btn_choix_img_admin">
                                                Browse 
                                                <input type="file" name="ajoutVoiture_img" id="file_interrieur_imgAdminAjout" accept="image/png, image/jpg, image/jpeg">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="file_interrieur_imgAdminmodif2" name="ajoutImage" readonly value="">
                                        <small><span class="infoPerso_span" id="imageErreur_ajoutVoiture"></span></small>
                                        <br>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <img id="infoPerso_image" src="../Image/img_default.png" class="img-responsive rounded mt-2" style="width:400px; height:266px; object-fit: cover;">
                        <button type="submit" name="submit_valider_ajoutVoiture" id="submit_valider_ajoutVoiture" class="btn w-50 bg_green1 text-uppercase mt-5 text-light float-end" style="float:right!important"> Enregister</button>
                    </div>
                </div> 
            </form>
        </div>
        
        

<!-- Footer -->
<?php require('footer.php'); ?>