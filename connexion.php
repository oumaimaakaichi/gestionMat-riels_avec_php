<?php

$servername="localhost";//@id du SGBD
$username="root";
$password="";
$base="gestionmateriel";



    $connexion=new PDO("mysql:host=$servername;dbname=$base",$username,$password);
    

?>