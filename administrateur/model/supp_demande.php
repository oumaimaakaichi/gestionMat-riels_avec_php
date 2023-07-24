<?php


    $cin = $_GET['cin'];
    
    require("../../connexion.php"); 
    $requete =" DELETE  from demandeachat where cin = $cin"; 

    $resultat = $connexion->exec($requete);
    if($resultat)
        header("Location:demande_achat.php");
    else
        echo "echec de suppression"; 


?>