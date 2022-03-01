
<?php

if(isset($_GET['idAvis'])){
    include("cnx.php");
    session_start();

    $idAvis = $_GET['idAvis'];
    $queryDeleteItem = mysqli_query($con, "delete from avis WHERE id='$idAvis'");
    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/avis.php' </script>";
}

?>