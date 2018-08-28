<?php
        session_start();
            
        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');     

        //VARIABLES 
		$comiParro = $_REQUEST['comiParro'];
        $secOrg = $_REQUEST['secOrg'];
        $secSindi = $_REQUEST['secSindi'];
        $secAgra = $_REQUEST['secAgra'];
        $secFeme = $_REQUEST['secFeme'];
        $secEdu = $_REQUEST['secEdu'];
        $secJuve = $_REQUEST['secJuve'];
        $secCultu = $_REQUEST['secCultu'];
        $secDiSex = $_REQUEST['secDiSex'];
        $secProTec = $_REQUEST['secProTec'];
        $secAsuMuni = $_REQUEST['secAsuMuni'];
        $secActCor = $_REQUEST['secActCor'];
        $secPoli = $_REQUEST['secPoli'];

        //TBL_DATHABI
        $db->exec("INSERT INTO comiPar (comiParro, secOrg, secSindi, secAgra, secFeme, secEdu, secJuve, secCultu, secDiSex, secProTec, secAsuMuni, secActCor, secPoli) VALUES ('$comiParro', '$secOrg', '$secSindi', '$secAgra', '$secFeme', '$secEdu', '$secJuve', '$secCultu', '$secDiSex', '$secProTec', '$secAsuMuni', '$secActCor', '$secPoli')");

        header('location:coEjPa.php?flag=1');
?>