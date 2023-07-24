<?php


    $serie = $_GET['N°serie'];
    require("../../connexion.php"); 
    $requete =" DELETE  from materiel where N°serie = $serie"; 

    $resultat = $connexion->exec($requete);
    if($resultat)
        echo"supprimé avec succé";
    else
            echo "echec de suppression"; 


?>