<?php 
    require('header.php');

    $totalMarque = mysqli_query($con, "SELECT count(DISTINCT(marque)) as total_marque FROM `marque`");
?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Nos marques partenaires'; 
            require('haut_admin.php'); 
        ?>

        <!-- Partie Centrale contenu -->
        <section>
            <div class="row mx-2 mt-3">
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

                        $result_count = mysqli_query($con,"SELECT COUNT(DISTINCT(marque)) As total_records FROM `marque`");
                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total page minus 1

                        $result = mysqli_query($con,"SELECT * FROM `marque` LIMIT $offset, $total_records_per_page ");
                        while($afficheTot = mysqli_fetch_array($result)){
                            $logoMarque= $afficheTot['logo'];

                    ?>
                <div class="col col-4 mb-5 px-2" style="height: 300px">
                    <img src="<?= $logoMarque ?>" alt="" width="100%" height="300px">
                </div>
                <?php
                    }
                ?>
            </div>
            <!-- <table class="table table_marque">
                <tbody>
                    <tr>
                        <td class="img_marque_liste" rowspan="2" colspan="2"></td>
                        <td class="img_marque_liste"></td>
                        <td class="img_marque_liste"></td>
                    </tr>
                    <tr>
                        <td class="img_marque_liste"></td>
                        <td class="img_marque_liste" rowspan="3"></td>
                    </tr>
                    <tr>
                        <td class="img_marque_liste" rowspan="3"></td>
                        <td class="img_marque_liste" colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="img_marque_liste"></td>
                        <td class="img_marque_liste"></td>
                    </tr>
                    <tr>
                        <td class="img_marque_liste" colspan="3"></td>
                    </tr>
                </tbody>
            </table> -->
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