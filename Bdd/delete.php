
<?php

if(isset($_GET['idAvis'])){
    include("cnx.php");
    session_start();

    $idAvis = $_GET['idAvis'];
    $queryDeleteItem = mysqli_query($con, "delete from avis WHERE id='$idAvis'");
    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/avis.php' </script>";
}

if(isset($_GET['idVoitureDelete'])){
    include("cnx.php");
    session_start();

    $idVoiture = $_GET['idVoitureDelete'];
    
    $queryDeleteModel = mysqli_query($con, "delete from model WHERE id_voiture='$idVoiture'");
    $queryDeletePrix = mysqli_query($con, "delete from prix WHERE id_voiture='$idVoiture'");
    $queryDeleteVoiture = mysqli_query($con, "delete from voiture WHERE id='$idVoiture'");
    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/liste_voiture.php' </script>";
}

if(isset($_GET['idAcheteurDelete'])){
    include("cnx.php");
    session_start();

    $idAcheteurDelete = $_GET['idAcheteurDelete'];
    
    $queryDeleteItemAvis = mysqli_query($con, "delete from avis WHERE id_inscription='$idAcheteurDelete'");
    $queryDeleteItemAdmin = mysqli_query($con, "delete from admin WHERE id_inscription_loue ='$idAcheteurDelete'");
    $queryDeleteItemInscription = mysqli_query($con, "delete from inscription WHERE id='$idAcheteurDelete'");
    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/liste_client.php' </script>";
}

?>