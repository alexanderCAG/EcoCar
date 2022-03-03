<?php 
    require('header.php');

?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Les devis'; 
            require('haut_admin.php'); 
        ?>

        <!-- Partie Centrale contenu -->
        <section>

            <div class="contenu_devis_tot mx-3 mt-3">
                <div class="row mx-2">

                    <!-- Pas plus de 4 -->
                <?php
                    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                    $page_no = $_GET['page_no'];
                    } else {
                        $page_no = 1;
                        }

                    $total_records_per_page = 8;
                    $offset = ($page_no-1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2"; 

                    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `admin`");
                    $total_records = mysqli_fetch_array($result_count);
                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $second_last = $total_no_of_pages - 1; // total page minus 1

                    $result = mysqli_query($con,"SELECT * FROM `admin` LIMIT $offset, $total_records_per_page ");
                    while($afficheTot = mysqli_fetch_array($result)){
                        $idvoitureloueTot= $afficheTot['id_voiture_loue'];              
                        $idinscriptionloueTot= $afficheTot['id_inscription_loue'];          
                        $prixvoitureTot= $afficheTot['prix_voiture'];

                        $recupInscrit = mysqli_query($con,"SELECT * FROM `inscription` WHERE id='$idinscriptionloueTot' ");
                        if($rowrecupInscrit = mysqli_fetch_assoc($recupInscrit)){
                            $nom = $rowrecupInscrit['nom'];
                            $prenom = $rowrecupInscrit['prenom'];

                            $recupVoiture = mysqli_query($con,"SELECT * FROM `voiture` WHERE id='$idvoitureloueTot' ");
                            if($rowrecupVoiture = mysqli_fetch_assoc($recupVoiture)){
                                $image = $rowrecupVoiture['image'];
                ?>
                    <div class="col-6 mb-4">
                        <div class="row row_devis bg_white shadow">
                            <div class="col-4">
                                <img src="<?= $image ?>" alt="last vehicule" class="img_devis">
                            </div>
                            <div class="col-8">
                                <div class="devis_texteUp text-uppercase titre">
                                    <h5>Dernier devis enregistré</h5>
                                    <h6><?= $nom ?> <?= $prenom ?></h6>
                                    <p class="prix_devis"><span><?= $prixvoitureTot ?></span>€</p>
                                </div>
                                <p class="texte_devis">im placeat neque debitis, tenetur nisi aliquam eaque! Soluta?</p>
                                <div class="info_devis text-uppercase">
                                    <i class="bi bi-shield-fill-check fa-2x color_green1"></i>
                                    <small><span>Garantie 24 mois | 2021 | 14 137 km</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                            }
                        }
                    }
                ?>

                </div>
            </div>

        </section>

        <?php 

        ?>
        <section style="margin-top:100px; margin-bottom:118px;">
            <nav aria-label="Page navigation example">                
                <ul class="pagination justify-content-center">
                    <?php
                        if($page_no > 1){ echo "<li class='page-item'><a class='page-link' href='?page_no=1>&#139;&#139; First Page</a></li>"; } 
                    ?>  
                    
                    <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled page-item'"; } ?>>
                        <a class="page-link" <?php if($page_no > 1){ echo "href='?page_no=$previous_page"; } ?>>Previous</a>
                    </li>

                    <?php require('pagination.php');?>
                    
                    <li class='page-item' <?php if($page_no >= $total_no_of_pages){ echo "class='disabled page-item'"; } ?>>
                        <a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page"; } ?>>Next</a>
                    </li>
                    <?php if($page_no < $total_no_of_pages){
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages>Last &rsaquo;&rsaquo;</a></li>";
                    } ?>
                </ul>
            </nav>
        </section>

        
        

<!-- Footer -->
<?php require('footer.php'); ?>