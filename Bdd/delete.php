
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
    $queryDeleteVoiture = mysqli_query($con, "delete from voiture WHERE id='$idVoiture'");
    $queryDeleteModel = mysqli_query($con, "delete from model WHERE id_voiture='$idVoiture'");
    $queryDeletePrix = mysqli_query($con, "delete from prix WHERE id_voiture='$idVoiture'");
    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/liste_voiture.php' </script>";
}

?>