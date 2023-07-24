<?php


    $cin = $_GET['cin'];
    require("../../connexion.php"); 
    $requete =" DELETE  from utilisateur where cin = $cin"; 

    $resultat = $connexion->exec($requete);
    if($resultat)
        header("Location:liste_client.php");
    else
        echo "echec de suppression"; 


?>