

<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['username'];
        $password=$_POST['password'];

        $acheteurCon = mysqli_query($con, "select * from inscription where mdp='$password' and email='$usermail' and administrateur=0 ");
		$adminCon = mysqli_query($con, "select * from inscription where mdp='$password' and email='$usermail' and administrateur=1 ");

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
        $useremail=$_POST['email'];
        $usermdp=$_POST['mdp'];

        $userInscription = mysqli_query($con,"INSERT INTO inscription (nom, prenom, email, phone, mdp, administrateur) 
                            VALUES ('$usernom', '$userprenom', '$useremail', '$userphone', '$usermdp', '0')");

        echo "<script language='javascript' type='text/javascript'> location.href='../Base/connexion.php'</script>";
    }



?>