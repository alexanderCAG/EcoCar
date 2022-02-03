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
    <link rel="stylesheet" href="../Style/voiture_admin.css">
    <link rel="stylesheet" href="../Style/total_admin.css">
    <link rel="shortcut icon" href="../Image/">
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

<section class="header_tot bg_gray2">
    <a href="index.php"><img src="../Image/logo.png" alt="logo" class="img_logo_admin"></a>
    <!-- Pour devis -->
    <a href="">
        <div class="bg_white div_notif_admin">
            <i class="bi bi-bell-fill icone_notif"></i>
            <span>5</span>
            <div class="notif_admin"></div>
        </div>
    </a>
    <!-- Pour avis -->
    <a href="">
        <div class="bg_white div_notif_admin">
            <i class="bi bi-envelope-fill icone_notif"></i>
            <span>5</span>
            <div class="notif_admin"></div>
        </div>
    </a>
    <small><input type="text" class="recherche_header_admin bg_white" placeholder="Recherche rapide"></small>
    
    <div class="identification_con_admin">
        <a href="" class="text-decoration-none color_black redirection_con_admin">
            <img class="img_user_admin" src="../Image/voiture_test.jpg" alt="user">
            <span class="nom_admin">Nom Prenom</span>
        </a>
    </div>
    
</section>

  