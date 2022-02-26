
<?php

if(isset($_GET['idVoiture']) && isset($_GET['idInscrit'])){
    include("cnx.php");
    session_start();

    $idVoiture=$_GET['idVoiture'];
    $idInscrit=$_GET['idInscrit'];

    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) 
                            VALUES ('$idVoiture', '$idInscrit', '369')");

    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0' WHERE id='$idVoiture'");


    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
}


?>