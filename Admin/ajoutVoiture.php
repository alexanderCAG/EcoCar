<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Ajout de Voiture'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <!-- <div class="container" style="margin-bottom: 415px">
            <div class="ajoutVoiture_tot" style="margin-top: 70px;">
                <form action="">
                    <div class="row">
                        <div class="col-6" style="margin-left:140px; margin-top:70px;width:50%">

                            <select name="marque" id="ajoutVoiture1" class="ajoutVoiture_input text-center">
                                <option value="choixMarque">-- Choisir une Marque --</option>
                                <option value="Marque1">Marque1</option>
                                <option value="Marque2">Marque2</option>
                                <option value="Marque3">Marque3</option>
                                <option value="Marque4">Marque4</option>
                                <option value="Marque5">Marque5</option>
                                <option value="Marque6">Marque6</option>
                            </select>
                            <select name="Categorie" id="ajoutVoiture2" class="ajoutVoiture_input text-center">
                                <option value="choixCategorie">-- Choisir une Categorie --</option>
                                <option value="Hybride">Hybride</option>
                                <option value="Electrique">Électrique</option>
                            </select>
                            <br>
                            <small><span class="ajoutVoiture_span" id="ErreurAjout_1"></span></small>
                            <small><span class="ajoutVoiture_span Erreur_span2" id="ErreurAjout_2"></span></small>
                            <br>
                            
                            <input class="border_ligne ajoutVoiture_input" id="ajoutVoiture3" type="text" name="" id="" placeholder="Modèle">
                            <input class="border_ligne ajoutVoiture_input" id="ajoutVoiture4" type="text" name="" id="" placeholder="Référence">
                            <br>
                            <small><span class="ajoutVoiture_span" id="ErreurAjout_3"></span></small>
                            <small><span class="ajoutVoiture_span Erreur_span2" id="ErreurAjout_4"></span></small>
                            <br>

                            <ul class="list-group list-group-flush">
                                <li class="list-unstyled">
                                    <div class="row mt-5">
                                        <div class="col-md-4 text-center">Change your background color here</div>
                                        <div class="col-md-8">
                                            <label class="w-100 label_color">
                                                <input class="color form-control-file color_ajoutVoiture" id="color_ajoutVoiture" name="background_seller" placeholder="Color" data-value="#xxxxxx" value=""/>
                                            </label> 
                                        </div>
                                    </div>
                                    <br>
                                    <small><span class="ajoutVoiture_span Erreur_span2" id="ErreurAjout_5"></span></small>
                                    <br>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6" style="width:30%">
                            <img id="infoPerso_image" class="ajoutVoiture_image" src="../Image/voiture_test.jpg" alt="user_img">
                            <hr style="margin-top: 270px">
                            <div class="img_div_change">
                                <span class="file_inscription_img">
                                    <span onclick="choix_image_vendeur()" id="btn_Browse2" class="btn btn-default btn_choix_img_admin">
                                        Browse 
                                        <input type="file" name="ajoutVoiture_img" id="file_interrieur_imgAdminAjout" accept="image/png, image/jpg, image/jpeg">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly value="">
                                <small><span class="infoPerso_span" id="imageErreur_ajoutVoiture"></span></small>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col">
                            <button type="submit" id="submit_valider_ajoutVoiture" class="btn_vert10 border-0">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
        
        <div class="card p-2 mt-3 shadow" style="width:96%;margin-left:2%;border-radius:10px;margin-bottom:600px">
            <h5 class="titre t_bold" >&nbsp; Quelle catégorie de véhicule voulez-vous ajouter ? <br></h5>
            <div class="w-75 mt-3"> &nbsp; &nbsp; 
                <div class="btn bg_green1 py-3 text-light text-uppercase">Hybride</div>
                <div class="btn btn-outline-success py-3 texte_green1 text-uppercase">Électrique</div>
            </div>

            <div class="row container mt-3 my-5">
                <div class="col-md-8"> 
                <form class="shadow m-2 p-4">
                    <div class="form-row">
                        <div class="row ">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Catégorie" value="catégorie1">
                            </div>
                            <div class="col">
                                <select id="inputState" class="form-control">
                                    <option selected>Choisir une marque</option>
                                    <option>Marque 1</option>
                                    <option>Marque 1</option>
                                    <option>Marque 1</option>
                                    <option>Marque 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Modèle">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Référence">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Autonomie">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Puissance">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Consommation">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Nombre de place">
                            </div>
                        </div>

                        
                    </div>
                    <div class="row form-row mt-4">
                        <div class="form-group col-md-4 col-4" style="margin-top: 52px">
                            <select id="inputState" class="form-control">
                                <option selected>Couleur</option>
                                <option>Rouge</option>
                                <option>Bleu</option>
                                <option>Orange</option>
                                <option>Blanc</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8 col-8">
                            <div class="img_div_change">
                                <span class="file_inscription_img">
                                    <span onclick="choix_image_vendeur()" id="btn_Browse2" class="btn btn-default btn_choix_img_admin">
                                        Browse 
                                        <input type="file" name="ajoutVoiture_img" id="file_interrieur_imgAdminAjout" accept="image/png, image/jpg, image/jpeg">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly value="">
                                <small><span class="infoPerso_span" id="imageErreur_ajoutVoiture"></span></small>
                                <br>
                            </div>
                        </div>
                        
                    </div>
                    

                </form>
                </div>
                
                <div class="col-md-4">
                    <img id="infoPerso_image" src="../Image/voiture_test.jpg" class="img-responsive rounded mt-2" style="width:400px; height:266px; object-fit: cover;">
                    <a class="btn w-50 bg_green1 text-uppercase mt-5 text-light float-end" style="float:right!important"> Enregister</a>
                </div>
            </div> 
            

        </div>
        
        

<!-- Footer -->
<?php require('footer.php'); ?>