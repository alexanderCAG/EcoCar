
<?php
    if(isset($_POST['submit_valider_ajoutVoiture'])){
        include("cnx.php");
        session_start();

        // $ajoutCategorie = $_POST['ajoutCategorie'];
        $ajoutMarque = $_POST['ajoutMarque'];
        $ajoutModele = $_POST['ajoutModele'];
        $ajoutReference = $_POST['ajoutReference'];
        $background_seller = $_POST['backgroundSeller'];
        $background_seller = substr($background_seller,1);
        $targetImg="../Image/";
        $targetImg=$targetImg.basename($_FILES['ajoutVoiture_img']['name']);
        $promo_choix = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 20 ,30, 40, 50);
        $aleatoire = rand('0', count($promo_choix)-1);
        $promo = $promo_choix[$aleatoire];

        $ajoutAutonomie = $_POST['ajoutAutonomie'];
        $ajoutPuissance = $_POST['ajoutPuissance'];
        $ajoutConsommation = $_POST['ajoutConsommation'];
        $ajoutPlace = $_POST['ajoutPlace'];

        $ajoutPrixJ = $_POST['ajoutPrixJ'];
        $ajoutPrixS = $_POST['ajoutPrixS'];
        $ajoutPrixM = $_POST['ajoutPrixM'];

        if(move_uploaded_file($_FILES['ajoutVoiture_img']['tmp_name'], $targetImg)){
            $ajoutVoitureID = mysqli_query($con, "SELECT * FROM `marque` WHERE marque='$ajoutMarque'");
            if($ajoutMqTot = mysqli_fetch_assoc($ajoutVoitureID)){
                $id_marque= $ajoutMqTot['id'];

                $ajoutVoitureInsert = mysqli_query($con,"INSERT INTO voiture (id_marque, modele, categorie, couleur, promotion, compteur_location, dispo, reference, image) 
                                    VALUES ('$id_marque', '$ajoutModele', 'Hybride', '$background_seller', '$promo', '0', '1', '$ajoutReference', '$targetImg')");

                    $rechercheVoitureID = mysqli_query($con, "SELECT * FROM voiture order by id desc LIMIT 1");
                    if($rechercheVoitureIDTot = mysqli_fetch_assoc($rechercheVoitureID)){
                        $idTot= $rechercheVoitureIDTot['id'];

                        $ajoutModelInsert = mysqli_query($con,"INSERT INTO model (id_voiture, autonomie, puissance, consommation, place) 
                                            VALUES ('$idTot', '$ajoutAutonomie', '$ajoutPuissance', '$ajoutConsommation', '$ajoutPlace')");
                        $ajoutPrixInsert = mysqli_query($con,"INSERT INTO prix (id_voiture, prixJour, prixSemaine, prixMois)
                                            VALUES ('$idTot', '$ajoutPrixJ', '$ajoutPrixS', '$ajoutPrixM')");

                        echo "<script language='javascript' type='text/javascript'> location.href='../Admin' </script>";            
                        
                    }
            }
        }
    }
?>