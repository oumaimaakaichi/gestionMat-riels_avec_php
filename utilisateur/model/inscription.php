<?php

        if(isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['Ntel']) && isset($_POST['username']) && isset($_POST['pwd1'])&& isset($_POST['pwd2']) )
        {
        
            $cin=$_POST['cin'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $Ntel=$_POST['Ntel'];
            $username=$_POST['username'];
            $pwd1=$_POST['pwd1'];
            $pwd2=$_POST['pwd2'];
            require("../../connexion.php");
        
        if($pwd1==$pwd2){
            $requete = "insert into utilisateur(cin,nom_ut,prenom_ut,N_Téléphone,UserNamee,PassWords)
                         values($cin,'$nom','$prenom',$Ntel,'$username','$pwd1')";
                $res=$connexion ->exec($requete);
            if($res)
            
            echo"ajout avec sucéé";
            else
                echo"probléme d'ajout";
            }
            else{
                echo" vérifier votre mot de passe SVP!!";
            }

        }

?>