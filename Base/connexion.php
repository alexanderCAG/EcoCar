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
            <form action="">
                
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
                        <input type="checkbox" id="scales" name="scales" style="margin-left: 20px">
                        <label for="scales">Se souvenir de moi</label>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn_vert10 btn_modal_mdpOublie" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Mot de passe oublié
                        </button>
                    </div>
                    <br>
                    <button class="btn_vert10 mt-3 border-0" style="margin-left: 20px">Connexion</button>
                    <a class="inscription_co" href="inscription.php" style="color:#000000;" target="_bank">S'incrire</a> 
                </div>
            </form>
            
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Mot de passe oublié</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="border_ligne w-75" placeholder="Rentrer son adresse email" style="margin-left: 50px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<?php require('footer.php'); ?>