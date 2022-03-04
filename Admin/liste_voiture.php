<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Total de location des véhicules'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <section class="mx-5" style="margin-top:-65px">
            <table class="table table-striped bg_white shadow" style="border-radius: 20px 20px 0 0; vertical-align:30px">
                <thead>
                    <tr>
                    <th scope="col" style="width:90px;"></th>
                    <th scope="col" style="width:120px;">Catégorie</th>
                    <th scope="col" style="width:170px;">Marque</th>
                    <th scope="col" style="width:130px;">Référence</th>
                    <th scope="col" style="width:130px;">Modèle</th>
                    <th scope="col" style="width:100px;">Couleur</th>
                    <th scope="col" style="width:100px;">Location</th>
                    <th scope="col" style="width:100px;">Pormotion</th>
                    <th scope="col" style="width:150px;">Statut</th>
                    <th scope="col" style="width:150px;"><i class="icone_listeBtnVoiture_th bi bi-three-dots fa-2x float-end"></i></th>
                    </tr>
                </thead>
                <!-- Pas plus de 15 lignes -->
                <!-- Ne pas oublier de blinder ou max les carac par colonne -->
                <tbody>

                    <?php
                        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                        $page_no = $_GET['page_no'];
                        } else {
                        $page_no = 1;
                        }

                        $total_records_per_page = 14;
                        $offset = ($page_no-1) * $total_records_per_page;
                        $previous_page = $page_no - 1;
                        $next_page = $page_no + 1;
                        $adjacents = "2"; 

                        $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `voiture`");
                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total page minus 1

                        $result = mysqli_query($con,"SELECT * FROM `voiture` LIMIT $offset, $total_records_per_page ");
                        while($afficheTot = mysqli_fetch_array($result)){
                            $idTotVoiture= $afficheTot['id'];
                            $id_marque= $afficheTot['id_marque'];
                            $image= $afficheTot['image'];
                            $categorie= $afficheTot['categorie'];
                            $reference= $afficheTot['reference'];
                            $modele= $afficheTot['modele'];
                            $couleur= $afficheTot['couleur'];
                            $compteur_location= $afficheTot['compteur_location'];
                            $promotion= $afficheTot['promotion'];
                            $dispo= $afficheTot['dispo'];

                            $recupVoiture = mysqli_query($con,"SELECT * FROM `marque` WHERE id='$id_marque' ");
                            if($rowrecupVoiture = mysqli_fetch_assoc($recupVoiture)){
                                $marque = $rowrecupVoiture['marque'];

                    ?>
                    <tr>
                        <td><img class="img_listeVoiture" src="<?= $image ?>" alt="user"><input type="hidden" name="idVoiture"></td>
                        <td><span><?= $categorie ?></span></td>
                        <td><span class="text-uppercase"><?= $marque ?></span></td>
                        <td><span class="text-uppercase"><?= $reference ?></span></td>
                        <td><span class="text-uppercase"><?= $modele ?></span></td>
                        <td><div class="text-uppercase shadow" style="width:20px;height:20px;background-color:#<?= $couleur ?>;border: solid 1px black; border-radius:30px;"></div></td>
                        <td><span><?= $compteur_location ?></span></td>
                        <td><span class="text-uppercase"><?= $promotion ?></span>%</td>
                        <td>
                            <?php
                                if($dispo==1){
                            ?>
                            <div class="statut_info_listeVoiture bg-success color_white "><span>Disponible</span></div>
                            <?php
                                }else if($dispo==0){
                            ?>
                            <div class="statut_info_listeVoiture bg-warning color_white"><span>En location</span></div>
                            <?php
                                }
                            ?>
                        </td>
                        <td>

                            <div class="statut_info_listeVoiture">
                                <div class="row">
                                    <div class="col-4">
                                        <a type="button" href="afficherVoiture.php?idVoiture=<?= $idTotVoiture ?>" class="text-decoration-none">
                                            <i class="bi bi-file-earmark-fill bg-success color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a type="button" href="modifVoiture.php?idVoiture=<?= $idTotVoiture ?>" class="text-decoration-none">
                                            <i class="bi bi-pencil-square bg-success color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a type="button" href="../Bdd/delete.php?idVoitureDelete=<?= $idTotVoiture ?>" class="text-decoration-none">
                                            <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>

                </tbody>
            </table>
        </section>

        <!-- Pagination -->
        <section style="margin-top:100px; margin-bottom:90px;">
            <nav aria-label="Page navigation example">                
                <ul class="pagination justify-content-center">
                    <?php
                        if($page_no > 1){ echo "<li class='page-item'><a class='page-link' href='?page_no=1'> &#139;&#139; First Page</a></li>"; } 
                    ?>
                    
                    <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled page-item'"; } ?>>
                        <a class="page-link" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
                    </li>

                    <?php require('pagination.php');?>

                    <li class='page-item' <?php if($page_no >= $total_no_of_pages){ echo "class='disabled page-item'"; } ?>>
                        <a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                    </li>
                    <?php if($page_no < $total_no_of_pages){
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                    } ?>
                </ul>
            </nav>
        </section>
        <!-- <section style="margin-top:70px; margin-bottom:55px;">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section> -->
        
        

<!-- Footer -->
<?php require('footer.php'); ?>