<?php include('inclu/admin.inc.php'); ?>

    <!-- ZONA DE TRABAJO -->
    <div class="container">
                <div class="well text-center">
                    <h2>ACTUALIZAR MILITANTE</h2>
                </div>

<?php
       $idMiembro = $_REQUEST["idMiembro"];

   $sql = "SELECT * FROM miembro m, datHabi h, datosPoli p, cenVota v WHERE m.ci=(SELECT ci FROM miembro WHERE idMiembro='$idMiembro') AND h.ci=(SELECT ci FROM miembro WHERE idMiembro='$idMiembro') AND p.ci=(SELECT ci FROM miembro WHERE idMiembro='$idMiembro') AND v.ci=(SELECT ci FROM miembro WHERE idMiembro='$idMiembro') LIMIT 1";

   $ret = $db->query($sql); /* <?php echo $row['']; ?> */

   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){

    $idD = $row['idDatHabi'];
    $idC = $row['idCenVota'];
    $idP = $row['idPoli'];
    $idM = $row['idMiembro'];
?>

<form method="get" action="update.php" enctype="multipart/form-data">
<fieldset class="well the-fieldset">               
    <legend class="the-legend">SECCIONAL</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<input type="radio" name="inscrip" value="1" id="tu" <?php echo $row['inscrip'] == 1 ? "checked" : ""; ?> /><label for="tu">Inscripción</label>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<input type="radio" name="inscrip" value="2" id="tu1" <?php echo $row['inscrip'] == 2 ? "checked" : ""; ?> /><label for="tu1">Recenso</label>
                </td>
                <td align="center">Nº de Planilla: <strong><?php echo $row['numInsc']; ?></strong></td>
            </tr>
            <tr>
                <th width="25%">Seccional:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="seccional" required value="<?php echo $row['seccional']; ?>" /></td>
                <th width="25%">Municipio Político:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="muniPoli" required value="<?php echo $row['muniPoli']; ?>" /></td>
            </tr>
            <tr>
                <th width="25%">Comite Local:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="comiLocal" required value="<?php echo $row['comiLocal']; ?>"></td>
                <th width="25%">Parroquia Politica:<span class="asterisco">*</span></th>
                <td width="25%">
                    <div class="styled">
                        <select name="parroPoli" required  title="Participar" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="<?php echo $row['parroPoli']; ?>"><?php echo $row['parroPoli']; ?></option>
                            <?php 
                                //QUERY CENTRO DE VOTACION
                                $dbx = new SQLite3('db/opos.db');
                                $sqlx = "SELECT * FROM centro";
                                $retx = $dbx->query($sqlx);
                                while($rowx = $retx->fetchArray(SQLITE3_ASSOC)){
                            ?>
								<option value="<?php echo $rowx["nombre"]; ?>"><?php echo $rowx["nombre"]; ?></option>							
                            <?php } ?>
                        </select>
                    </div>				
				</td>                 
            </tr>            
        </table>
</fieldset>
<fieldset class="well the-fieldset">
    <legend class="the-legend">DATOS PERSONALES</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th>Nombres:<span class="asterisco">*</span></th>
                <td><input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" title="Debe colocar sus nombres" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ]+" placeholder="E.j. Pedro Ramon" /></td>
                <td rowspan="6" colspan="2" style="text-align: center;">
                    <img src="fotos/sinPic.png" id="pic" alt="TU FOTO" title="TU FOTO" />
                </td>
            </tr>
            <tr>
                <th>Apellidos:<span class="asterisco">*</span></th>
                <td><input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" title="Debe colocar sus apellidos" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom" required pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ]+" placeholder="E.j. Perez Hernandez" /></td>                 
            </tr>
            <tr>
                <th>Cedúla de Identidad:<span class="asterisco">*</span></th>
                <td><input type="text" name="ci" value="<?php echo $row['ci']; ?>" /></td>
            <tr>
                <th>Fecha de Nacimiento:<span class="asterisco">*</span></th>
                <td><div class="styled"><input type="text" name="feNac" value="<?php echo $row['feNac']; ?>" id="datepicker" placeholder="Su fecha de nacimiento" required /></div></td>
            </tr>
            <tr>
                <th>Genero:<span class="asterisco">*</span></th>
                <td>&nbsp;&nbsp;&nbsp;<input type="radio" name="genero" value="Masculino" id="gene" <?php echo $row['genero'] == "Masculino" ? "checked" : ""; ?> /><label for="gene">Masculino</label>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<input type="radio" name="genero" value="Femenino" id="gene1" <?php echo $row['genero'] == "Femenino" ? "checked" : ""; ?> /><label for="gene1">Femenino</label>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<input type="radio" name="genero" value="Otros" id="gene2" <?php echo $row['genero'] == "Otros" ? "checked" : ""; ?> /><label for="gene2">Otros</label>
                </td>
            </tr>
            <tr>
                <th>Nacionalidad:<span class="asterisco">*</span></th>
                <td><input type="text" name="nacionalidad" value="<?php echo $row['nacionalidad']; ?>" /></td>
            </tr>                                               
            <tr>
                <th>Cedula Laminada:<span class="asterisco">*</span></th>
                <td>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="laminada" value="SI" id="che" <?php echo $row['laminada'] == "SI" ? "checked" : ""; ?> /><label for="che">Si</label></td>
                <td colspan="2" style="text-align: center;">
                    <input type="file" name="foto" onchange="readURL(this);" title="Solo archivos .png o .jpg Una sola foto." id="foto" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom" />
                </td>                
            </tr>
            <tr>
                <th>Nivel de Instrucción:<span class="asterisco">*</span></th>
                <td>
                    <div class="styled">
                        <select name="nivInstruc" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="<?php echo $row['nivInstruc']; ?>"><?php echo $row['nivInstruc']; ?></option>
                            <option value="ninguno">Ninguno</option>
                            <option value="Basica">Básica</option>
                            <option value="Basica Incompleta">Básica Incompleta</option>
                            <option value="Tecnico Medio">Tenico Medio</option>
                            <option value="Bachiller">Media/Diversificada</option>
                            <option value="Tecnico Superior Universitario">Tecnico Superior Universitadrio</option>
                            <option value="Universitario">Universitario</option>
                            <option value="Postgrado">Postgrado</option>
                            <option value="Doctorado">Doctorado</option>
                        </select>
                    </div>
                </td>            
                <th>Estado Civil:<span class="asterisco">*</span></th>
                <td>
                    <div class="styled">
                        <select name="estCivil" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="<?php echo $row['estCivil']; ?>"><?php echo $row['estCivil']; ?></option>
                            <option value="Soltero">Solter@</option>
                            <option value="Casado">Casad@</option>
                            <option value="Viudo">Viud@</option>
                            <option value="Separado">Separad@</option>
                            <option value="Divorciado">Divorciad@</option>
                        </select>
                    </div>
                </td>
            </tr>
        </table>
