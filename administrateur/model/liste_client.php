<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liste du clients</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/css/material-design-iconic-font.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    
    <!-- Bootstrap core CSS -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
    <script src="../lib/chart-master/Chart.js"></script>
    <style>
      .d{
        background-color:beige;
        text-align:center;
      }  
      img{
        height:70px;
        width:70px;
      }   
      .t{
        background-color:rgb(207, 230, 240);
        
      } 
      h2{
        color:rgb(224, 120, 108);;
      }
      
      
    </style>
</head>
<body style="background-color:white;">
<section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <a href="" class="logo"><b>Akaichi <span><font color="rosybrown">Oumaima</font></span></b></a>
     
      <div class="nav notify-row" id="top_menu">
       
        <ul class="nav top-menu">
         
        <li>
                <a href="../index.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20"  color="white" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
              </a>
              &nbsp;&nbsp;&nbsp;
              <li>
                <a href="../../utilisateur/view/Acceui.html"><font color="whitesmoke"><b>Voir interface client</b></font></a>
              </li>
            </ul>
         
        </ul>
       
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../../utilisateur/model/Authentification.php">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="../view/profil.html"><img src="../images/user.jpg" class="img-circle" width="80"></a></p>
         
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span ><b><font size="2.5px" color="whitesmoke">gestion matériels</font></b></span>
              </a>
            <ul class="sub">
              <li><a href=" ../view/ajoutProduit.html">Ajouter matériel</a></li>
              <li><a href="../view/ord_bureau.php">Ordinateurs de bureau</a></li>
              <li><a href="../view/ord_portable.php">Ordinateur portable</a></li>
            
              <li><a href="../view/imprimante.php">Imprimante</a></li>
              <li><a href="../view/telephone.php">Téléphone</a></li>
              <li><a href="../view/tablette.php">Tablette</a></li>
              <li><a href="../view/scanner.php">Scanner</a></li>
              <li><a href="../view/ipad.php">iPad</a></li>

              
            </ul>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span><font size="2.5px" color="whitesmoke">Gestion clients</font></span>
            </a>
            <ul class="sub">
              <li><a href="liste_client.php">liste des clients</a></li>
             
              <li><a href="../model/demande_achat.php">les demandes d'àchat</a></li>  
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span><font size="2.5px" color="whitesmoke">Les Messages</font></span>
              </a>
            <ul class="sub">
              <li><a href="../model/reclamation.php">les Réclamations</a></li>
              
              <li><a href="message_envoyer.php">les Messages envoyés</a></li>
              <li><a href="../model/demande_infor.php">les demandes de plus d'info</a></li>
              
            </ul>
          </li>
          
        </ul>
       
      </div>
    </aside>
    <section id="main-content">
    <section class="wrapper">         
        
<?php

require("../../connexion.php");
$requete="select  cin , nom_ut , prenom_ut, N_Téléphone, UserNamee,PassWords from utilisateur ";

$statement= $connexion->query($requete);
$resultat=$statement->fetchAll();//contient toutes les donneés de la requéte select
echo" <div class='row mt'style='width:1500px;'><div class='col-md-12'><div class='content-panel'>  <h3><i class='fa fa-angle-right'></i> Liste des employees </h3><table border=1 class='table table-striped table-advance table-hover' style='background-color:white;width:950px;height:350px;'><tr class='t'>&nbsp;
     <th > &nbsp;<font size='2.5px'>Cin</font></th>
     <th><font size='2.5px'>Nom</font></th>
     <th><font size='2.5px'>Prenom</font></th>
     <th><font size='2.5px'>Numéro téléphone</font></th>
     <th><font size='2.5px'>username</font></th>
     <th><font size='2.5px'>mot de passe</font></th>
     
     <th colspan=2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='2.5px'>Actions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></th></tr>";
foreach($resultat as $ct)
{   
    echo"<tr>";
     echo "<td>".$ct['cin']."</td>";
    echo"<td>". $ct['nom_ut']."</td>";
    echo "<td>".$ct['prenom_ut']."</td>";
    echo"<td>". $ct['N_Téléphone']."</td>";
    echo"<td>". $ct['UserNamee']."</td>";
    echo"<td>". $ct['PassWords']."</td>";
    
    
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a   class='btn btn-success btn-xs' href='modifier_client.php?cin=".$ct['cin']."'><i class='fa fa-pencil' style='color:white;'></i></a></td>"; 
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class='btn btn-danger btn-xs' href='supprimer_client.php?cin=".$ct['cin']."'><i class='fa fa-trash-o'style='color:white;'></i> </a></td>"; 
    
    echo"</tr>";
}
echo"</table></div></div></div>";

?>
</section>
</section>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../lib/jquery.scrollTo.min.js"></script>
    <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../lib/common-scripts.js"></script>
    <!--script for this page-->
</body>
</html>
        
