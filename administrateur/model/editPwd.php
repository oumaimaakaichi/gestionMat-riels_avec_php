<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>changer mot de passe</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        h4{
            color:white;
          }
        form {
	        width: 500px;
	        border: 2px solid #ccc;
	        padding: 30px;
	        background: #fff;
	        border-radius: 10px;
            }

         body {
	        background: #1690A7;
	        display: flex;
	        align-items: center;
	        flex-direction: column;
              }
         button{
            width: 440px;
                }
    </style>


</head>

<body style="background-color: black;">
<br><br><br><br>

    <div class="sufee-login d-flex align-content-center flex-wrap"  style="width:400px;">
       
       <div class="container">
            <div class="login-content">
            
                <div class="login-form" >

                    <form  action="" method="POST" class="form">
                   
                        <div class="form-group">
                            <label class="c"><b>cin</b></label>
                            <input type="number" class="form-control" placeholder="" name="cin">
                        </div>
                         <div class="form-group">
                            <label class="c"  ><b>Nouveau Mot de passe</b></label>
                            <input type="password" class="form-control" placeholder="" name="pwd1" class="input">
                        </div>
                        <div class="form-group">
                            <label class="c"> <b>Confirmer Mot de passe</b></label>
                            <input type="password" class="form-control" placeholder="" name="pwd2">
                        </div>
                        <center> <button type="submit" class="btn btn-primary">update</button></center>

                    </form>
   
                </div>
    
            </div>
        </div>
    
    </div>
<?php
if(isset($_POST['cin'])) {
    $pwd1=$_POST['pwd1'];
    $pwd2=$_POST['pwd2'];
    $cin=$_POST['cin'];
    require("../../connexion.php");

    if($pwd1==$pwd2){
        $requete=" UPDATE utilisateur set PassWords='$pwd1'  where cin=$cin";
        $resultat=$connexion->exec($requete);
        if($resultat){
             header("location:../../utilisateur/model/Authentification.php");
        }
        else{
            echo"echec de modification";
            
        }
    }




}






?>

    

</body>

</html>
