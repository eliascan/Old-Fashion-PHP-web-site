<?php
        session_start();
            
        if ($_SESSION['cargo'] != 'Admin') {

                header('location:index.php?flag=2');
        }

        error_reporting(0);
        $db = new SQLite3('db/opos.db');      

       $ci = $_REQUEST['ci'];

        //VARIABLES DATOSPOLI
        $idPoli = $_REQUEST['idPoli'];
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
        $idMiembro = $_REQUEST['idMiembro'];
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
        $idDatHabi = $_REQUEST['idDatHabi'];
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
        $idCenVota = $_REQUEST['idCenVota'];
        $codigoCV = $_REQUEST['codigoCV'];
        $dirCV = $_REQUEST['dirCV'];
        $nombreCV = $_REQUEST['nombreCV'];
        $trabMesa = $_REQUEST['trabMesa'];


        //TBL_DATOSPOLI
        $db->exec("UPDATE miembro SET ci='$ci', nacionalidad='$nacionalidad', laminada='$laminada', nombres='$nombres', apellidos='$apellidos', feNac='$feNac', genero='$genero', estCivil='$estCivil', nivInstruc='$nivInstruc', profeOcupa='$profeOcupa', conTrab='$conTrab', conTrab='$conTrab', ocupActual='$ocupActual', dirTrab='$dirTrab', telTrab='$telTrab', orgEmp='$orgEmp', activo='$activo', redSocial='$redSocial', foto='$foto' WHERE idMiembro='$idMiembro'");

        //TBL_DATHABI
        $db->exec("UPDATE datHabi SET ci='$ci', estado='$estado', municipio='$municipio', parroquia='$parroquia', ciudad='$ciudad', urbaBarrio='$urbaBarrio', calle='$calle', casa='$casa', pisoApt='$pisoApt', cp='$cp', telHabi='$telHabi', celular='$celular', email='$email', fax='$fax' WHERE idDatHabi='$idDatHabi'");        

        //TBL_MIEMBRO
        $db->exec("UPDATE datosPoli SET ci='$ci', inscrip='$inscrip', seccional='$seccional', muniPoli='$muniPoli', parroPoli='$parroPoli', comiLocal='$comiLocal', expPoliElec='$expPoliElec', secParti='$secParti', militanteParti='$militanteParti', orgGremiAgru='$orgGremiAgru', participar='$participar' WHERE idPoli='$idPoli'");

        //TBL_CENVOTA

        $db->exec("UPDATE cenVota SET ci='$ci', codigoCV='$codigoCV', dirCV='$dirCV', nombreCV='$nombreCV', trabMesa='$trabMesa' WHERE idCenVota='$idCenVota'");

        //echo 'LOS DATOS HAN SIDO MODIFICADOS SATISFACTORIAMENTE';

        header('location:lista.php');
?>