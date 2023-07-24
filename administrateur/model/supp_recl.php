<?php


    $ids= $_GET['id'];
    
    require("../../connexion.php"); 
    $requete =" DELETE  from reclamation where id= $ids"; 

    $resultat = $connexion->exec($requete);
if($resultat)
    header("Location:reclamation.php");
else
    echo "echec de suppression"; 


?>