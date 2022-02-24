

<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['username'];
        $password=$_POST['password'];

        $acheteurCon = mysqli_query($con, "select * from inscription where mdp='$password' and (email='$usermail' or nom='$usermail') and administrateur=0 ");
		$adminCon = mysqli_query($con, "select * from inscription where mdp='$password' and (email='$usermail' or nom='$usermail') and administrateur=1 ");

        // INSERT INTO buyer (lastname,firstname,phone,email,passworde,adress1,adress2,city,zip_code,country) 
		// 		VALUES ('$nom_acheteur','$prenom_acheteur','$telephone_acheteur','$mail_acheteur','$mdp_acheteur','$adresse1_acheteur','$adresse2_acheteur','$ville_acheteur','$codepostal_acheteur','$pays_acheteur')"

        // verifie the different connection
        if (mysqli_num_rows($acheteurCon) != 0){
            $_SESSION['emailUser']=$usermail;
            echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
        }
        elseif (mysqli_num_rows($adminCon) != 0){
            $_SESSION['emailUser']=$usermail;
            echo "<script language='javascript' type='text/javascript'> location.href='../Admin' </script>";
        }else{
            echo "<script language='javascript' type='text/javascript'> location.href='../Base/connexion.php' </script>";
        }
    }

?>