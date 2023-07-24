<?php
        if(isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['prod'])  && isset($_POST['marque'])){
            $cin=$_POST['cin'];
            $nom=$_POST['nom'];
            $tel=$_POST['tel'];
            $produit=$_POST['prod'];
            $marque=$_POST['marque'];
            require("../../connexion.php");
            $requete = "insert into demandeachat(cin	,Nom	,Num_tel,	produit	,marque )
                        values($cin,'$nom',$tel,'$produit','$marque')";



            $res=$connexion ->exec($requete);
            if($res)
            
                header("location:../view/commande.html");
            
            
            else
                echo"probléme d'ajout";
        }


















?>