<?php
        session_start();

        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');

        //VARIABLES

        $secre = '1';
        $secGene = $_GET['nomSecretario'];
        $secOrg = $_GET['pricipal1'];
        $secSindi = $_GET['pricipal2'];
        $secAgra = $_GET['pricipal3'];
        $secfeme = $_GET['pricipal4'];
        $secEdu = $_GET['pricipal5'];
        $secJuve = $_GET['pricipal6'];
        $secCultu = $_GET['suplente1'];
        $secDiSex = $_GET['suplente2'];
        $secProTec = $_GET['suplente3'];
        $secAsuMuni = $_GET['suplente4'];
        $secPoli = $_GET['suplente5'];
        $secActCor = $_GET['suplente6'];

        //TBL_DATHABI
        $db->exec("UPDATE comiEjecu SET secGene='$secGene', secOrg='$secOrg', secSindi='$secSindi', secAgra='$secAgra', secfeme='$secfeme', secEdu='$secEdu', secJuve='$secJuve', secCultu='$secCultu', secDiSex='$secDiSex', secProTec='$secProTec', secAsuMuni='$secAsuMuni', secPoli='$secPoli', secActCor='$secActCor' WHERE idCoEj='$secre'");

        header('location:verSecrEje.php');
?>
