
<html >
<head>
    <meta charset="utf-8">
    
    <title>login </title><link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/themify-icons.css">
    <link rel="stylesheet" href="../bootstrap/flag-icon.min.css">
    <link rel="stylesheet" href="../bootstrap/cs-skin-elastic.css">

    <link rel="stylesheet" href="../bootstrap/style.css">
    <link rel="stylesheet" href="../css/css/material-design-iconic-font.min.css">
    <style>
        h2{
            color:white;
            
        }
    </style>
</head>

<body style="background-color:black;">


    <div class="sufee-login d-flex align-content-center flex-wrap" >
        <div class="container"><br>
            
            <div class="login-content">
                <h2><center>Login</center></h2><br>
                <div class="login-form" >
                    <form action="" method="POST">
                   
                            <div class="form-group">
                                <label for="u"><i class="zmdi zmdi-account material-icons-name"></i>&nbsp;&nbsp;<b>username</b></label> &nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" id="u" placeholder="username" name="user">
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-lock"></i>&nbsp;&nbsp;<b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Password"name="pass">
                             </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox">  Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="../view/forgot_password.php"><b>Forgotten Password?</b></a>
                            </label>
                                </div>
                             
                                 <div class="social-login-content">
                                    <div class="social-button">
                                    <button type="submit" class="btn social facebook btn-flat btn-addon mb-3" >Sign in</button>
                              
                                    </div>
                                </div>
                              
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="../view/registrer.html"> <b>Sign Up Here</b></a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php
		 if(isset($_POST['user']) && isset($_POST['pass'])){
		 $utili=$_POST['user'];
		 $mot=$_POST['pass'];
         require("../../connexion.php");
         if($utili=='oumaima'  and  $mot=='mayma123'){
            header("location:../../administrateur/index.html");
        }
           
           else{
                $req="SELECT UserNamee , PassWords , cin FROM utilisateur";
                $st=$connexion->query($req);
                $p=$st->fetchAll();
     
                foreach($p as $s)
                {
                     $user=$s['UserNamee'];
                     $psw=$s['PassWords'];
                   
                   if($utili==$user and  $mot==$psw)
                    {
	                   
                        header("location:../view/Acceui.html");
                        $cin=cin;
                       
                    }
                    else{
                       
                           echo("<font color='red'>client introuvable</font>");
                            
                         }
           }
            
        } 
        }  
?> 

</body>

</html>
