<footer class="pt-4 bg_black">
    <div class="container mb-5">
        <div class="row">

            <div class="col-7">
                <img src="../Image/logo.png" class="img-fluid img-responsive w-25"/>
                <div class="row mt-3">
                    <div class="col-5">
                        <ul class="text-light text-uppercase list-unstyled">
                            <li class="my-2"><small><a class="color_white nav_footer" href="index.php">Accueil</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="presentation.php">Présentation</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="promotion.php">Promotion</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="">Voiture hybride</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="">Voiture électrique</a></small></li>
                        </ul> 
                    </div> 
                    <div class="col-6"> 
                        <ul class="text-light text-upp ercase list-unstyled">
                            <li class="my-2"><small><a class="color_white nav_footer" href="">Mentions Légales</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="">Politique en matière de cookie</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="">Politique de confidentialité</a></small></li>
                            <li class="my-2"><small><a class="color_white nav_footer" href="">Condition d'utilisation</a></small></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-1 droite_footer"></div>

            <div class="col-4 border-0 pl-5" id="avis_redirection">
                <h2 class="titre_footer text-center">Donnez votre avis !</h2>
                <small><p class="text-center text-light"><i>Laissez-nous un commentaire</i> </p></small>
                <form class="pl-5" action="../Bdd/login.php" method="POST">
                    <div class="row" >
                        <div class="col-6">
                        <?php
                            $nomuser=$_SESSION['emailUser'];

                            $rechercheId = mysqli_query($con, "SELECT prenom FROM inscription WHERE email='$nomuser'");
                            if ($rowDemandeId = mysqli_fetch_assoc($rechercheId)){
                                $prenom = $rowDemandeId['prenom'];
                        ?>
                            <input type="pseudo" value="<?php echo $prenom ?>" class="form-control" id="exampleInputPseudo" aria-describedby="pseudoHelp" disabled>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="col-6" style="height:50px">
                            <input type="note" placeholder="Note sur 5" name="avisnote" class="form-control" id="exampleInputNote" aria-describedby="noteHelp">
                            <small><span class="infoAvis_span" id="noteAvis"></span></small>
                        </div>
                    </div>
                    <textarea class="form-control mt-3" placeholder="Commentaire..." name="aviscommentaire" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <small><span class="infoAvis_span" id="texteAvis"></span></small>
                    <button type="submit" name="avis" id="avisEnvoie" class="btn_vert10 float_right mt-3 border-0"> Envoyer</button>
                </form>
            </div>

        </div>
    </div>

    <div class="container-fluid bg_green1">
        <div class="row">
            <div class="col">
                <p class="text-center text-white my-auto">&copy; Site internet Marine Alexander</p>
            </div>
        </div>
    </div>
</footer>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- Carousel Avis -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<!-- JS -->
<script src="../Style/affiche_marque.js"></script>
<script src="../Style/carousel.js"></script>
<script src="../Style/verifAvis.js"></script>




</body>

</html>