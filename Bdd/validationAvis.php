
<?php

if(isset($_POST['valideAvis'])){
    include("cnx.php");
    session_start();

    $idAvis = $_POST['idAvis'];
    $UpdateValideAvis = mysqli_query($con, "UPDATE avis SET verif_commentaire='1' WHERE id='$idAvis'");
    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/avis.php' </script>";
}

?>