</fieldset>
<fieldset class="well the-fieldset">
        <legend class="the-legend">OCUPACION Y TRABAJO</legend>        
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Ocupación o Profesión:</th>
                <td width="25%"><input type="text" name="profeOcupa" value="<?php echo $row['profeOcupa']; ?>" /></td>
                <th width="25%">Condición de Trabajo:</th>
                <td width="25%">
                    <div class="styled">
                        <select name="conTrab" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="<?php echo $row['conTrab']; ?>"><?php echo $row['conTrab']; ?></option>
                            <option value="No Respondio">No Respondió</option>
                            <option value="Desempleado">Desempleado</option>
                            <option value="Sector Publico">Sector Publico</option>
                            <option value="Sector Privado">Sector Privado</option>
                            <option value="Pensionado">Pensionado</option>
                        </select>
                    </div>                    
                </td>
            </tr>
            <tr>
                <th>Ocupación o Cargo Actual:</th>
                <td><input type="text" name="ocupActual" value="<?php echo $row['ocupActual']; ?>" /></td>
                <th>Organismo o Empresa:</th>
                <td><input type="text" name="orgEmp" /></td>
            </tr>            
            <tr>
                <th>Direccón de Trabajo:</th>
                <td><textarea name="dirTrab"><?php echo $row['dirTrab']; ?></textarea></td>
                <th>Teléfono del Trabajo:</th>
                <td><input type="text" name="telTrab" value="<?php echo $row['telTrab']; ?>" /></td>
            </tr>
        </table>
