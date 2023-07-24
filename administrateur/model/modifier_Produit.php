<?php
    $serie = $_GET['N°serie'];
    require("../../connexion.php");
    $sql="select N°serie , typee , Marque , Model , categorie , caractéristiques , date_acquisition , cout , fournisseur  from materiel where N°serie=:n";
    $statement= $connexion->prepare($sql);
    // liaisons
    $statement->bindValue('n',$serie,PDO::PARAM_INT);
    // exécution
    $statement->execute();
    //traitement de résultat
    $rows=$statement->fetch(PDO::FETCH_OBJ);
    if(!$rows)
    header("location:affichage.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>page de modification</title>
         
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
            .c{
                color:balck;
                font-size: 18px;
            }
          
            h2{
                color:rosybrown;
              
              
            }
            
        </style>
                  
           
     </head>
    <body  style="background-color:white;">
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
                  <i class="fa fa-book"></i>
                    <span><b><font size="2.5px" color="whitesmoke">gestion matériels</font></b></span>
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
                  
                    <li><a href="demande_achat.php">les demandes d'àchat</a></li>
                  </ul>
                </li>
                
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span><font size="2.5px" color="whitesmoke">Les Messages</font></span>
                    </a>
                  <ul class="sub">
                    <li><a href="reclamation.php">les Réclamations</a></li>
              
                    <li><a href="message_envoyer.php">les Messages envoyés</a></li>
                    <li><a href="../model/demande_infor.php">les demandes de plus d'info</a></li>
                  </ul>
                </li>
              
              </ul>
            
            </div>
        </aside>
  
        <section>
    <br><br>
    <br>
<div class="container py-3" style="height: 300px; width: 830px;">

            <center><h2><b><i>Ajouter vos modifications</i></b> </h2></center>
            <br><br>
        
            <form action="Modif_prod.php" method="POST">
          
                    <input type="hidden"  name="N°serie" value="<?= $rows->N°serie?>">
                    <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="c"><b>Type</b></label>
                            <input type="text"  name="t" class="form-control" value="<?=$rows->typee?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="c"><b>Marque</b></label>
                            <input type="text" name="m" class="form-control" value="<?=$rows->Marque?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="c" ><b>Modele</b></label>
                            <input type="text"  name="mod" class="form-control" value="<?=$rows->Model?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="c" ><b>Categorie</b></label>
                            <input type="text"  name="catg" class="form-control" value="<?=$rows->categorie?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="c" ><b>Caractéristiques</b></label>
                            <textarea name="cart" class="form-control"  value="<?=$rows->caractéristiques?>" ></textarea>
                        </div>
                        <div class="form-group">
                            <label class="c"><b>Fournisseur</b></label>
                            <input type="text" name="fourn" class="form-control"value="<?=$rows->fournisseur?>" >
                        </div>
                        <div class="form-group">
                            <label class="c" ><b>image</b></label>
                            <input name="img" type="file" /> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label class="c"><b>Date d'acquisition</b></label>
                            <input type="date" name="dt" class="form-control" value="<?=$rows->date_acquisition?> ">
                        </div>
                        
                    </div>
                   
                    <div class="col-md-6">
                    <div class="form-group">
                        <br>
                            <label class="c"><b>Cout</b></label>
                            <input type="number" name="cout" class="form-control" value="<?=$rows->cout?>">
                        </div> 
                    
                        </div>
                    <div class="col-md-6">
                        <div class="form-group"><br>
                            <input type="submit" value="Modifier" class="btn btn-primary" style="width:390px;">
                        </div>
                    </div>
                        <div class="col-md-6">
                       
                        </div>
                    
                    </div>
                    </div>
                       
            </form>
  </div>
      </section></section>
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