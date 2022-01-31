<!-- Header -->
<?php require('header.php'); ?>
<!-- Navbar -->
<?php require('navbar.php'); ?>

<section>
    <div class="connexion_tot row">
        <div class="col-6 bg_green3">
            <img src="../Image/img_connexion.png" alt="image" class="img_co">
        </div>
        <div class="col-6 my-auto">
            <form>
                
                <h1 class="titre_co titre text-center">Se connecter</h1>
                <small><p class="text-center"><i>Connecte-toi vite pour louer la voiture de tes rêves</i></p></small>
                <br>
                <div class="contenu_co">     
                    <i class="icone_user_co bi bi-person-circle"></i>
                    <input class="border_ligne input_co" type="text" placeholder="Email ou pseudo" name="username" required>
                    <br>
                    <small><span class="erreur_co"></span></small>
                    <br>
                    <i class="icone_user_co fas fa-lock"></i>
                    <input class="border_ligne input_co" type="password" placeholder="Mot de passe" name="password" required>
                    <br>
                    <small><span class="erreur_co"></span></small>
                    <br>
                    <div class="checkbox_co">
                        <input type="checkbox" id="scales" name="scales">
                        <label for="scales">Se souvenir de moi</label>
                    </div>
                    <br>
                    <button class="btn_vert10 mt-3 border-0">Connexion</button>
                    <a class="inscription_co" href="#" style="color:#000000;" target="_bank">S'incrire</a> 
                </div>
            </form>
            
        </div>
    </div>
</section>


<!-- Footer -->
<?php require('footer.php'); ?>