</fieldset>
<fieldset class="well the-fieldset">        
        <legend class="the-legend">DATOS DE CONTACTO</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
			<tr>
				<th>Estado:<span class="asterisco">*</span></th>
				<td>
					<?php 
						$sql ="SELECT * from estados ORDER BY estado";
						$retE = $db->query($sql);
					?>
					<div class="styled" id="didEstado">
					<select name="estado" id="idEstado" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
						<option value="<?php echo $row['estado']; ?>"><?php echo $row['estado']; ?></option>
                        <option value="">Selecciona un Estado...</option>
						<?php
							while($rowE = $retE->fetchArray(SQLITE3_ASSOC)){
						?>
						<option value="<?php echo $rowE['estado'];?>"><?php echo $rowE["estado"]; ?></option>
						<?php }  ?>
					</select>
					</div>
				</td>
				<th>Ciudad:<span class="asterisco">*</span></th>
				<td>
					<?php 
						$sql ="SELECT * from ciudades ORDER BY ciudad";
						$retC = $db->query($sql);
					?>
					<div class="styled" id="didCiudad">
					<select name="ciudad" id="idCiudad" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
						<option value="<?php echo $row['ciudad']; ?>"><?php echo $row['ciudad']; ?></option>
                        <option value="">Selecciona una Ciudad...</option>
						<?php
							while($rowC = $retC->fetchArray(SQLITE3_ASSOC)){
						?>
						<option value="<?php echo $rowC['ciudad'];?>"><?php echo $rowC["ciudad"]; ?></option>
						<?php }  ?>
					</select>
					</div>
				</td>
			</tr>
			<tr>
				<th>Municipio:<span class="asterisco">*</span></th>
				<td>
					<?php 
						$sql ="SELECT * from municipios ORDER BY municipio";
						$retM = $db->query($sql);
					?>
					<div class="styled" id="didMunicipio">
					<select name="municipio" id="idMunicipio" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
						<option value="<?php echo $row['municipio']; ?>"><?php echo $row['municipio']; ?></option>
                        <option value="">Selecciona un Municipio...</option>
						<?php
							while($rowM = $retM->fetchArray(SQLITE3_ASSOC)){
						?>
						<option value="<?php echo $rowM['municipio'];?>"><?php echo $rowM["municipio"]; ?></option>
						<?php }  ?>
					</select>
					</div>
				</td>
				<th>Parroquia:<span class="asterisco">*</span></th>
				<td><input type="text" name="parroquia" value="<?php echo $row['parroquia']; ?>" required /></td>
			</tr>
            <tr>
                <th>Barrio/Urbanización/Sector:<span class="asterisco">*</span></th>
                <td><input type="text" name="urbaBarrio" value="<?php echo $row['urbaBarrio']; ?>" required /></td>            
                <th>Calle/Avenida:<span class="asterisco">*</span></th>
                <td><input type="text" name="calle" value="<?php echo $row['calle']; ?>" required /></td>

            </tr>
            <tr>
                <th>Nº Casa/Edificio:<span class="asterisco">*</span></th>
                <td><input type="text" name="casa" value="<?php echo $row['casa']; ?>" required /></td>            
                <th>Piso/Apt:</th>
                <td><input type="text" name="pisoApt" value="<?php echo $row['pisoApt']; ?>" /></td>

            </tr>
            <tr>
                <th>Codígo Postal:<span class="asterisco">*</span></th>
                <td><input type="text" name="cp" value="<?php echo $row['cp']; ?>" required /></td> 
                <th>Correo:</th>
                <td><input type="text" name="email" value="<?php echo $row['email']; ?>" /></td>
            </tr>
            <tr>                          
                <th>Teléfonos:</th>
                <td><input type="text" name="telHabi" value="<?php echo $row['telHabi']; ?>" /></td>
                <th>Celular:<span class="asterisco">*</span></th>
                <td><input type="text" name="celular" value="<?php echo $row['celular']; ?>" required /></td>
            </tr>
            <tr>
                <th>Fax:</th>
                <td><input type="text" name="fax" value="<?php echo $row['fax']; ?>" /></td>
                <th>Facebook/Twitter/Instagram/LinkedIn:</th>
                <td><input type="text" name="redSocial" value="<?php echo $row['redSocial']; ?>" /></td>
            </tr>                                                                       
        </table>
