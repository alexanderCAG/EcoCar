
<?php

    if(isset($_POST['submit_valider_infoPerso'])){
        include("cnx.php");
        session_start();

        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $id = $_POST['idUser'];

        $UpdateModifVoiture = mysqli_query($con, "UPDATE inscription SET phone='$phone', email='$email', mdp='$mdp' WHERE id='$id'");

        echo "<script language='javascript' type='text/javascript'> location.href='../Admin/compte_admin.php' </script>";

    }
    
?>