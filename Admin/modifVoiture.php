<?php 
    require('header.php');

    $idVoiture=$_GET['idVoiture'];

    $modifVoiture = mysqli_query($con, "SELECT * FROM `voiture` WHERE id='$idVoiture'");
    $modifVoiture2 = mysqli_query($con, "SELECT * FROM `model` WHERE id_voiture='$idVoiture'");
    $modifVoiture3 = mysqli_query($con, "SELECT * FROM `prix` WHERE id_voiture='$idVoiture'");
?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Modification des Véhicules'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <div class="card p-2 mt-3 shadow" style="width:96%;margin-left:2%;border-radius:10px;margin-bottom:672px">
            <h5 class="titre t_bold" >&nbsp; Effectuez vos modifications <br></h5>
            <?php
                if($modifVoitureTot = mysqli_fetch_assoc($modifVoiture)){
                    $categorie= $modifVoitureTot['categorie'];
                    $modele= $modifVoitureTot['modele'];
                    $reference= $modifVoitureTot['reference'];
                    $id_marque= $modifVoitureTot['id_marque'];
                    $couleur= $modifVoitureTot['couleur'];
                    $image= $modifVoitureTot['image'];

                    if($modifVoiture2Tot = mysqli_fetch_assoc($modifVoiture2)){
                        $autonomie= $modifVoiture2Tot['autonomie'];
                        $puissance= $modifVoiture2Tot['puissance'];
                        $consommation= $modifVoiture2Tot['consommation'];
                        $place= $modifVoiture2Tot['place'];

                        if($modifVoiture3Tot = mysqli_fetch_assoc($modifVoiture3)){
                            $prixJour= $modifVoiture3Tot['prixJour'];
                            $prixSemaine= $modifVoiture3Tot['prixSemaine'];
                            $prixMois= $modifVoiture3Tot['prixMois'];

                            $modifVoiture4 = mysqli_query($con, "SELECT * FROM `marque` WHERE id='$id_marque'");
                            if($modifVoiture4Tot = mysqli_fetch_assoc($modifVoiture4)){
                                $marque= $modifVoiture4Tot['marque'];

            ?>
            <form action="../Bdd/modifVoiture.php" method="POST" enctype="multipart/form-data">
                <div class="row container mt-3 my-5 contenu_ajoutVoiture">
                    <div class="col-md-8">
                        <div class="shadow m-2 p-4">
                            <div class="form-row">
                                <div class="row ">
                                    <div class="col" style="height:38px;">
                                        <select name="modifCategorie" id="modifVoiture2" class="form-control">
                                            <?php
                                                if($categorie=="Electrique"){
                                            ?>
                                                <option value="Electique"><?= $categorie ?></option>
                                                <option value="Hybride">Hybride</option>
                                            <?php
                                                }else if($categorie=="Hybride"){
                                            ?>
                                                <option value="Hybride"><?= $categorie ?></option>
                                                <option value="Electique">Electrique</option>
                                            <?php
                                                }else{
                                                    // recup categorie
                                                    $listeCategorie = mysqli_query($con, "SELECT DISTINCT(categorie) as liste_categorie FROM `voiture`");
                                                    $totalCategorie = mysqli_query($con, "SELECT count(DISTINCT(categorie)) as total_categorie FROM `voiture`");
                                                    if($totalCat = mysqli_fetch_assoc($totalCategorie)){
                                                        $totalCategorie= $totalCat['total_categorie'];

                                                        for($i=0; $i< $totalCategorie; $i++) {
                                                            if($rowCat = mysqli_fetch_assoc($listeCategorie)){
                                                                $categorie2= $rowCat['liste_categorie']; 
                                            ?>
                                                <option value="<?= $categorie2 ?>"><?= $categorie2 ?></option>
                                            <?php
                                                            }
                                                        }
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_2"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <select name="modifMarque" id="modifVoiture1" class="form-control">
                                            <option value="<?= $marque ?>" selected><?= $marque ?></option>
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
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_1"></span></small>
                                    </div>
                                </div>
                                <div class="row  mt-4">
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture3" class="form-control" name="modifModele" placeholder="Modèle" value="<?= $modele ?>">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_3"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture4" class="form-control" name="modifReference" placeholder="Référence" value="<?= $reference ?>">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_4"></span></small>
                                    </div>
                                </div>
                                <div class="row  mt-4">
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture5" class="form-control" name="modifAutonomie" placeholder="Autonomie (km)" value="<?= $autonomie ?>">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_6"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture6" class="form-control" name="modifPuissance" placeholder="Puissance (ch)" value="<?= $puissance ?>">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_7"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture7" class="form-control" name="modifConsommation" placeholder="Conso (kWh/100km)" value="<?= $consommation ?>">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_8"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="number" id="modifVoiture8" class="form-control" name="modifPlace" placeholder="Nombre de place" value="<?= $place ?>">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_9"></span></small>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="row mt-4">
                                <div class="col" style="height:38px;">
                                    <input class="form-control" type="text" name="modifPrixJ" id="modifVoiture9" placeholder="Prix (jour)" value="<?= $prixJour ?>">
                                    <small><span class="ajoutVoiture_span" id="Erreurmodif_10"></span></small>
                                </div>
                                <div class="col" style="height:38px;">
                                    <input class="form-control" type="text" name="modifPrixS" id="modifVoiture10" placeholder="Prix (semaine)" value="<?= $prixSemaine ?>">
                                    <small><span class="ajoutVoiture_span" id="Erreurmodif_11"></span></small>
                                </div>
                                <div class="col" style="height:38px;">
                                    <input class="form-control" type="text" name="modifPrixM" id="modifVoiture11" placeholder="Prix (mois)" value="<?= $prixMois ?>">
                                    <small><span class="ajoutVoiture_span" id="Erreurmodif_12"></span></small>
                                </div>
                            </div>

                            <div class="row form-row mt-4">
                                <div class="form-group col-md-4 col-4" style="margin-top: 25px; height:38px;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-unstyled">
                                            <div class="row">
                                                <div class="col-md-15">
                                                    <div class="text-uppercase shadow mb-1" style="width:100px;height:20px;background-color:#<?= $couleur ?>;border: solid 1px black; border-radius:10px;"></div>
                                                    <label class="w-100 label_color">
                                                        <input class="color form-control-file color_ajoutVoiture" id="color_modifVoiture" name="background_seller" placeholder="Color" data-value="#xxxxxx" value="#<?= $couleur ?>"/>
                                                    </label> 
                                                </div>
                                            </div>
                                            <small><span class="ajoutVoiture_span" id="Erreurmodif_5"></span></small>
                                            <br>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-8 col-8">
                                    <div class="img_div_change">
                                        <span class="file_inscription_img">
                                            <span onclick="choix_image_vendeur()" id="btn_Browse2" class="btn btn-default btn_choix_img_admin">
                                                Browse 
                                                <input type="file" name="modifVoiture_img" id="file_interrieur_imgAdminmodif" accept="image/png, image/jpg, image/jpeg" value="<?= $image ?>">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="file_interrieur_imgAdminmodif2" name="modifImage" readonly value="<?= $image ?>">
                                        <small><span class="infoPerso_span" id="imageErreur_modifVoiture"></span></small>
                                        <br>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <input type="hidden" name="hideID" value="<?= $idVoiture ?>">
                        <img id="infoPerso_image" src="<?= $image ?>" class="img-responsive rounded mt-2" style="width:400px; height:266px; object-fit: cover;">
                        <button type="submit" name="submit_valider_modifVoiture" id="submit_valider_modifVoiture" class="btn w-50 bg_green1 text-uppercase mt-5 text-light float-end" style="float:right!important">Modifier</button>
                    </div>
                </div> 
            </form>
            <?php
                            }
                        }
                    }
                }
            ?>
        </div>
        
        

<!-- Footer -->
<?php require('footer.php'); ?>