<!-- Header -->
<?php 
    require('header.php');
    require('navbar.php');

    $Session=$_SESSION['emailUser'];

    $infoUser = mysqli_query($con, "SELECT * FROM `inscription` WHERE email='$Session'");

?>

<section>
    <div class="historiqueTot bg_green1">
        <h1 class="text-uppercase color_white titreTot">Historique <br> des véhicules</h1>
    </div>
</section>

<section>
    <div class="container mt-5 mb-5">
        <div class="row">
        <?php
                
            if ($rowinfoUser = mysqli_fetch_assoc($infoUser)){
                $idMail = $rowinfoUser['id'];

                $countHistorique = mysqli_query($con, "SELECT count(id_inscription_loue) as tot_histo FROM `admin` WHERE `id_inscription_loue`='$idMail'");
                if($countHistoriqueTot = mysqli_fetch_assoc($countHistorique)){
                    $tot_histo= $countHistoriqueTot['tot_histo'];
                    for($i=0;$i<$tot_histo;$i++){
                    
                        $infoHistorique = mysqli_query($con, "SELECT id_voiture_loue, id_inscription_loue, prix_voiture, marque , modele, reference, image
                                                                FROM admin,voiture, marque
                                                                WHERE voiture.id = admin.id_voiture_loue
                                                                AND voiture.id_marque = marque.id
                                                                AND id_inscription_loue = '$idMail'");
                        if($infoHistoriqueTot = mysqli_fetch_assoc($infoHistorique)){
                            $id_voiture_loue= $infoHistoriqueTot['id_voiture_loue'];
                            $prix_voiture= $infoHistoriqueTot['prix_voiture'];
                            $modele= $infoHistoriqueTot['modele'];
                            $reference= $infoHistoriqueTot['reference'];
                            $image= $infoHistoriqueTot['image'];
                            $marque= $infoHistoriqueTot['marque'];

        ?>
            <div class="col-3 card afficheHistorique shadow">
                <img src="<?= $image ?>" alt="" class="imgHistorique">
                <p class="mt-2" style="font-size: 22px"><?= $marque ?> <?= $modele ?></p>
                <p style="font-size: 18px;margin-top:-15px">Référence : <?= $reference ?></p>
                <p style="font-size: 18px;">Prix de location : <?= $prix_voiture ?> €</p>
            </div>
        <?php
                        }
                    }
                }
            }
        ?>
        </div>
    </div>
</section>



<!-- Footer -->
<?php require('footer.php'); ?>