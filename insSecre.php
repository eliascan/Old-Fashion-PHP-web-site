<?php
        session_start();

        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');

        //VARIABLES


        $secre = $_REQUEST['secretaria'];
        $nomSecretario = $_REQUEST['nomSecretario'];
        $principal1 = $_REQUEST['principal1'];
        $principal2 = $_REQUEST['principal2'];
        $principal3 = $_REQUEST['principal3'];
        $principal4 = $_REQUEST['principal4'];
        $principal5 = $_REQUEST['principal5'];
        $principal6 = $_REQUEST['principal6'];
        $suplente1 = $_REQUEST['suplente1'];
        $suplente2 = $_REQUEST['suplente2'];
        $suplente3 = $_REQUEST['suplente3'];
        $suplente4 = $_REQUEST['suplente4'];
        $suplente5 = $_REQUEST['suplente5'];
        $suplente6 = $_REQUEST['suplente6'];

        //TBL_DATHABI
        $db->exec("INSERT INTO secretaria (secretaria, nomSecretario, principal1, principal2, principal3, principal4, principal5, principal6, suplente1, suplente2, suplente3, suplente4, suplente5, suplente6) VALUES ('$secre', '$nomSecretario', '$principal1', '$principal2', '$principal3', '$principal4', '$principal5', '$principal6', '$suplente1', '$suplente2', '$suplente3', '$suplente4', '$suplente5', '$suplente6')");

        header('location:indexSecre.php?flag=1');
?>
