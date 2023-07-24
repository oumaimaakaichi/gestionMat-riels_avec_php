<?php


    $num = $_GET['num_msg'];
    
    require("../../connexion.php"); 
    $requete =" DELETE  from msg where num_msg = $num"; 

    $resultat = $connexion->exec($requete);
    if($resultat)
        header("Location:demande_infor.php");
    else
        echo "echec de suppression"; 


?>