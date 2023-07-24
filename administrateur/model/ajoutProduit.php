<?php

if(isset($_POST['serie']) && isset($_POST['type']) && isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['categorie'])  && isset($_POST['car']) && isset($_POST['dt']) && isset($_POST['cout']) && isset($_POST['fournisseur']) && isset($_POST['img'])  )
{
   
    $serie=$_POST['serie'];
    $type=$_POST['type'];
    $marque=$_POST['marque'];
    $modele=$_POST['modele'];
    $categorie=$_POST['categorie'];
    $caracteristique=$_POST['car'];
    
    $date=date('y-m-d' ,strtotime($_POST['dt']));
    $cout=$_POST['cout'];
    $fournisseur=$_POST['fournisseur'];
    $image=$_POST['img'];
  


    require("../../connexion.php");


    $requete = "insert into materiel(N°serie,typee,Marque,Model,categorie,caractéristiques,date_acquisition,cout	,fournisseur,image)
           values($serie,'$type','$marque','$modele','$categorie','$caracteristique','$date',$cout,'$fournisseur','$image')";



        $res=$connexion ->exec($requete);
    if($res)
      
       echo "ajouté";
     
    else
        echo"probléme d'ajout";



}

?>
