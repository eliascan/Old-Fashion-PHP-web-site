<?php
        session_start();
            
        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');     

		$secre = $_REQUEST['secretaria'];

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
        $db->exec("UPDATE comiPar SET comiParro='$comiParro', secOrg='$secOrg', secSindi='$secSindi', secAgra='$secAgra', secAgra='$secAgra', secFeme='$secFeme', secEdu='$secEdu', secJuve='$secJuve', secCultu='$secCultu', secDiSex='$secDiSex', secProTec='$secProTec', secAsuMuni='$secAsuMuni', secActCor='$secActCor', secPoli='$secPoli' WHERE idCoPar='$secre'");


        header('location:coEjPa.php');
?>