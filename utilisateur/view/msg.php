<html>
    <head>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/themify-icons.css">
    <link rel="stylesheet" href="../bootstrap/flag-icon.min.css">
    <link rel="stylesheet" href="../bootstrap/style.css">
    <link rel="stylesheet" href="../css/css/material-design-iconic-font.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    </head>
    <body style="background-color:black;">
<?php

            if(isset($_POST['user']) && isset($_POST['pass']))
            {
                $utili=$_POST['user'];
                $mot=$_POST['pass'];
                require("../../connexion.php");

                $req="SELECT UserNamee , PassWords , cin FROM utilisateur";
                $st=$connexion->query($req);
                $p=$st->fetchAll();

                foreach($p as $s)
                {
                    $user=$s['UserNamee'];
                    $psw=$s['PassWords'];
                    $cin=$s['cin'];
                if($utili==$user and  $mot==$psw)
                    {
                        $requete="SELECT réponse from reponse where cin_rec=$cin ";
                        $st=$connexion->query($requete);
                        $p=$st->fetchAll();
                        echo"<center><br><br><table border=1 class='table caption-top'  style='background-color:white;width:1000px;'> <tr><td><h2 style='color:brown;'><center><b>Messages reçus</b></center></h2></td></tr>";
                        foreach($p as $s)
                        {  
                            echo"<tr><td><br><ul><li>".$s['réponse']."</li></td></tr>"; 

                        }
                        echo"</table></center>";
                    }

                }

            }
?>
</body>
</html>