<?php
        session_start();

        if ($_SESSION['cargo'] != 'Secretaria') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');

        //VARIABLES DATOSPOLI
        $ci = $_REQUEST['ci'];
        $numInsc = $_REQUEST['numInsc'];
        $inscrip = $_REQUEST['inscrip'];
        $seccional = $_REQUEST['seccional'];
        $muniPoli = $_REQUEST['muniPoli'];
        $parroPoli = $_REQUEST['parroPoli'];
        $comiLocal = $_REQUEST['comiLocal'];
        $expPoliElec = $_REQUEST['expPoliElec'];
        $secParti = $_REQUEST['secParti'];
        $militanteParti = $_REQUEST['militanteParti'];
        $orgGremiAgru = $_REQUEST['orgGremiAgru'];
        $participar = $_REQUEST['participar'];

        //VARIABLES MIEMBRO
        $nacionalidad = $_REQUEST['nacionalidad'];
        $laminada = $_REQUEST['laminada'];
        $nombres = $_REQUEST['nombres'];
        $apellidos = $_REQUEST['apellidos'];
        $feNac = $_REQUEST['feNac'];
        $genero = $_REQUEST['genero'];
        $estCivil = $_REQUEST['estCivil'];
        $nivInstruc = $_REQUEST['nivInstruc'];
        $profeOcupa = $_REQUEST['profeOcupa'];
        $conTrab = $_REQUEST['conTrab'];
        $ocupActual = $_REQUEST['ocupActual'];
        $dirTrab = $_REQUEST['dirTrab'];
        $telTrab = $_REQUEST['telTrab'];
        $orgEmp = $_REQUEST['orgEmp'];
        $activo = $_REQUEST['activo'];
        $redSocial = $_REQUEST['redSocial'];
        $foto = $_REQUEST['foto'];


        //VARIABLES DATHABI
        $estado = $_REQUEST['estado'];
        $municipio = $_REQUEST['municipio'];
        $parroquia = $_REQUEST['parroquia'];
        $ciudad = $_REQUEST['ciudad'];
        $urbaBarrio = $_REQUEST['urbaBarrio'];
        $calle = $_REQUEST['calle'];
        $casa = $_REQUEST['casa'];
        $pisoApt = $_REQUEST['pisoApt'];
        $cp = $_REQUEST['cp'];
        $telHabi = $_REQUEST['telHabi'];
        $celular = $_REQUEST['celular'];
        $email = $_REQUEST['email'];
        $fax = $_REQUEST['fax'];

        //VARIABLE CENVOTA
        $codigoCV = $_REQUEST['codigoCV'];
        $trabMesa = $_REQUEST['trabMesa'];

        //QUERY CENTRO DE VOTACION
        $db = new SQLite3('db/opos.db');

        $sql = "SELECT * FROM centro WHERE codigo='$codigoCV'";

        $ret = $db->query($sql);

        while($row = $ret->fetchArray(SQLITE3_ASSOC)){
                $dirCV=$row['direccion'];
                $nombreCV=$row['nombre'];
        }


        //TBL_DATHABI
        $db->exec("INSERT INTO datHabi (ci, estado, municipio, parroquia, ciudad, urbaBarrio, calle, casa, pisoApt, cp, telHabi, celular, email, fax) VALUES ('$ci', '$estado', '$municipio', '$parroquia', '$ciudad', '$urbaBarrio', '$calle', '$casa', '$pisoApt', '$cp', '$telHabi', '$celular', '$email', '$fax')");

        //TBL_DATOSPOLI
        $db->exec("INSERT INTO miembro (ci, nacionalidad, laminada, nombres, apellidos, feNac, genero, estCivil, nivInstruc, profeOcupa, conTrab, conTrab, ocupActual, dirTrab, telTrab, orgEmp, activo, redSocial, foto) VALUES ('$ci', '$nacionalidad', '$laminada', '$nombres', '$apellidos', '$feNac', '$genero', '$estCivil', '$nivInstruc', '$profeOcupa', '$conTrab', '$conTrab', '$ocupActual', '$dirTrab', '$telTrab', '$orgEmp', '$activo', '$redSocial', '$foto')");

        //TBL_MIEMBRO
        $db->exec("INSERT INTO datosPoli (ci, numInsc, inscrip, seccional, muniPoli, parroPoli, comiLocal, expPoliElec, secParti, militanteParti, orgGremiAgru, participar) VALUES ('$ci', '$numInsc', '$inscrip', '$seccional', '$muniPoli', '$parroPoli', '$comiLocal', '$expPoliElec', '$secParti', '$militanteParti', '$orgGremiAgru', '$participar')");

        //TBL_CENVOTA

        $db->exec("INSERT INTO cenVota (ci, codigoCV, dirCV, nombreCV, trabMesa) VALUES ('$ci', '$codigoCV', '$dirCV', '$nombreCV', '$trabMesa')");

        //echo 'LOS DATOS HAN SIDO INGRESADO SATISFACTORIAMENTE';

        header('location:listaSe.php');
?>
