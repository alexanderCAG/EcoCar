

<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['username'];
        $password=$_POST['password'];

        $acheteurCon = mysqli_query($con, "insert * from inscription where mdp='$password' and (email='$usermail' or nom='$usermail') and administrateur=0 ");
		$adminCon = mysqli_query($con, "select * from inscription where mdp='$password' and (email='$usermail' or nom='$usermail') and administrateur=1 ");

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

    if (isset($_POST['inscription'])){

        include("cnx.php");
        session_start();
        $usernom=$_POST['nom'];
        $userprenom=$_POST['prenom'];
        $userphone=$_POST['telephone'];
        $userdate=$_POST['date_permis'];
        $useremail=$_POST['email'];
        $usermdp=$_POST['mdp'];
        // $useradmin='0';

        $userInscription = mysqli_query($con,"INSERT INTO inscription (nom, prenom, email, phone, datePermis, mdp, administrateur) 
                            VALUES ('$usernom', '$userprenom', '$userphone', '$userdate', '$useremail', '$usermdp', '0')");

        // redirection vers la page connexion
        // if($con->query($userInscription)===true){
            echo "<script language='javascript' type='text/javascript'> location.href='../Base/connexion.php'</script>";
        // }
        // else{
        //     echo "<script language='javascript' type='text/javascript'> location.href='../Base/inscription.php'</script>";
        // }
    }



?>