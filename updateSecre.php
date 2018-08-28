<?php
        session_start();
            
        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');     

        //VARIABLES 
  
        $secre = $_GET['secretaria'];
        $nomSecretario = $_GET['nomSecretario'];
        $principal1 = $_GET['pricipal1'];
        $principal2 = $_GET['pricipal2'];
        $principal3 = $_GET['pricipal3'];
        $principal4 = $_GET['pricipal4'];
        $principal5 = $_GET['pricipal5'];
        $principal6 = $_GET['pricipal6'];
        $suplente1 = $_GET['suplente1'];
        $suplente2 = $_GET['suplente2'];
        $suplente3 = $_GET['suplente3'];
        $suplente4 = $_GET['suplente4'];
        $suplente5 = $_GET['suplente5'];
        $suplente6 = $_GET['suplente6'];

        //TBL_DATHABI
        $db->exec("UPDATE secretaria SET nomSecretario='$nomSecretario', principal1='$principal1', principal2='$principal2', principal3='$principal3', principal4='$principal4', principal5='$principal5', principal6='$principal6', suplente1='$suplente1', suplente2='$suplente2', suplente3='$suplente3', suplente4='$suplente4', suplente5='$suplente5', suplente6='$suplente6' WHERE secretaria='$secre'");


        header('location:indexSecre.php');
?>