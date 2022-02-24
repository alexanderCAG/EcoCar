<!-- Header -->
<?php require('header.php'); ?>
<!-- Navbar -->
<?php require('navbar.php'); ?>

<section>
    <div class="row" style="height:91vh">
        <div class="col-6">
            <div class="info_nom"><p><b>PEUGEOT E-208</b></p></div>
            <img src="../Image/peugeot_e-208_bleu.png" alt="img_peugeot_e-208_bleu" class="img_detail_voiture">
            <br><br><br>
            <a href="connexion.php" class="btn_vert30 btn_detail">Louer celle-ci</a>
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
                            <p>Hybride</p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_capacite">
                    <div class="col-6">
                        <i class="bi bi-battery-half fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p>Autonomie : <span>362 km</span></p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_puissance">
                    <div class="col-6">
                        <i class="bi bi-lightning-charge fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p>Puissance : <span>136</span> ch</p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_consommation">
                    <div class="col-6">
                        <i class="bi bi-speedometer2 fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p>Consommation : <span>15,4</span> kWh/100km</p>
                        </div>
                    </div>
                </div>

                <div class="row" class="detail_consommation">
                    <div class="col-6">
                        <i class="bi bi-person-fill fa-2x" id="icon_detail"></i>
                    </div>
                    <div class="col-6">
                        <div class="info_detail">
                            <p><span>5</span> places</p>
                        </div>
                    </div>
                </div>
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