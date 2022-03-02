<?php 
    require('header.php');

    $idVoiture=$_GET['idVoiture'];

    $afficheVoiture = mysqli_query($con, "SELECT * FROM `voiture` WHERE id='$idVoiture'");
    $afficheVoiture2 = mysqli_query($con, "SELECT * FROM `model` WHERE id_voiture='$idVoiture'");

?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Détails Voiture'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <?php
            if($afficheVoitureTot = mysqli_fetch_assoc($afficheVoiture)){
                $modele= $afficheVoitureTot['modele'];
                $reference= $afficheVoitureTot['reference'];
                $couleur= $afficheVoitureTot['couleur'];
                $categorie= $afficheVoitureTot['categorie'];
                $image= $afficheVoitureTot['image'];
                $compteur_location= $afficheVoitureTot['compteur_location'];
                $id_marque= $afficheVoitureTot['id_marque'];

                $afficheVoiture3 = mysqli_query($con, "SELECT * FROM `marque` WHERE id='$id_marque'");

                if($afficheVoiture2Tot = mysqli_fetch_assoc($afficheVoiture2)){
                    $autonomie= $afficheVoiture2Tot['autonomie'];
                    $puissance= $afficheVoiture2Tot['puissance'];
                    $consommation= $afficheVoiture2Tot['consommation'];
                    $place= $afficheVoiture2Tot['place'];

                    if($afficheVoiture3Tot = mysqli_fetch_assoc($afficheVoiture3)){
                        $marque= $afficheVoiture3Tot['marque'];
        ?>
        <div class="card p-2 mt-3 shadow" style="width:96%;margin-left:2%;border-radius:10px;margin-bottom:492px">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="h-100 bg_green1 pt-3" style="height:60px!important;">
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="text-uppercase titre font-weight-bold float-right" style="float:right; line-height:60px">Réf: <?= $reference ?> &nbsp;</h3>
                </div>
            </div><br>
            <h1 class="titre t_bold" >&nbsp;<?= $marque ?> <?= $modele ?><br></h1>
            <h5 class="" >&nbsp; <?= $compteur_location ?> locations <br></h5>
            <div class="row container mt-3 my-5">
                <div class="col-md-6">
                    <img src="<?= $image ?>" class="img-responsive rounded mt-2" style="width:600px; height:390px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-charging-station color_green1"></i> Catégorie <span class="font-weight-bold" style="float:right;">  <?= $categorie ?></span></li>
                        <li class="list-group-item"><i class="fas fa-battery-three-quarters color_green1"></i> Autonomie <span style="float:right;"> <?= $autonomie ?> Km</span></li>
                        <li class="list-group-item"><i class="fas fa-bolt color_green1"></i> Puissance <span style="float:right;"> <?= $puissance ?> ch</span></li>
                        <li class="list-group-item"><i class="fas fa-tachometer-alt-fastest color_green1"></i> Consommation <span style="float:right;"> <?= $consommation ?> kwH/100km  </span></li>
                        <li class="list-group-item"><i class="fas fa-users color_green1"></i> Nombre de place <span style="float:right;"> <?= $place ?> places  </span></li>
                        <li class="list-group-item"><i class="fas fa-palette color_green1"></i> Couleur <span style="float:right;">  <i class="fas fa-tint" style="color:#<?= $couleur ?>"></i> <i class="fas fa-tint" style="color:#<?= $couleur ?>"></i> <i class="fas fa-tint" style="color:#<?= $couleur ?>"></i></span></li>
                        <li class="list-group-item"></li>
                    </ul><br>
                    &nbsp; &nbsp; Notes:  
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i> <small class="text-mutted">(Voir les commentaires)</small>
                    <br>  
                </div>
            </div>
            <?php
                        }
                    }
                }
            ?>
            <!-- <div class="row m-2 p-2" style="border:3px solid #33985d;border-left:none;border-right:none;border-bottom:none;">
                <div class="col-md-12">
                    <a href="" class="btn bg-success float-right text-light text-uppercase" style="float:right;"> Modifier</a>
                    <a href="" class="btn bg-success float-right text-light mx-4 text-uppercase" style="float:right;"> Accèder à la page</a>
                </div>
            </div> -->
        </div>  
        

<!-- Footer -->
<?php require('footer.php'); ?>