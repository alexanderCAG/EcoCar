<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Modification des Véhicules'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <!-- <div class="container" style="margin-bottom: 415px">
            <div class="ajoutVoiture_tot" style="margin-top: 70px;">
                <form action="">
                    <div class="row">
                        <div class="col-6" style="margin-left:140px; margin-top:70px;width:50%">

                            <select name="marque" id="modifVoiture1" class="modifVoiture_input text-center">
                                <option value="choixMarque">-- Choisir une Marque --</option>
                                <option value="Marque1">Marque1</option>
                                <option value="Marque2">Marque2</option>
                                <option value="Marque3">Marque3</option>
                                <option value="Marque4">Marque4</option>
                                <option value="Marque5">Marque5</option>
                                <option value="Marque6">Marque6</option>
                            </select>
                            <select name="Categorie" id="modifVoiture2" class="modifVoiture_input text-center">
                                <option value="choixCategorie">-- Choisir une Categorie --</option>
                                <option value="Hybride">Hybride</option>
                                <option value="Electrique">Électrique</option>
                            </select>
                            <br>
                            <small><span class="ajoutVoiture_span" id="Erreurmodif_1"></span></small>
                            <small><span class="ajoutVoiture_span Erreur_span2" id="Erreurmodif_2"></span></small>
                            <br>
                            
                            <input class="border_ligne modifVoiture_input" id="modifVoiture3" type="text" name="" id="" placeholder="Modèle">
                            <input class="border_ligne modifVoiture_input" id="modifVoiture4" type="text" name="" id="" placeholder="Référence">
                            <br>
                            <small><span class="ajoutVoiture_span" id="Erreurmodif_3"></span></small>
                            <small><span class="ajoutVoiture_span Erreur_span2" id="Erreurmodif_4"></span></small>
                            <br>

                            <ul class="list-group list-group-flush">
                                <li class="list-unstyled">
                                    <div class="row mt-5">
                                        <div class="col-md-4 text-center">Change your background color here</div>
                                        <div class="col-md-8">
                                            <label class="w-100 label_color">
                                                <input class="color form-control-file color_ajoutVoiture" id="color_modifVoiture" name="background_seller" placeholder="Color" data-value="#xxxxxx" value=""/>
                                            </label> 
                                        </div>
                                    </div>
                                    <br>
                                    <small><span class="ajoutVoiture_span Erreur_span2" id="Erreurmodif_5"></span></small>
                                    <br>
                                </li>
                            </ul>

                        </div>
                        <div class="col-6" style="width:30%">
                            <img id="infoPerso_image" class="ajoutVoiture_image" src="../Image/voiture_test.jpg" alt="user_img">
                            <hr style="margin-top: 270px">
                            <div class="img_div_change">
                                <span class="file_inscription_img">
                                    <span onclick="choix_image_vendeur()" id="btn_Browse3" class="btn btn-default btn_choix_img_admin">
                                        Browse 
                                        <input type="file" name="modifVoiture_img" id="file_interrieur_imgAdminmodif" accept="image/png, image/jpg, image/jpeg">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly value="">
                                <small><span class="infoPerso_span" id="imageErreur_modifVoiture"></span></small>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col">
                            <button type="button" onclick="modif_Voiture()" id="btn_modif_ajoutVoiture" class="btn_vert10 border-0">Modifier</button>
                            <button type="button" onclick="annulModif_Voiture()" id="btn_Annulmodif_ajoutVoiture" class="btn_vert10 border-0">Annuler Modif</button>
                            <button type="button" onclick="reset_Voiture()" id="btn_reset_ajoutVoiture" class="btn_vert10 border-0">Reset</button>
                            <button type="submit" id="submit_valider_modifVoiture" class="btn_vert10 border-0">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->


        <div class="card p-2 mt-3 shadow" style="width:96%;margin-left:2%;border-radius:10px;margin-bottom:672px">
            <h5 class="titre t_bold" >&nbsp; Effectuez vos modifications <br></h5>
            <form action="">
                <div class="row container mt-3 my-5 contenu_ajoutVoiture">
                    <div class="col-md-8">
                        <div class="shadow m-2 p-4">
                            <div class="form-row">
                                <div class="row ">
                                    <div class="col" style="height:38px;">
                                        <select name="Categorie" id="modifVoiture2" class="form-control">
                                            <option value="choixCategorie">Choisir une Categorie</option>
                                            <option value="Hybride">Hybride</option>
                                            <option value="Electrique">Électrique</option>
                                        </select>
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_2"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <select id="modifVoiture1" class="form-control">
                                            <option value="choixMarque" selected>Choisir une marque</option>
                                            <option value="Marque1">Marque1</option>
                                            <option value="Marque2">Marque2</option>
                                            <option value="Marque3">Marque3</option>
                                            <option value="Marque4">Marque4</option>
                                            <option value="Marque5">Marque5</option>
                                            <option value="Marque6">Marque6</option>
                                        </select>
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_1"></span></small>
                                    </div>
                                </div>
                                <div class="row  mt-4">
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture3" class="form-control" placeholder="Modèle">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_3"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture4" class="form-control" placeholder="Référence">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_4"></span></small>
                                    </div>
                                </div>
                                <div class="row  mt-4">
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture5" class="form-control" placeholder="Autonomie (km)">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_6"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture6" class="form-control" placeholder="Puissance (ch)">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_7"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="text" id="modifVoiture7" class="form-control" placeholder="Conso (kWh/100km)">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_8"></span></small>
                                    </div>
                                    <div class="col" style="height:38px;">
                                        <input type="number" id="modifVoiture8" class="form-control" placeholder="Nombre de place">
                                        <small><span class="ajoutVoiture_span" id="Erreurmodif_9"></span></small>
                                    </div>
                                </div>

                                
                            </div>
                            <div class="row form-row mt-4">
                                <div class="form-group col-md-4 col-4" style="margin-top: 52px; height:38px;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-unstyled">
                                            <div class="row">
                                                <div class="col-md-15">
                                                    <label class="w-100 label_color">
                                                        <input class="color form-control-file color_ajoutVoiture" id="color_modifVoiture" name="background_seller" placeholder="Color" data-value="#xxxxxx" value=""/>
                                                    </label> 
                                                </div>
                                            </div>
                                            <small><span class="ajoutVoiture_span" id="Erreurmodif_5"></span></small>
                                            <br>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-8 col-8">
                                    <div class="img_div_change">
                                        <span class="file_inscription_img">
                                            <span onclick="choix_image_vendeur()" id="btn_Browse2" class="btn btn-default btn_choix_img_admin">
                                                Browse 
                                                <input type="file" name="ajoutVoiture_img" id="file_interrieur_imgAdminmodif" accept="image/png, image/jpg, image/jpeg">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly value="">
                                        <small><span class="infoPerso_span" id="imageErreur_modifVoiture"></span></small>
                                        <br>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <img id="infoPerso_image" src="../Image/voiture_test.jpg" class="img-responsive rounded mt-2" style="width:400px; height:266px; object-fit: cover;">
                        <button type="submit" id="submit_valider_modifVoiture" class="btn w-50 bg_green1 text-uppercase mt-5 text-light float-end" style="float:right!important">Modifier</button>
                    </div>
                </div> 
            </form>
        </div>
        
        

<!-- Footer -->
<?php require('footer.php'); ?>