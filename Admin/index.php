<?php 

    require('header.php');
    $dernierDevis = mysqli_query($con, "SELECT * FROM admin ORDER BY id DESC LIMIT 1");
    $totalLocation = mysqli_query($con, "SELECT `compteur_location`, `id_marque` FROM `voiture` Order by `compteur_location` DESC LIMIT 6");

?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- Gauche -->
                    <div class="col-9 div_gauche_admin">
                        
                        <!-- Partie 1 -->
                        <div class="contenu_gauche1_admin shadow bg_white mx-2">
                            <?php
                                if($rowDernierDevis = mysqli_fetch_assoc($dernierDevis)){
                                    $id_voiture_loue = $rowDernierDevis['id_voiture_loue'];
                                    $id_inscription_loue = $rowDernierDevis['id_inscription_loue'];
                                    $prix_voiture = $rowDernierDevis['prix_voiture'];

                                    $dernierDevisInscription = mysqli_query($con, "SELECT * FROM inscription WHERE id='$id_inscription_loue'");
                                    if($rowdernierDevisInscription = mysqli_fetch_assoc($dernierDevisInscription)){
                                        $nom = $rowdernierDevisInscription['nom'];
                                        $prenom = $rowdernierDevisInscription['prenom'];

                                        $dernierDevisImg = mysqli_query($con, "SELECT * FROM voiture WHERE id='$id_voiture_loue'");
                                        if($rowdernierDevisImg = mysqli_fetch_assoc($dernierDevisImg)){
                                            $image = $rowdernierDevisImg['image'];

                            ?>
                            <div class="row">
                                <div class="col-3">
                                    <img src="<?php echo $image ?>" alt="last vehicule" class="img_last_save">
                                </div>
                                <div class="col-9">
                                    <div class="gauche1_admin_texteUp text-uppercase titre">
                                        <h4>Dernier devis enregistré</h4>
                                        <h6><?php echo $nom ?> &nbsp; <?php echo $prenom ?></h6>
                                        <p class="prix_last_save"><span><?php echo $prix_voiture ?></span>€</p>
                                    </div>
                                    <p class="texte_last_save">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate impedit iure ad cumque iusto reiciendis explicabo expedita harum praesentium nihil necessitatibus enim placeat neque debitis, tenetur nisi aliquam eaque! Soluta?</p>
                                    <div class="info_last_save text-uppercase">
                                        <i class="bi bi-shield-fill-check fa-2x color_green1"></i>
                                        <small><span>Garantie 24 mois | 2021 | 14 137 km</span></small>
                                    </div>
                                </div>
                            </div>
                            <?php
                                        }
                                    }
                                }
                            ?>
                        </div>

                        <!-- Partie 2 -->
                        <div class="mt-4 contenu_gauche2_admin shadow bg_white container mx-2">
                            <h4 class="text-uppercase mx-4 pt-4 t_bold titre">Total de location des véhicules des 6 meilleures marques</h4>
                            
                            <div class="row align-items-center mt-5">
                                <div class="col-9">
                                    <p class="mx-4">Contrat de location signés</p>
                                </div>
                                <div class="col-3">
                                    <div class="row legende_admin">
                                        <div class="col-6">
                                            <span class="titre2 legende_graphe">Hybride</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="legende_graphe_color"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row legende_admin mt-3">
                                        <div class="col-6">
                                            <span class="titre2 legende_graphe">Electrique</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="legende_graphe_color2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3 pb-3" style="margin-top: 40px">
                                <div class="col-md-12">
                                    <div class="border-0 rounded-0 text-uppercase" style="height: 500px!important">
                                        <!-- <br>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="m-2 pl-4 p-2  text-light" style="background-color:#5499C7">Pillow</span>
                                                <span class="m-2 pl-4 p-2  text-light" style="background-color:#F39C12">Decoraton</span>
                                                <span class="m-2 pl-4 p-2  text-light" style="background-color:#52BE80">Sheet</span>
                                                <span class="m-2 pl-4 p-2  text-light" style="background-color:#A569BD">T-shirt</span>
                                                <span class="m-2 pl-4 p-2  text-light" style="background-color:#B03A2E">Sweat-shirt</span>
                                                <span class="m-2 pl-4 p-2  text-light" style="background-color:#935116">Shoes</span>
                                            </div>
                                        </div> -->

                                        <!-- 6 graphes -->
                                        <div class="container contain_bar h-100 pt-5" style="margin-left:2%;"> 

                                            <div class="progress progress-bar-vertical h-75 bg-transparent" style="width:120px">
                                                <div class="bar1_progress progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 50%; background-color:#c0dfcd">
                                                    <span class="">50%</span>
                                                </div>
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 80%; background-color:#79bb94">
                                                    <span class="">80%</span>
                                                </div>
                                            </div>

                                            <!-- <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 70%; background-color: #F39C12;">
                                                    <span class="">70%</span>
                                                </div>
                                            </div>
                                            
                                            <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 20%; background-color: #52BE80;">
                                                    <span class="">20%</span>
                                                </div>
                                            </div>

                                            <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 65%; background-color: #A569BD;">
                                                    <span class="">65%</span>
                                                </div>
                                            </div>

                                            <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 85%; background-color: #B03A2E;">
                                                    <span class="">85%</span>
                                                </div>
                                            </div>

                                            <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 45%; background-color: #935116;">
                                                    <span class="">45%</span>
                                                </div>
                                            </div> -->
                                        </div>

                                        <!-- 6 Marques -->
                                        <div class="row" style="margin-top:-85px;margin-right:50px">
                                        <?php
                                            for($i=0;$i<6;$i++){
                                                if($rowtotalLocation = mysqli_fetch_assoc($totalLocation)){
                                                    $id_marque = $rowtotalLocation['id_marque'];
                
                                                    $recupMarque = mysqli_query($con, "SELECT * FROM marque WHERE id='$id_marque'");
                                                    if($rowrecupMarque = mysqli_fetch_assoc($recupMarque)){
                                                        $marque = $rowrecupMarque['marque'];
                                        ?>
                                            <div class="col-2">
                                                <span class="titre2 text-uppercase t_bold float-end"><?php echo $marque ?></span>
                                            </div>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                        </div>

                                    </div>
                                </div>
  
                            </div>
                        </div>

                        <!-- Partie 3 -->
                        <div class="mt-4 contenu_gauche3_admin shadow bg_white container mx-2">
                            <div class="row mb-1">
                                <div class="col-6">
                                    <h4 class="text-uppercase pt-4 t_bold titre">Liste des véhicules</h4>
                                </div>
                                <div class="col-6">
                                    <span class="bg_black info_liste_car color_white mt-4">45</span>
                                </div>
                            </div>

                            <div class="row text-uppercase" style="margin-left: 15px">
                                <div class="col-6 liste_vehicule_admin mt-3">
                                    <div class="row liste2_vehicule_admin bg_gray2">
                                        <div class="col-2"><img class="img_logo_listeVoiture" src="../Image/voiture_test.jpg" alt="logo"></div>
                                        <div class="col-3">marque</div>
                                        <div class="col-3">Modele</div>
                                        <div class="col-4">Reference</div>
                                    </div>
                                </div>
                                <div class="col-6 liste_vehicule_admin mt-3">
                                    <div class="row liste2_vehicule_admin bg_gray2">
                                        <div class="col-2"><img class="img_logo_listeVoiture" src="../Image/voiture_test.jpg" alt="logo"></div>
                                        <div class="col-3">marque</div>
                                        <div class="col-3">Modele</div>
                                        <div class="col-4">Reference</div>
                                    </div>
                                </div>

                                <div class="col-6 liste_vehicule_admin mt-3">
                                    <div class="row liste2_vehicule_admin bg_gray2">
                                        <div class="col-2"><img class="img_logo_listeVoiture" src="../Image/voiture_test.jpg" alt="logo"></div>
                                        <div class="col-3">marque</div>
                                        <div class="col-3">Modele</div>
                                        <div class="col-4">Reference</div>
                                    </div>
                                </div>
                                <div class="col-6 liste_vehicule_admin mt-3">
                                    <div class="row liste2_vehicule_admin bg_gray2">
                                        <div class="col-2"><img class="img_logo_listeVoiture" src="../Image/voiture_test.jpg" alt="logo"></div>
                                        <div class="col-3">marque</div>
                                        <div class="col-3">Modele</div>
                                        <div class="col-4">Reference</div>
                                    </div>
                                </div>

                                <div class="col-6 liste_vehicule_admin mt-3">
                                    <div class="row liste2_vehicule_admin bg_gray2">
                                        <div class="col-2"><img class="img_logo_listeVoiture" src="../Image/voiture_test.jpg" alt="logo"></div>
                                        <div class="col-3">marque</div>
                                        <div class="col-3">Modele</div>
                                        <div class="col-4">Reference</div>
                                    </div>
                                </div>
                                <div class="col-6 liste_vehicule_admin mt-3">
                                    <div class="row liste2_vehicule_admin bg_gray2">
                                        <div class="col-2"><img class="img_logo_listeVoiture" src="../Image/voiture_test.jpg" alt="logo"></div>
                                        <div class="col-3">marque</div>
                                        <div class="col-3">Modele</div>
                                        <div class="col-4">Reference</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Droit -->
                    <div class="col-3 bg_green3 droit_admin_div">

                        <!-- Partie 1 -->
                        <div class="contenu_droit1_admin shadow bg_white">
                            <div class="row">
                                <div class="col-11">
                                    <h4 class="text-uppercase titre_droit_admin titre">Messages/Avis</h4>
                                </div>
                                <div class="col-1">
                                    <a href="avis.php" class="color_black"><i class="bi bi-three-dots fa-2x icone_droit_admin"></i></a>
                                </div>
                            </div>  

                            <div class="row liste_droit1_admin mx-2">
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                                <div class="col-8">
                                    <p>Demande d'information</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin"><?php echo date("m.d.y"); ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Partie 2 -->
                        <div class="contenu_droit2_admin shadow bg_white mt-4">
                            <div class="row">
                                <div class="col-11">
                                    <h4 class="text-uppercase titre_droit_admin titre">Derniers devis</h4>
                                </div>
                                <div class="col-1">
                                    <a href="devis.php" class="color_black"><i class="bi bi-three-dots fa-2x icone_droit_admin"></i></a>
                                </div>
                            </div> 

                            <!-- Pas plus de 14 devis -->
                            <div class="row liste_droit1_admin mx-2">
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                                <div class="col-8">
                                    <p>Référence</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Modèle</span>
                                </div>
                            </div>
                        </div>

                        <!-- Partie 3 -->
                        <div class="contenu_droit3_admin shadow bg_white mt-4">
                            <div class="row">
                                <div class="col-11">
                                    <h4 class="text-uppercase titre_droit_admin titre">Liste Clients</h4>
                                </div>
                                <div class="col-1">
                                    <a href="liste_client.php" class="color_black"><i class="bi bi-three-dots fa-2x icone_droit_admin"></i></a>
                                </div>
                            </div> 

                            <div class="row liste_droit1_admin mx-2">
                                <div class="col-8">
                                    <p>Nom Prénom</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Téléphone</span>
                                </div>
                                <div class="col-8">
                                    <p>Nom Prénom</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Téléphone</span>
                                </div>
                                <div class="col-8">
                                    <p>Nom Prénom</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Téléphone</span>
                                </div>
                                <div class="col-8">
                                    <p>Nom Prénom</p>
                                </div>
                                <div class="col-4">
                                    <span class="partie_droit_droit_admin">Téléphone</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        

<!-- Footer -->
<?php require('footer.php'); ?>