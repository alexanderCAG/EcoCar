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
    <link rel="stylesheet" href="../Style/navbar.css">
    <link rel="stylesheet" href="../Style/accueil.css">
    <link rel="stylesheet" href="../Style/footer.css">
    <link rel="stylesheet" href="../Style/connexion.css">
    <link rel="stylesheet" href="../Style/inscription.css">
    <link rel="stylesheet" href="../Style/categorie.css">
    <link rel="stylesheet" href="../Style/presentation.css">
    <link rel="stylesheet" href="../Style/detail_voiture.css">
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



        
    <link rel="stylesheet" href="https://static.aliasdmc.fr/css/mini_codepen.css">

</head>

<body class="body">

<?php
    include("../Bdd/cnx.php");
    session_start();
?>

  