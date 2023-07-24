<?php
        if(isset($_POST['rch']))
        {
            $rech=$_POST['rch'];
        if($rech=="tablette")
            {
                header("location:tabl.php");
        }
        elseif($rech=="ordinateur portable")
        {
            header("location:ord_port.php");
        }
        elseif($rech=="ordinateur bureau")
        {
            header("location:ord_port.php");
        }
        elseif($rech=="telephone")
        {
            header("location:tel.php");
        }
        elseif($rech=="ipad")
        {
            header("location:ipad.php");
        }
        elseif($rech=="scanner")
        {
            header("location:scanner.php");

        }
        elseif($rech=="imprimante")
        {
            header("location:impr.php");
        }
        }



?>