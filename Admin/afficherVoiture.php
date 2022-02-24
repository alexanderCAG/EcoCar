<?php require('header.php'); ?>

<div class="total_categorie">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>

    <!-- Contenue -->
    <div class="contenue bg_gray3">

        <!-- Partie Haut contenu -->
        <?php 
            $titre_admin = 'Détails Voiture'; 
            require('haut_admin.php'); 
        ?>
        
        <!-- Partie Centrale contenu -->
        <div class="card p-2 mt-3 shadow" style="width:96%;margin-left:2%;border-radius:10px;margin-bottom:493px">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="h-100 bg_green1 pt-3" style="height:60px!important;">
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="text-uppercase titre font-weight-bold float-right" style="float:right; line-height:60px">Réf: NSEORFQ &nbsp;</h3>
                </div>
            </div><br>
            <h1 class="titre t_bold" >&nbsp;PEUGEOT E-208<br></h1>
            <h5 class="" >&nbsp; Modèle xxxxx <br></h5>
            <div class="row container mt-3 my-5">
                <div class="col-md-6">
                    <img src="../Image/voiture_test.jpg" class="img-responsive rounded mt-2" style="width:600px; height:390px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-charging-station color_green1"></i> Catégorie <span class="font-weight-bold" style="float:right;">  Hybride</span></li>
                        <li class="list-group-item"><i class="fas fa-battery-three-quarters color_green1"></i> Autonomie <span style="float:right;"> 342 Km</span></li>
                        <li class="list-group-item"><i class="fas fa-bolt color_green1"></i> Puissance <span style="float:right;"> 136 ch</span></li>
                        <li class="list-group-item"><i class="fas fa-tachometer-alt-fastest color_green1"></i> Consommation <span style="float:right;"> 15,4 kwH/100km  </span></li>
                        <li class="list-group-item"><i class="fas fa-users color_green1"></i> Nombre de place <span style="float:right;"> 5 places  </span></li>
                        <li class="list-group-item"><i class="fas fa-palette color_green1"></i> Couleur <span style="float:right;">  <i class="fas fa-tint text-danger "></i> <i class="fas fa-tint text-success"></i> <i class="fas fa-tint text-warning"></i></span></li>
                        <li class="list-group-item"></li>
                    </ul><br>
                    &nbsp; &nbsp; Notes:  
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i> <small class="text-mutted">(Voir les commentaires)</small>
                    <br>  
                </div>
            </div> 
            <!-- <div class="row m-2 p-2" style="border:3px solid #33985d;border-left:none;border-right:none;border-bottom:none;">
                <div class="col-md-12">
                    <a href="" class="btn bg-success float-right text-light text-uppercase" style="float:right;"> Modifier</a>
                    <a href="" class="btn bg-success float-right text-light mx-4 text-uppercase" style="float:right;"> Accèder à la page</a>
                </div>
            </div> -->
        </div>

        <!-- Ajouter produit  -->
        <!-- <div class="card rounded w-100 p-2 mb-5">
            <h5 class="titre t_bold" >&nbsp; Quelle catégorie de véhicule voulez-vous ajouter ? <br></h5>
            <div class="w-75 mt-3"> &nbsp; &nbsp; 
                <div class="btn bg_green1 py-3 text-light text-uppercase"> Catégorie 1</div>
                <div class="btn btn-outline-success py-3 texte_green1 text-uppercase"> Catégorie 2</div>
                <div class="btn btn-outline-success py-3 texte_green1 text-uppercase"> Catégorie 2</div>
            </div>

            <div class="row container mt-3 my-5 ">
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
                    <div class="form-row mt-4">
                        <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                            <option selected>Couleur</option>
                            <option>Rouge</option>
                            <option>Bleu</option>
                            <option>Orange</option>
                            <option>Blanc</option>
                        </select>
                        </div>
                    </div>

                </form>
                </div>
                
                <div class="col-md-4">
                    
                    <img src="https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-responsive w-100 rounded mt-2 ">
                    <a class="btn w-50 bg_green1 text-uppercase mt-5 text-light float-end" style="float:right!important"> Enregister</a>
                </div>
            </div> 
            

        </div> -->
    <!-- Fin Ajouter produit  -->
        
        

<!-- Footer -->
<?php require('footer.php'); ?>