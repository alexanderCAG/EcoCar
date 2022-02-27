<!-- Header -->
<?php require('header.php'); ?>
<!-- Navbar -->
<?php require('navbar.php'); ?>

<section> 
    <div class="inscription_tot row">
        <div class="col-5 my-auto">
            <div class="container">
                <form action="../Bdd/login.php" method="POST">
                    
                    <h1 class="titre_inscription titre text-center">S'inscrire</h1>
                    <small><p class="text-center"><i>Inscrit-toi vite pour louer la voiture de tes rêves</i></p></small>
                    <br>
                    <div class="contenue_inscri">

                        <!-- Nom/Prenom -->
                        <input class="border_ligne input_inscription" type="text" placeholder="Nom" name="nom" required>
                        <input class="border_ligne input_inscription input_inscri_espace" type="text" placeholder="Prenom" name="prenom" required>
                        <br>
                        <small><span class="erreur_inscription">texte</span></small>
                        <small><span class="erreur_inscription span_inscri_espace">texte</span></small>
                        <br>

                        <!-- Tel/Date Permis -->
                        <input class="border_ligne input_inscription" type="text" placeholder="Téléphone" name="telephone" required>
                        <input class="border_ligne input_inscription input_inscri_espace" type="date" placeholder="Date Permis" name="date_permis" required>
                        <br>
                        <small><span class="erreur_inscription">texte</span></small>
                        <small><span class="erreur_inscription span_inscri_espace">texte</span></small>
                        <br>

                        <!-- Email -->
                        <input class="border_ligne input_inscription2 text-center" type="email" placeholder="Email" name="email" required>
                        <br>
                        <small><span class="erreur_inscription">texte</span></small>
                        <br>

                        <!-- Mdp -->
                        <input class="border_ligne input_inscription" type="text" placeholder="Mot de passe" name="mdp" required>
                        <input class="border_ligne input_inscription input_inscri_espace" type="text" placeholder="Mot de passe (vérification)" name="mdp2" required>
                        <br>
                        <small><span class="erreur_inscription">texte</span></small>
                        <small><span class="erreur_inscription span_inscri_espace">texte</span></small>
                        <br>
                        
                        <!-- Btn -->
                        <input type="checkbox" id="scales check_inscri" name="scales">
                        <small><label for="scales">Je confirme avoir plus de 18 ans</label></small>
                        <br><br>
                        <button type="submit" name="inscription" class="btn_vert10 mt-3 border-0">S'inscrire</button>
                        <a class="co_inscription" href="connexion.php" style="color:#000000;">Je suis déjà membre</a> 
                    </div>
                        
                    

                </form>
            </div>
        </div>
        <div class="col-7 bg_green3 shadow">
            <img src="../Image/img_inscription.png" alt="image" class="img_inscription">
            <div class="inscri_info" id="inscri_info1">
                <i class="bi bi-check-circle icone_info"></i> bla bla bla bla bla bla bla bla
            </div>
            <div class="inscri_info">
                <i class="bi bi-check-circle icone_info"></i> bla bla bla bla bla bla bla bla
            </div>
            <div class="inscri_info">
                <i class="bi bi-check-circle icone_info"></i> bla bla bla bla bla bla bla bla
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php require('footer.php'); ?>