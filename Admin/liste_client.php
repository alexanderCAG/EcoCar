<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Liste de clients'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <section class="mx-5" style="margin-top:-65px">
            <table class="table table-striped bg_white shadow" style="border-radius: 20px 20px 0 0; vertical-align:30px">
                <thead>
                    <tr>
                        <th scope="col" style="width:90px;"></th>
                        <th scope="col" style="width:170px;">Nom</th>
                        <th scope="col" style="width:170px;">Prenom</th>
                        <th scope="col" style="width:120px;">Permis</th>
                        <th scope="col" style="width:300px;">Email</th>
                        <th scope="col" style="width:120px;">Téléphone</th>
                        <th scope="col" style="width:120px;">Nb location</th>
                        <th scope="col" style="width:150px;"><i class="icone_listeBtnClient_th bi bi-three-dots fa-2x float-end"></i></th>
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

                        $total_records_per_page = 15;
                        $offset = ($page_no-1) * $total_records_per_page;
                        $previous_page = $page_no - 1;
                        $next_page = $page_no + 1;
                        $adjacents = "2"; 

                        $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `voiture`");
                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total page minus 1

                        $result = mysqli_query($con,"SELECT * FROM `inscription` WHERE administrateur='0' LIMIT $offset, $total_records_per_page ");
                        while($afficheTot = mysqli_fetch_array($result)){
                            $idTotInscription= $afficheTot['id'];
                            $nom= $afficheTot['nom'];
                            $prenom= $afficheTot['prenom'];
                            $email= $afficheTot['email'];
                            $phone= $afficheTot['phone'];

                            $recupNombreLocation = mysqli_query($con,"SELECT COUNT(*) AS tot_location FROM `admin` WHERE id_inscription_loue=$idTotInscription");
                            if($rowrecupNombreLocation = mysqli_fetch_assoc($recupNombreLocation)){
                                $valeurLocation = $rowrecupNombreLocation['tot_location'];
                            
                    ?>

                    <tr>
                        <td><i class="bi bi-person-circle fa-2x"></i></td>
                        <td><span class="text-uppercase"><?php echo $nom ?></span></td>
                        <td><span class="text-uppercase"><?php echo $prenom ?></span></td>
                        <td><span class="text-uppercase">Permis B</span></td>
                        <td><span><?php echo $email ?></span></td>
                        <td><span class="text-uppercase"><?php echo $phone ?></span></td>
                        <td><span><?php echo $valeurLocation ?></span></td>
                        <td>

                            <div class="statut_info_listeClient">
                                <div class="float-end" style="margin-right:-15px;">
                                    <a href="../Bdd/delete.php?idAcheteurDelete=<?php echo $idTotInscription ?>" class="border-0">
                                        <i class="bi bi-trash-fill bg-danger color_white ico_plus_liste"></i>
                                    </a>
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
        
        

<!-- Footer -->
<?php require('footer.php'); ?>