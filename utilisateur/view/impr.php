<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SCIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
          .d{
            background-color:beige;
            text-align:center;
          }  
          
          table{
            background-color:white;
          }
      </style>
    
</head>
<body class="bg-dark"><br>
         <div class="d">
            <br>
            <h2><i><b>Les imprimantes</b></i></h2> 
            <br>
            <br>
        </div><br>
<?php

      require("../../connexion.php");
      $requete="select N°serie,typee,Marque,Model,caractéristiques,date_acquisition,cout,image from materiel where typee='imprimante'";

      $statement= $connexion->query($requete);
      $resultat=$statement->fetchAll();
      echo"<center><table class='table caption-top' border=1 style='width:1100px;'>&nbsp;&nbsp;";
      foreach($resultat as $mt)
      {   
          echo"<tr>";
          echo "<td><img style='width:190px;height: 150px;' src=".$mt['image']."></td>";
          echo"<td><font color='blue'><b>Marque &nbsp;:</b> </font>". $mt['typee']."    &nbsp;".$mt['Marque']." ".$mt['Model']."</td>";
        
          echo"<td><font color='blue'><b>Caractéristique:</b></font><br><p> ". $mt['caractéristiques']."</p></td>";
      
          echo"<td><font color='blue'><b>Prix &nbsp;:</b> </font>". $mt['cout']."DN</td>";
          
          echo"</tr>";
      }
      echo"</table></center>";
?>
</body>
</html>
        
