<?php 
    require('header.php');
    require('navbar.php');

    $idVoiture=$_GET['idVoiture'];
    $id_session=$_SESSION['emailUser'];

    $infoInscrit = mysqli_query($con, "SELECT * FROM `inscription` WHERE email='$id_session'");

    $infoVoiture = mysqli_query($con, "SELECT * FROM `voiture` WHERE id='$idVoiture'");
    $infoModel = mysqli_query($con, "SELECT * FROM `model` WHERE id_voiture='$idVoiture'");

?>

<section>
    <div class="row" style="height:91vh">
    <?php
        if($infoVoitureTot = mysqli_fetch_assoc($infoVoiture)){
            $categorie= $infoVoitureTot['categorie'];
            $image= $infoVoitureTot['image'];
            $modele= $infoVoitureTot['modele'];
            $id_marque= $infoVoitureTot['id_marque'];
            $promotion= $infoVoitureTot['promotion'];
            if($infoModelTot = mysqli_fetch_assoc($infoModel)){
                $autonomie= $infoModelTot['autonomie'];   
                $puissance= $infoModelTot['puissance'];   
                $consommation= $infoModelTot['consommation'];   
                $place= $infoModelTot['place'];
                if($infoInscritTot = mysqli_fetch_assoc($infoInscrit)){
                    $idInscription= $infoInscritTot['id'];

                    $infoMarque = mysqli_query($con, "SELECT * FROM `marque` WHERE id='$id_marque'");
                    if($infoMarqueTot = mysqli_fetch_assoc($infoMarque)){
                        $marque= $infoMarqueTot['marque'];

                        $infoPrix = mysqli_query($con, "SELECT * FROM `prix` WHERE id='$idVoiture'");
                        if($infoPrixTot = mysqli_fetch_assoc($infoPrix)){
                            $prixJ= $infoPrixTot['prixJour'];
                            $prixS= $infoPrixTot['prixSemaine'];
                            $prixM= $infoPrixTot['prixMois'];
    ?>
        <div class="col-6">
            <div class="info_nom"><p><b><?php echo $marque ?> &nbsp; <?php echo $modele ?></b></p></div>
            <img src="<?php echo $image ?>" alt="img_peugeot_e-208_bleu" class="img_detail_voiture">
            <br><br><br>
            <!-- Button trigger modal -->
            <a class="btn_vert30 btn_presention text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer;">Réserver</a>

            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog" >
                    <div class="modal-content" style="width: 800px;left: -123px;top: 37px;" >
                        <div class="modal-header">
                            <h4 class="titre">Prix de la location </h4>
                            <?php if($promotion!=0){ ?> 
                            &nbsp; | &nbsp;
                            <small><i> Produit en promotion </i><span class="badge bg-warning text-dark"><?php echo $promotion ?>%</span></small>
                            <?php } ?>
                            <hr>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../Bdd/locationVoiture.php" method="POST">
                            <div class="modal-body">
                                <div class="card shadow mt-2 p-3 py-5">
                                    
                                    <div class="row m-auto w-100">
                                        <div class="col-md-4">
                                            <div class="badge rounded-pill w-100 text-uppercase bg_green1 p-3">
                                                <a class="h6 text-light text-decoration-none titre"> <i class="fas fa-2x fa-sun"></i> Prix journalier</a>
                                            </div>
                                            <center><i class="fas fa-caret-down fa-2x color_green1"></i></center>
                                            <h3 class="titre text-center text-muted"> <?php echo $prixJ ?> €</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="badge rounded-pill w-100 text-uppercase bg_green1 p-3">
                                                <a class="h6 text-light text-decoration-none titre"> <i class="fas fa-2x fa-calendar-day"></i> Prix hebdomadaire</a>
                                            </div>
                                            <center><i class="fas fa-caret-down fa-2x color_green1"></i></center>
                                            <h3 class="titre text-center text-muted"> <?php echo $prixS ?> €</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="badge rounded-pill w-100 text-uppercase bg_green1 p-3">
                                                <a class="h6 text-light text-decoration-none titre"> <i class="fas fa-2x fa-calendar-day"></i> Prix mensuel</a>
                                            </div>
                                            <center><i class="fas fa-caret-down fa-2x color_green1"></i></center>
                                            <h3 class="titre text-center text-muted"> <?php echo $prixM ?> €</h3>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-items-center mt-4 ">
                                        <div class="col-md-6">
                                            <span id="passwordHelpInline" class="form-text">
                                            Date de début 
                                            </span>
                                            <input type="date" name="dateDebut" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                        </div>
                                        <div class="col-md-6">
                                            <span id="passwordHelpInline" class="form-text">
                                            Date de Fin 
                                            </span>
                                            <input type="date" name="dateFin" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                        </div>
                                        <input type="hidden" name="idVoiture" value="<?php echo $idVoiture ?>">
                                        <input type="hidden" name="idInscription" value="<?php echo $idInscription ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="btnLocation" class="btn_vert10  w-100 border-0" >Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- <a type="button" href="../Bdd/locationVoiture.php?idVoiture=<?php echo $idVoiture ?>&amp;idInscrit=<?php echo $idInscription ?>" class="btn_vert30 btn_detail">Louer celle-ci</a> -->
        </div>

        <div class="col-1 droite_detail"></div>
        
        <div class="col-5">
        
            <!--Partie Caracteristique-->
            <div class="info_titre"><p><b>CARACTÉRISTIQUE EN <span class="couleur_or">OR</span> !</b></p></div>
            <div class="info_voiture">
                <div class="row" class="detail_electrique">
                    <div class="col-6">
                        <i class="bi bi-plug fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p><?php echo $categorie ?></p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_capacite">
                    <div class="col-6">
                        <i class="bi bi-battery-half fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p>Autonomie : <span><?php echo $autonomie ?> km</span></p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_puissance">
                    <div class="col-6">
                        <i class="bi bi-lightning-charge fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p>Puissance : <span><?php echo $puissance ?></span> ch</p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_consommation">
                    <div class="col-6">
                        <i class="bi bi-speedometer2 fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p>Consommation : <span><?php echo $consommation ?></span> kWh/100km</p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_consommation">
                    <div class="col-6">
                        <i class="bi bi-person-fill fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p><span><?php echo $place ?></span> places</p>
                        </div>
                    </div>
                </div>
            <?php
                                }
                            }
                        }
                    }
                }
            ?>
            </div>

            <!--Partie Garantie-->
            <div class="info_titre"><p><b>GARANTIE EN <span class="couleur_or">OR</span> !</b></p></div>
            <div class="info_partie_garantie">
                <div class="row detail_garantie">
                    <div class="col-2">
                        <i class="bi bi-clock-history fa-3x" id="icon_garantie"></i>
                    </div>                        
                    <div class="col-10 info_garantie">
                        <p class="info_garantie_titre"><b>Assitance 24/24h</b></p>
                        <p class="info_garantie_sous_titre">Dans tous nos garages, un problème, une réparation sans frais suplémentaire.</p>
                    </div>
                </div>

                <div class="row detail_garantie">
                    <div class="col-2">
                        <i class="bi bi-clipboard-check fa-3x" id="icon_garantie"></i>
                    </div>
                    <div class="col-10 info_garantie">
                        <p class="info_garantie_titre"><b>Essai du véhicule</b></p>
                        <p class="info_garantie_sous_titre">Sans obligation d'achat (Voir conditions détaillées en concession).</p>                        </div>
                    </div>
                </div>
                            
                <div class="row detail_garantie">
                    <div class="col-2">
                        <i class="bi bi-cash-coin fa-3x" id="icon_garantie"></i>
                    </div>
                    <div class="col-10 info_garantie">
                        <p class="info_garantie_titre"><b>Remboursement du véhicule si vous n'êtes pas entièrement satisfait</b></p>
                        <p class="info_garantie_sous_titre">Dans un délai de 5 jours ouvrables et 1000 km parcourus.</p>                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

</section>




<!-- Footer -->
<?php require('footer.php'); ?>