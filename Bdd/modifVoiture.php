
<?php
    if(isset($_POST['submit_valider_modifVoiture'])){
        include("cnx.php");
        session_start();

        $modifCategorie = $_POST['modifCategorie'];
        $modifMarque = $_POST['modifMarque'];
        $modifModele = $_POST['modifModele'];
        $modifReference = $_POST['modifReference'];
        $background_seller = $_POST['background_seller'];
        $background_seller = substr($background_seller,1);
        $target_path="../Image/";
        $target_path=$target_path.basename($_FILES['modifVoiture_img']['name']);

        $modifAutonomie = $_POST['modifAutonomie'];
        $modifPuissance = $_POST['modifPuissance'];
        $modifConsommation = $_POST['modifConsommation'];
        $modifPlace = $_POST['modifPlace'];

        $modifPrixJ = $_POST['modifPrixJ'];
        $modifPrixS = $_POST['modifPrixS'];
        $modifPrixM = $_POST['modifPrixM'];

        $hideID = $_POST['hideID'];


        if(move_uploaded_file($_FILES['ajoutVoiture_img']['tmp_name'], $targetImg)){
            $modifVoiture = mysqli_query($con, "SELECT * FROM `marque` WHERE marque='$modifMarque'");
            if($modifMqTot = mysqli_fetch_assoc($modifVoiture)){
                $id_marque= $modifMqTot['id'];

                if (!empty($_FILES['modifVoiture_img']['name']))
                {
                    $UpdateModifVoiture = mysqli_query($con, "UPDATE voiture SET id_marque='$id_marque', modele='$modifModele', categorie='$modifCategorie'
                                            , reference='$modifReference', couleur='$background_seller', image='$target_path' WHERE id='$hideID'");
                    $UpdateModifPrix = mysqli_query($con, "UPDATE prix SET prixJour='$modifPrixJ', prixSemaine='$modifPrixS', prixMois='$modifPrixM'
                                            WHERE id_voiture='$hideID'");
                    $UpdateModifModel = mysqli_query($con, "UPDATE model SET autonomie='$modifAutonomie', puissance='$modifPuissance'
                                            consommation='$modifConsommation', place='$modifPlace' WHERE id_voiture='$hideID'");

                    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/liste_voiture.php' </script>";            
                }else{
                    $UpdateModifVoiture = mysqli_query($con, "UPDATE voiture SET id_marque='$id_marque', modele='$modifModele', categorie='$modifCategorie'
                                            , reference='$modifReference', couleur='$background_seller' WHERE id='$hideID'");
                    $UpdateModifPrix = mysqli_query($con, "UPDATE prix SET prixJour='$modifPrixJ', prixSemaine='$modifPrixS', prixMois='$modifPrixM'
                                            WHERE id_voiture='$hideID'");
                    $UpdateModifModel = mysqli_query($con, "UPDATE model SET autonomie='$modifAutonomie', puissance='$modifPuissance'
                                            , consommation='$modifConsommation', place='$modifPlace' WHERE id_voiture='$hideID'");

                    echo "<script language='javascript' type='text/javascript'> location.href='../Admin/liste_voiture.php' </script>";
                }

            }
        }
    }
?>