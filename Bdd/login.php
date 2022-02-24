

<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['username'];
        $password=$_POST['password'];

        $acheteurCon = mysqli_query($con, "select * from inscription where mdp='$password' and (email='$usermail' or nom='$usermail') and administrateur=0 ");
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
?>