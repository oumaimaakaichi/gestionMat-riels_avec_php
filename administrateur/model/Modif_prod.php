<?php
   if(isset($_POST['t']) && isset($_POST['m']) && isset($_POST['mod']) && isset($_POST['catg'])  && isset($_POST['N°serie']) && isset($_POST['dt'])   && isset($_POST['cout']) && isset($_POST['fourn']) )
   {

      $type=$_POST['t'];
      $marque=$_POST['m'];
      $model=$_POST['mod'];
      $categorie=$_POST['catg'];
      $caracteristique = $_POST['cart'];
      $date=date('y-m-d' ,strtotime($_POST['dt']));
      $cout=$_POST['cout'];
      $fournisseur=$_POST['fourn'];
      $Nserie=$_POST['N°serie'];

      $requete="UPDATE materiel set  typee='$type'  , Marque='$marque' , Model='$model' ,categorie='$categorie' ,caractéristiques='$caracteristique', date_acquisition='$date' , cout=$cout, fournisseur='$fournisseur'
      where N°serie=$Nserie ";

      require("../../connexion.php");
      $resultat=$connexion->exec($requete);

      if($resultat)
         echo"modification avec succée";
      else
         echo"echec de modification";
   }

?>
