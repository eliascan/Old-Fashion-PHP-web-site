<?php 
        include('inclu/admin.inc.php');
		error_reporting(0);

        $ci = $_GET['ci'];

        $db = new SQLite3('db/opos.db');

        $sql = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci=c.ci AND m.ci='$ci'";

        $ret = $db->query($sql);    

 ?>

    <!-- ZONA DE TRABAJO -->
    <div class="container">
                <div class="well text-center">
                    <h2>PERFIL DEL MILITANTE</h2>
                </div>

<?php while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ ?>

<fieldset class="well the-fieldset">               
    <legend class="the-legend">SECCIONAL</legend>
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <td align="center" colspan="3"><strong><?php echo $row['inscrip'] == 1 ? "NUEVO INSCRITO" : "RECENSO"; ?></strong></td>
                <td align="center">Nº de Planilla: <strong><?php echo $row['numInsc']; ?></strong></td>
            </tr>
            <tr>
                <th width="25%">Seccional:</th>
                <td width="25%"><?php echo $row['seccional']; ?></td>
                <th width="25%">Municipio Político:</th>
                <td width="25%"><?php echo $row['muniPoli']; ?></td>
            </tr>
            <tr>
                <th>Comite Local:</th>
                <td><?php echo $row['comiLocal']; ?></td>
                <th>Parroquia Politica:</th>
                <td><?php echo $row['parroPoli']; ?></td>                 
            </tr>            
        </table>
</fieldset>
<fieldset class="well the-fieldset">
    <legend class="the-legend">DATOS PERSONALES</legend>
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Nombres:</th>
                <td width="25%"><?php echo $row['nombres']; ?></td>
                <td rowspan="9" colspan="2" style="text-align: center;" width="50%">
                    <img src="fotos/sinPic.png" id="pic" alt="TU FOTO" title="TU FOTO" />
                </td>
            </tr>
            <tr>
                <th>Apellidos:</th>
                <td><?php echo $row['apellidos']; ?></td>                 
            </tr>
            <tr>
                <th>Cedúla de Identidad:</th>
                <td><?php echo $row['ci']; ?></td>
            <tr>
                <th>Fecha de Nacimiento:</th>
                <td><?php echo $row['feNac']; ?></td>
            </tr>
            <tr>
                <th>Genero:</th>
                <td><?php echo $row['genero']; ?></td>
            </tr>
            <tr>
                <th>Nacionalidad:</th>
                <td><?php echo $row['nacionalidad']; ?></td>
            </tr>                                               
            <tr>
                <th>Cedula Laminada:</th>
                <td><?php echo $row['laminada']; ?></td>
            </tr>
            <tr>
                <th>Nivel de Instrucción:</th>
                <td><?php echo $row['nivInstruc']; ?></td>
            </tr>
            <tr>
                <th>Estado Civil:</th>
                <td><?php echo $row['estCivil']; ?></td>
            </tr>
        </table>
</fieldset>
<fieldset class="well the-fieldset">
        <legend class="the-legend">OCUPACION Y TRABAJO</legend>        
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Ocupación o Profesión:</th>
                <td width="25%"><?php echo $row['profeOcupa']; ?></td>
                <th width="25%">Condición de Trabajo:</th>
                <td width="25%"><?php echo $row['conTrab']; ?></td>
            </tr>
            <tr>
                <th>Ocupación o Cargo Actual:</th>
                <td><?php echo $row['ocupActual']; ?></td>
                <th>Organismo o Empresa:</th>
                <td><?php echo $row['orgEmp']; ?></td>
            </tr>            
            <tr>
                <th>Direccón de Trabajo:</th>
                <td><?php echo $row['dirTrab']; ?></td>
                <th>Teléfono del Trabajo:</th>
                <td><?php echo $row['telTrab']; ?></td>
            </tr>
        </table>
</fieldset>
<fieldset class="well the-fieldset">        
        <legend class="the-legend">DATOS DE CONTACTO</legend>
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
			<tr>
				<th width="25%">Estado:</th>
				<td width="25%"><?php echo $row['estado']; ?></td>
				<th width="25%">Ciudad:</th>
				<td width="25%"><?php echo $row['ciudad']; ?></td>
			</tr>
			<tr>
				<th>Municipio:</th>
				<td><?php echo $row['municipio']; ?></td>
				<th>Parroquia:</th>
				<td><?php echo $row['parroquia']; ?></td>
			</tr>
            <tr>
                <th>Barrio/Urbanización/Sector:</th>
                <td><?php echo $row['urbaBarrio']; ?></td>            
                <th>Calle/Avenida:</th>
                <td><?php echo $row['calle']; ?></td>

            </tr>
            <tr>
                <th>Nº Casa/Edificio:</th>
                <td><?php echo $row['casa']; ?></td>            
                <th>Piso/Apt:</th>
                <td><?php echo $row['pisoApt']; ?></td>

            </tr>
            <tr>
                <th>Codígo Postal:</th>
                <td><?php echo $row['cp']; ?></td> 
                <th>Correo:</th>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>                          
                <th>Teléfonos:</th>
                <td><?php echo $row['telHabi']; ?></td>
                <th>Celular:</th>
                <td><?php echo $row['celular']; ?></td>
            </tr>
            <tr>
                <th>Fax:</th>
                <td><?php echo $row['fax']; ?></td>
                <th>Facebook/Twitter/Instagram/LinkedIn:</th>
                <td><?php echo $row['redSocial']; ?></td>
            </tr>                                                                       
        </table>
</fieldset>        
        <fieldset class="well the-fieldset">
        <legend class="the-legend">CENTRO DE VOTACION</legend>
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Nombre C.V.:</th>
                <td width="25%"><?php echo $row['nombreCV']; ?></td>
                <th width="25%">Código:</th>
                <td width="25%"><?php echo $row['codigoCV']; ?></td>
            </tr>
            <tr>
                <th>Dirección C.V.:</th>
                <td><?php echo $row['dirCV']; ?></td>
                <th>Trabaja en Mesa:</th>
                <td><?php echo $row['trabMesa']; ?></td>
            </tr>
        </table>
        </fieldset>
        <fieldset class="well the-fieldset">
        <legend class="the-legend">EXPERIENCIA PARTIDISTA</legend>
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Práctica Política/Electoral:</th>
                <td width="25%"><?php echo $row['expPoliElec']; ?></td>
                <th width="25%">Participa como:</th>
                <td width="25%"><?php echo $row['participar']; ?></td>
            </tr>
            <tr>
                <th>Partido al cual milita:</th>
                <td><?php echo $row['militanteParti']; ?></td>
                <th>Asociación/ONG/Gremio/Otros:</th>
                <td><?php echo $row['orgGremiAgru']; ?></td>                
            </tr>
            <tr>
                <th colspan="2">Cargo dentro de nuestar organizacón:</th>
                <td colspan="2"><?php echo $row['secParti']; ?></td>
            </tr>
        </table>
        </fieldset> 
        <?php
                 }
            $db->close();
        ?>
    </div>


    <!-- FIN DE ZONA DE TRABAJO -->
<?php include('inclu/footer.inc.php'); ?>