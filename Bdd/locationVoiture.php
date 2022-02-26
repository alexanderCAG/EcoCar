
<?php

// if(isset($_GET['idVoiture']) && isset($_GET['idInscrit'])){
//     include("cnx.php");
//     session_start();

//     $idVoiture=$_GET['idVoiture'];
//     $idInscrit=$_GET['idInscrit'];

//     $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) 
//                             VALUES ('$idVoiture', '$idInscrit', '369')");

//     $recupInfoCompteur = mysqli_query($con, "SELECT compteur_location FROM voiture WHERE id='$idVoiture'");
//     if($InfoCompteur = mysqli_fetch_assoc($recupInfoCompteur)){
//         $compteur_location = $InfoCompteur['compteur_location'];
//         $compteur_location ++ ;

//         $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");


//         echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";

//     }
// }

if(isset($_POST['btnLocation'])){

    include("cnx.php");
    session_start();

    $dateDebut=$_POST['dateDebut'];
    $dateFin=$_POST['dateFin'];
    $idVoiture=$_POST['idVoiture'];
    $idInscrit=$_POST['idInscription'];

    // $jour = $dateFin->diff($dateDebut)->format('%d');
    $jour = strtotime($dateFin) - strtotime($dateDebut);

    var_dump(strtotime($dateFin));
    var_dump(strtotime($dateDebut));

    $jour = $jour / 86400;
    var_dump($jour);

    $recupPrix = mysqli_query($con, "SELECT * FROM prix WHERE id='$idVoiture'");
    if($InfoRecupPrix = mysqli_fetch_assoc($recupPrix)){
        $prixJour = $InfoRecupPrix['prixJour'];
        $prixSemaine = $InfoRecupPrix['prixSemaine'];
        $prixMois = $InfoRecupPrix['prixMois'];

        $recupInfoCompteur = mysqli_query($con, "SELECT * FROM voiture WHERE id='$idVoiture'");
        if($InfoCompteur = mysqli_fetch_assoc($recupInfoCompteur)){
            $compteur_location = $InfoCompteur['compteur_location'];
            $promotion = $InfoCompteur['promotion'];
            $compteur_location ++ ;

            if($promotion!=0){
                // Jour
                if($jour>0 && $jour<=7){
                    $calculPrix = ($prixJour - ( $prixJour * ($promotion/100)))*$jour;

                    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) VALUES ('$idVoiture', '$idInscrit', '$calculPrix')");
                    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");
                    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
                }
                // Semaine
                else if($jour>7 && $jour<=28){
                    $jour = $jour / 7;
                    $calculPrix = ($prixSemaine - ( $prixSemaine * ($promotion/100)))*$jour;

                    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) VALUES ('$idVoiture', '$idInscrit', '$calculPrix')");
                    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");
                    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
                }
                // Mois
                else if($jour>28){
                    $jour = $jour / 28;
                    $calculPrix = ($prixMois - ( $prixMois * ($promotion/100)))*$jour;

                    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) VALUES ('$idVoiture', '$idInscrit', '$calculPrix')");
                    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");
                    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
                }
            }else{
                // Jour
                if($jour>0 && $jour<=7){
                    $calculPrix = $jour * $prixJour;
    
                    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) VALUES ('$idVoiture', '$idInscrit', '$calculPrix')");
                    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");
                    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
                }
                // Semaine
                else if($jour>7 && $jour<=28){
                    $jour = $jour / 7;
                    $calculPrix = $jour * $prixSemaine;
    
                    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) VALUES ('$idVoiture', '$idInscrit', '$calculPrix')");
                    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");
                    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
                }
                // Mois
                else if($jour>28){
                    $jour = $jour / 28;
                    $calculPrix = $jour * $prixMois;
    
                    $inscritAdmin = mysqli_query($con,"INSERT INTO admin (id_voiture_loue, id_inscription_loue, prix_voiture) VALUES ('$idVoiture', '$idInscrit', '$calculPrix')");
                    $updateVoiture = mysqli_query($con, "UPDATE voiture SET dispo='0', compteur_location='$compteur_location' WHERE id='$idVoiture'");
                    echo "<script language='javascript' type='text/javascript'> location.href='../Acheteur' </script>";
                }
            }

            

        
        }
    }
}


?>