<!-- connextion to database -->

<?php

    $con = mysqli_connect("localhost","root","","ecocar");

    // verif de la cnx
    if (mysqli_connect_errno())
    {
    echo "Erreur de connexion à MySql: " . mysqli_connect_error();
    }

?>