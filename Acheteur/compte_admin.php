<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Mon compte'; 
            require('haut_admin.php'); 
        ?>
        
        <div class="mt-5"></div>

        <!-- Partie Centrale contenu -->
        <div class="container">
            <form action="">
                Nom de site --> pas de modif <br>
                Telephone <br>
                Email <br>
                Mdp <br>
                Verif mdp <br>

                image <br>

                Btn : <br>
                - modifier <br>
                - annuler modi <br>
                - supprimer / reset <br>
                - valider <br>
            </form>
        </div>       
        
        

<!-- Footer -->
<?php require('footer.php'); ?>