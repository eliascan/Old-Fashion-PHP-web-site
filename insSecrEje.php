<?php
        session_start();
            
        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');     

        //VARIABLES 
  
        $secGene = $_REQUEST['nomSecretario'];
        $secOrg = $_REQUEST['principal1'];
        $secSindi = $_REQUEST['principal2'];
        $secAgra = $_REQUEST['principal3'];
        $secfeme = $_REQUEST['principal4'];
        $secEdu = $_REQUEST['principal5'];
        $secJuve = $_REQUEST['principal6'];
        $secCultu = $_REQUEST['suplente1'];
        $secDiSex = $_REQUEST['suplente2'];
        $secProTec = $_REQUEST['suplente3'];
        $secAsuMuni = $_REQUEST['suplente4'];
        $secPoli = $_REQUEST['suplente5'];
        $secActCor = $_REQUEST['suplente6'];

        //TBL_DATHABI
        $db->exec("INSERT INTO comiEjecu (secGene, secOrg, secSindi, secAgra, secfeme, secEdu, secJuve, secCultu, secDiSex, secProTec, secAsuMuni, secPoli, secActCor) VALUES ('$secGene', '$secOrg', '$secSindi', '$secAgra', '$secfeme', '$secEdu', '$secJuve', '$secCultu', '$secDiSex', '$secProTec', '$secAsuMuni', '$secPoli', '$secActCor')");

        header('location:indexSecre.php?flag=1');
?>