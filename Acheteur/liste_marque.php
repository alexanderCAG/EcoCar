<?php require('header.php'); ?>

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
            <table class="table table_marque">
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
            </table>
        </section>

        <!-- Pagination -->
        <section style="margin-top:40px; margin-bottom:37px;">
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
        </section>
        
        

<!-- Footer -->
<?php require('footer.php'); ?>