<?php

    if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['Ntel']) && isset($_POST['username']) &&isset($_POST['pwd1']) && isset($_POST['cin']))
    {

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $tel=$_POST['Ntel'];
        $username=$_POST['username'];
        $pass=$_POST['pwd1'];
        $cin=$_POST['cin'];

        $requete=" UPDATE utilisateur set nom_ut='$nom'  , prenom_ut='$prenom'  , N_Téléphone=$tel ,UserNamee='$username', PassWords='$pass' where cin=$cin";

        require("../../connexion.php");

        $resultat=$connexion->exec($requete);

        if($resultat)
            header("location:liste_client.php");
   
        else 
            echo"echec de modification";
    }

?>