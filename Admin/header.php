<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Define my title -->
    <title>
        <?php if(isset($title)): ?>
            <?= $title; ?>
        <?php else: ?>
            EcoCar
        <?php endif ?>
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="../Style/general.css">
    <link rel="stylesheet" href="../Style/header_admin.css">
    <link rel="stylesheet" href="../Style/sidebar.css">
    <link rel="stylesheet" href="../Style/accueil_admin.css">
    <link rel="stylesheet" href="../Style/footer_admin.css">
    <link rel="stylesheet" href="../Style/total_admin.css">
    <link rel="shortcut icon" href="../Image/logo2.png">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    
    <!-- Icon Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body class="body">

<?php
    include("../Bdd/cnx.php");
    session_start();

    $idSession=$_SESSION['emailUser'];
    $infoHeader = mysqli_query($con, "SELECT * FROM `inscription` WHERE email='$idSession'");
?>
<form action="recherche.php" method="POST">
    <section class="header_tot bg_gray2">
        <a href="index.php"><img src="../Image/logo.png" alt="logo" class="img_logo_admin"></a>
        <!-- Pour devis -->
        <a href="devis.php">
            <div class="bg_white div_notif_admin">
                <i class="bi bi-bell-fill icone_notif"></i>
                <span>5</span>
                <div class="notif_admin"></div>
            </div>
        </a>
        <!-- Pour avis -->
        <a href="avis.php">
            <div class="bg_white div_notif_admin">
                <i class="bi bi-envelope-fill icone_notif"></i>
                <span>5</span>
                <div class="notif_admin"></div>
            </div>
        </a>
        <!-- Pour la recherche -->
        <small><input type="text" name="rechercher" class="recherche_header_admin bg_white" placeholder="Recherche rapide"></small>
        <button type="submit" name="btnRechercher" class="btn_recherche_admin">Rechercher</button>
        

        <div class="identification_con_admin">
            <a href="compte_admin.php" class="text-decoration-none color_black redirection_con_admin">
                <img class="img_user_admin" src="../Image/logo2.png" alt="user">
                <?php
                    if($infoHeaderTot = mysqli_fetch_assoc($infoHeader)){
                        $nom= $infoHeaderTot['nom'];
                        $prenom= $infoHeaderTot['prenom'];
                ?>
                <span class="nom_admin"><?= $prenom ?> <?= $nom ?></span>
                <?php
                    }
                ?>
            </a>
        </div>
        
    </section>
</form>
  