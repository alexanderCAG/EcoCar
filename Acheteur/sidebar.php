
<nav class="sidebar shadow" id="sidebar">
    <p class="date_admin_accueil text-uppercase">
        <?php
            setlocale(LC_ALL, 'fr_FR', 'fra_FRA');
            echo strftime('%A %d');?><br><?php echo strftime('%B'); ?>
    </p>
    <a href="index.php" class="color_white text-decoration-none titre_sidebar bg_gray1"><p class="titre_sidebar2 text-uppercase">tableau de bord</p></a>
    <ul class="text-uppercase list-unstyled liste_titre_sidebar">
        <a href="liste_voiture.php" class="color_white text-decoration-none"><li class="liste_sidebar">Liste des véhicules</li></a>
        <a href="liste_marque.php" class="color_white text-decoration-none"><li class="liste_sidebar">Nos Marques</li></a>
        <a href="devis.php" class="color_white text-decoration-none"><li class="liste_sidebar">Devis</li></a>
        <a href="liste_client.php" class="color_white text-decoration-none"><li class="liste_sidebar">Clients</li></a>
        <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Avis</li></a>
        <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Statistique</li></a>
        <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Mon compte</li></a>
        <a href="" class="color_white text-decoration-none"><li class="liste_sidebar">Deconnexion</li></a>
    </ul>
</nav>