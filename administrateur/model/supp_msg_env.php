<?php


    $id = $_GET['id'];
    
    require("../../connexion.php"); 
    $requete =" DELETE  from reponse where id = $id"; 

    $resultat = $connexion->exec($requete);
    if($resultat)
        header("Location:message_envoyer.php");
    else
        echo "echec de suppression"; 


?>