<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Liste des Avis'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <!-- Definir caractere max -->
        <section class="container mt-5">
            <div class="row mx-3">

                <!-- pas plus de 3 lignes -->
                <?php
                    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                    $page_no = $_GET['page_no'];
                    } else {
                        $page_no = 1;
                        }

                    $total_records_per_page = 12;
                    $offset = ($page_no-1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2"; 

                    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `avis`");
                    $total_records = mysqli_fetch_array($result_count);
                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $second_last = $total_no_of_pages - 1; // total page minus 1

                    $result = mysqli_query($con,"SELECT * FROM `avis` WHERE `verif_commentaire` = 0 LIMIT $offset, $total_records_per_page ");
                    while($afficheTot = mysqli_fetch_array($result)){
                        $idinscriptioTot= $afficheTot['id_inscription'];              
                        $commentaireTot= $afficheTot['commentaire'];      
                        $etoileTot= $afficheTot['etoile'];      
                        $dateCommentaireTot= $afficheTot['dateCommentaire'];
                        $timestamp = strtotime($dateCommentaireTot); 
                        $newDate = date("d-m-Y", $timestamp );      

                        $recupInscrit = mysqli_query($con,"SELECT * FROM `inscription` WHERE id='$idinscriptioTot' ");
                        if($rowrecupInscrit = mysqli_fetch_assoc($recupInscrit)){
                            $nom = $rowrecupInscrit['nom'];
                            $prenom = $rowrecupInscrit['prenom'];

                ?>
                <div class="col-3 bg_white shadow col_avis" style="margin-bottom: 50px;">
                    <div class="row text-uppercase mt-3 mx-2 t_bold" style="border-bottom: solid 2px black; padding-bottom: 10px">
                        <div class="col-12">
                            <small><span><?= $nom ?> <?= $prenom ?></span></small>
                        </div>
                        <div class="col-6">
                            <?php    
                                for ($j=0; $j<$etoileTot;$j++){
                            ?>
                                <small style="color: orange;"><i class="fa fa-star"></i></small>
                            <?php } ?>
                        </div>
                        <div class="col-6">
                            <small class="float-end" style="font-size:12px;margin-top:5px;"><?= $newDate ?></small>
                        </div>
                    </div>
                    <p class="texte_avis mx-2 mt-3" style="text-align: justify;height:120px;"><?= $commentaireTot ?></p>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn_avis bg-success">Valider</button>
                        </div>
                        <div class="col-6">
                            <button class="btn_avis bg-danger float-end">Refuser</button>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>

            </div>
        </section>

        <!-- Pagination -->
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