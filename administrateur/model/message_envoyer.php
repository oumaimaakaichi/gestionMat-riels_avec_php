<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SCIN</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
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
       h2{
        color:green;
        }
    </style>
    
</head>
<body style="background-color:white;">
    <section id="container">
    
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <a href="" class="logo"><b>Akaichi <span>Oumaima</span></b></a>
     
      <div class="nav notify-row" id="top_menu">
       
        <ul class="nav top-menu">
        <li>
                <a href="../index.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" color="white" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
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
            <i class="fa fa-book"></i>
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
              <li><a href="../model/demande_infor.php">les demandes de plus d'info</a></li>
              <li><a href="message_envoyer.php">les Messages envoyés</a></li> 
            </ul>
          </li>
         
        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">

      <br> 
<?php
require('../../connexion.php');
$requete="SELECT id, réponse, cin_rec from reponse ";
  $st=$connexion->query($requete);
$p=$st->fetchAll();//contient toutes les donneés de la requéte select
echo"<div class='row mt'><div class='col-md-12'><div class='content-panel'>   <h3><i class='fa fa-angle-right'></i> Les Messages envoyées</h3><table border=1 class='table caption-top'  style='background-color:white;width:1000px;'> <tr style='background-color:rgb(207, 230, 240);'>
     <th>Numéro du message</th>
<th> cin récepteur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th >Message</th>
      <th>Action</th>
       </tr>";
foreach($p as $mt)
{   
    echo"<tr>";
    echo"<td>".$mt['id']."</td>";
    echo " <td> ".$mt['cin_rec']."</td>";
    echo" <td>". $mt['réponse']."</td>";
    
    echo "<td><a class='btn btn-danger' href='supp_msg_env.php?id=".$mt['id']."'><i class='fa fa-trash-o'style='color:white;'></i></a></td>"; 
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
        