</fieldset>        
        <fieldset class="well the-fieldset">
        <legend class="the-legend">CENTRO DE VOTACION</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Código:<span class="asterisco">*</span></th>
                <td width="25%">
                    <div class="styled">
                        <select name="codigoCV" required  title="Participar" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="<?php echo $row['nombreCV']; ?>"><?php echo $row['nombreCV']; ?></option>
                            <?php 
                                //QUERY CENTRO DE VOTACION
                                $dbv = new SQLite3('db/opos.db');
                                $sqlv = "SELECT * FROM centro";
                                $retv = $dbv->query($sqlv);
                                while($rowv = $retv->fetchArray(SQLITE3_ASSOC)){
                            ?>
                            <option value="<?php echo $rowv['codigo']; ?>"><?php echo $rowv["nombre"]; ?></option>           
                            <?php } ?>
                        </select>
                    </div>
                </td>
                <th width="25%">Trabaja en Mesa:</th>
                <td width="25%"><input type="text" name="trabMesa" required value="NO" required /></td>
            </tr>
        </table>
        </fieldset>
        <fieldset class="well the-fieldset">
        <legend class="the-legend">EXPERIENCIA PARTIDISTA</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Práctica Política/Electoral:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="expPoliElec" value="<?php echo $row['expPoliElec']; ?>" required /></td>
                <th width="25%">¿Le gustaria participar? Como:</th>
                <td width="25%">
                    <div class="styled">
                        <select name="participar" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="<?php echo $row['participar']; ?>"><?php echo $row['participar']; ?></option>
                            <option value="NO">Seleciona una Opción</option>
                            <option value="Testigo Principal">Testigo Principal</option>
                            <option value="Testigo 1 Suplente">Testigo 1er. Suplente</option>
                            <option value="Testigo 2 Suplente">Testigo 2do. Suplente</option>
                            <option value="Logistica">Logistica</option>
                            <option value="Propaganda">Propaganda</option>
                            <option value="Activismo">Activismo</option>
                            <option value="Movilizacion">Movilización</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <th>¿Ha militado en un Partido?:<span class="asterisco">*</span></th>
                <td><input type="text" name="militanteParti" value="<?php echo $row['militanteParti']; ?>" /></td>
                <th>¿Asociación/ONG/Gremio/Otros?:<span class="asterisco">*</span></th>
                <td><input type="text" name="orgGremiAgru" value="<?php echo $row['orgGremiAgru']; ?>" /></td>                
            </tr>
            <tr>
                <th colspan="2">¿A que Secretaria politico pertenece usted?:<span class="asterisco">*</span></th>
                <td colspan="2">
                <div class="styled">
						<select name="secParti" required  rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                        	<option value="<?php echo $row['secParti']; ?>"><?php echo $row['secParti']; ?></option>
                            <option value="NO">Seleciona una Opción</option>
                            <option value="Secretaria Organizativa">Secretaria Organizativa</option>
                            <option value="Secretaria Sindical">Secretaria Sindical</option>
                            <option value="Secretaria Agraria">Secretaria Agraria</option>
                            <option value="Secretaria Femenina">Secretaria Femenina</option>
                            <option value="Secretaria de Educacion">Secretaria de Educacion</option>
                            <option value="Secretaria Juvenil">Secretaria Juvenil</option>
                            <option value="Secretaria de Cultura">Secretaria de Cultura</option>
                            <option value="Secretaria de la Diversidad de Genero">Secretaria de la Diversidad de Genero</option>
                            <option value="Secretaria de Profesionales y Tecnicos">Secretaria de Profesionales y Tecnicos</option>
                            <option value="Secretaria de Asuntos Municipales">Secretaria de Asuntos Municipales</option>
                            <option value="Secretaria de Politica">Secretaria de Política</option>
                            <option value="Secretaria de Actas y Correspondencias">Secretaria de Actas y Correspondencias</option>
                            <option value="Secretaria Comercial">Secretaria Comercial</option>
                            <option value="Secretaria Incapacitados">Secretaria Incapacitados</option>
                            <option value="Secretaria Motorizados">Secretaria Motorizados</option>
                            <option value="Secretaria Adulto Mayor">Secretaria Adulto Mayor</option>
                        </select>
                    </div>                                      
                </td>
            </tr>
        </table>
        </fieldset>
        <fieldset class="well the-fieldset">
        <table cellspacing="2" cellpadding="5" width="100%">
            <tr>
                <td style="width: 50%" align="center" colspan="2"><input type="reset" value="Borrar" /></td>
                <td style="width: 50%" align="center" colspan="2"><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
        </fieldset>
                <input type="hidden" name="idMiembro" value="<?php echo $idM; ?>" />
                <input type="hidden" name="idCenVota" value="<?php echo $idC; ?>" />
                <input type="hidden" name="idDatHabi" value="<?php echo $idD; ?>" />
                <input type="hidden" name="idPoli" value="<?php echo $idP; ?>" />
        </form>

        <?php
                 }
            $db->close();
        ?>

    </div>

    <!-- FIN DE ZONA DE TRABAJO -->
<?php include('inclu/footer.inc.php'); ?>