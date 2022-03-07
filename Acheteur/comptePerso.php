<!-- Header -->
<?php 
    require('header.php');
    require('navbar.php');

    $id_session=$_SESSION['emailUser'];

    $infoPerso = mysqli_query($con, "SELECT * FROM `inscription` WHERE email='$id_session'");

?>

<section class="compteBande">
    <h1 class="text-uppercase color_white titreBande" id="titreBande"></h1>
</section>

<section class="bg-light">
    <div class="container card rounded shadow my-5">
        <!-- alert (notif) -->
        <div class="alert alert-success notif_like" role="alert">
            <i class="bi bi-patch-check-fill"></i> &nbsp; Ajouté aux favoris
        </div>
        <form action="../Bdd/infoPerso.php" method="POST">
            <div class="row m-4">
                <div class="col-md-12">
                <?php
                    if($infoPersoTot = mysqli_fetch_assoc($infoPerso)){
                        $nomInscription= $infoPersoTot['nom'];
                        $prenomInscription= $infoPersoTot['prenom'];
                        $idInscription= $infoPersoTot['id'];
                        $phoneInscription= $infoPersoTot['phone'];
                        $emailInscription= $infoPersoTot['email'];
                        $mdpInscription= $infoPersoTot['mdp'];
                ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend rounded-left">
                                    <span class="input-group-text bg_green1 text-light rounded-left" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nom" id="NomUser" name="NomUser" value="<?= $nomInscription ?>">
                            </div>
                            <small><span class="font-weight-light text-danger pb-3" id="ErreurNom"></span></small> <br>

                            <div class="input-group">
                                <div class="input-group-prepend rounded-left">
                                    <span class="input-group-text bg_green1 text-light rounded-left" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" id="EmailUser" name="EmailUser" value="<?= $emailInscription?>">
                            </div>
                            <small><span class="font-weight-light text-danger pb-3" id="ErreurEmail"></span></small> <br>

                            <div class="input-group ">
                                <div class="input-group-prepend rounded-left">
                                    <span class="input-group-text bg_green1 text-light rounded-left" id="basic-addon1"><i class="bi bi-unlock"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Mot de passe" id="MdpUser" name="MdpUser" value="<?= $mdpInscription ?>">
                            </div>
                            <small><span class="font-weight-light pb-3" id="ErreurMdp"  style="color:red"></span></small> <br>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend rounded-left">
                                    <span class="input-group-text bg_green1 text-light rounded-left" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Prénom" id="PrenomUser" name="PrenomUser" value="<?= $prenomInscription ?>">
                            </div>
                            <small><span class="font-weight-light text-danger pb-3" id="ErreurPrenom"></span></small> <br>

                            <div class="input-group">
                                <div class="input-group-prepend rounded-left">
                                    <span class="input-group-text bg_green1 text-light rounded-left" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Téléphone" id="TelephoneUser" name="TelephoneUser" value="<?= $phoneInscription ?>">
                            </div>
                            <small><span class="font-weight-light text-danger pb-3" id="ErreurTelephone"></span></small> <br>

                            <div class="input-group">
                                <div class="input-group-prepend rounded-left">
                                    <span class="input-group-text bg_green1 text-light rounded-left" id="basic-addon1"><i class="bi bi-lock"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Resaisir le mot de passe" id="Mdp2User" name="Mdp2User" value="<?= $mdpInscription ?>">
                            </div>
                            <small><span class="font-weight-light pb-3" id="ErreurMdp2" style="color:red"></span></small> <br>
                        </div>
                    </div>
                    <input type="hidden" name="IDuser" value="<?= $idInscription ?>">
                    <button type="submit" name="UserModifInfo" id="UserModifInfo" class="btn text-light bg_green1 text-uppercase font-weight-light mt-3 w-100">Mettre à jour</button>
                <?php
                    }
                ?>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<?php require('footer.php'); ?>