<?php
if(isset($_POST['nom']) && isset($_POST['cin']) && isset($_POST['a'])  && isset($_POST['ms'])){

        $nom=$_POST['nom'];
        $cin=$_POST['cin'];
        $sujet=$_POST['a'];
        $msg=$_POST['ms'];
        require("../../connexion.php");
        if($sujet=='RM')
        {
            $requete="INSERT into reclamation(nomc,cin,Mesg) value('$nom',$cin,'$msg')";
         }
        elseif($sujet=='DM')
        {
            $requete="INSERT into msg(nom_cl,cin,mesge) value('$nom',$cin,'$msg')";
        }
        $res=$connexion ->exec($requete);
        if($res)
            header("location:../view/contacte.html");
            
            else
                echo"probléme d'ajout";

}















?>