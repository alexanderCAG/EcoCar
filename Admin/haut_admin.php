
<section>
    <?php
        $recupNombreInscription = mysqli_query($con,"SELECT COUNT(*) AS tot_inscription FROM `inscription` WHERE administrateur='0'");
        if($rowrecupNombreInscription = mysqli_fetch_assoc($recupNombreInscription)){
            $valeurInscription = $rowrecupNombreInscription['tot_inscription'];
    ?>
    <div class="div_accueil_color bg_green1 changCol">
        
        <div class="row">
            <div class="col-8">
                <a href="#" class="sidebar-toggle" id="sidebar_retract">
                    <i class="bi bi-arrow-left-circle-fill fa-2x color_white icone_retract_sidebar float-start" style="margin-right: 400px;"></i>
                </a>
                <h4 class="text-uppercase mx-4 pt-4 t_bold titre color_white" style="margin-top: 5px;">
                    <?php if(isset($titre_admin)): ?>
                        <?= $titre_admin; ?>
                    <?php else: ?>
                        Partie Admin
                    <?php endif ?>
                </h4>

            </div>
            <div class="col-4">
                <a href="ajoutVoiture.php">
                    <div class="bg_gray2 div_ajout_admin2 shadow">
                        <small><p>Ajouter un véhicule</p></small>
                    </div>
                </a>
                <a href="liste_client.php">
                    <div class="bg_gray2 div_notif_admin2 shadow">
                        <i class="fas fa-user-friends icone_notif2"></i>
                        <span><?php echo $valeurInscription ?></span>
                    </div>
                </a>
                <label class="tgl" style="position:relative; top:35px; left:60px;">
                    <input type="checkbox" id="checkBody" checked/>
                    <span class="tgl_body" onclick="changementBody()">
                        <span class="tgl_switch"></span>
                        <span class="tgl_track">
                            <span class="tgl_bgd"></span>
                            <span class="tgl_bgd tgl_bgd-negative"></span>
                        </span>
                    </span>
                </label>
            </div>
        </div>

    </div>
    <?php
        }
    ?>
</section>