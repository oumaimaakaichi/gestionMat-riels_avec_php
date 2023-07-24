<!doctype html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot your password</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap//font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/themify-icons.css">
    <link rel="stylesheet" href="../bootstrap/flag-icon.min.css">
    <link rel="stylesheet" href="../bootstrap/cs-skin-elastic.css">

    <link rel="stylesheet" href="../bootstrap/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body style="background-color: black;">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <br>
              <center> <h3 style="color:white;"> <b>Forgot Password?</b></h3></center><br>
                <div class="login-form" >
                    <form  action="" method="POST">
                        <div class="form-group">
                            <label><b>username</b></label>
                            <input type="text" class="form-control" placeholder="username" name="username">
                        </div>
                        
                            <button type="submit" class="btn social facebook btn-flat btn-addon mb-3">Submit</button>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['username']) )
        {
                $usernamee=$_POST['username'];
               
                require("../../connexion.php");

                $req="SELECT UserNamee  FROM utilisateur";
                $st=$connexion->query($req);
                $p=$st->fetchAll();
                
                foreach($p as $m)
                {
                    $user=$m['UserNamee'];
                    if($usernamee==$user  )
                    {
	                     
                        header("location:../../administrateur/model/editPwd.php");
                    }
                    else{
                       
                           echo "informations incorrecte!!";
                            
                         }

                }
        }


?>
</body>

</html>
