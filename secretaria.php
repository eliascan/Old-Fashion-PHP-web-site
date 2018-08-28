<?php include('inclu/secre.inc.php');

        $cedu = $_GET['cedu'];

		$db = new SQLite3('db/opos.db');

    	$sql = "SELECT COUNT(*) AS flu FROM miembro WHERE ci='$cedu'";

    	$ret = $db->query($sql);

        while($row = $ret->fetchArray(SQLITE3_ASSOC)){
            $flu = $row['flu'];
        }

        if(empty($flu)){
?>
    <!-- ZONA DE TRABAJO -->
    <div class="container">
                <div class="well text-center">
                    <h2>INSCRIPCION Y RECENSO DE MILITANTE</h2>
                </div>
<form method="get" action="insertSe.php" enctype="multipart/form-data">
<fieldset class="well the-fieldset">               
    <legend class="the-legend">SECCIONAL</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<input type="radio" name="inscrip" value="1" id="tu" checked="checked" /><label for="tu">Inscripción</label>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<input type="radio" name="inscrip" value="2" id="tu1" /><label for="tu1">Recenso</label>
                </td>
                <td align="center">Nº de Planilla: <strong><?php echo $ran; ?><input type="hidden" name="numInsc" value="<?php echo $ran; ?>"></strong></td>
            </tr>
            <tr>
                <th width="25%">Seccional:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="seccional" required /></td>
                <th width="25%">Municipio Político:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="muniPoli" required /></td>
            </tr>
            <tr>
                <th width="25%">Comite Local:<span class="asterisco">*</span></th>
                <td width="25%"><input type="text" name="comiLocal" required></td>
                <th width="25%">Parroquia Politica:<span class="asterisco">*</span></th>
                <td width="25%">
                    <div class="styled">
                        <select name="parroPoli" required  title="Participar" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="">Seleciona una Opción</option>
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
                <td><input type="text" name="nombres" title="Debe colocar sus nombres" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ]+" placeholder="E.j. Pedro Ramon" /></td>
                <td rowspan="6" colspan="2">
					<div id="lolo" style="border:1px solid black; width:200px; height:150px; margin: auto;">
						<video id="video" width="200" height="150" autoplay></video>
					</div>
					<div id="tuto" style="border:1px solid green; width:200px; height:150px; margin:auto; display:none;">
						<canvas id="canvas" width="200" height="150"></canvas>                         
					</div>
                    <!-- <img src="fotos/sinPic.png" id="pic" alt="TU FOTO" title="TU FOTO" /> -->
                    
                    <!-- SCRIPT PARA LA FOTO -->
						<script>
							// Put event listeners into place
							window.addEventListener("DOMContentLoaded", function() {
								// Grab elements, create settings, etc.
								var canvas = document.getElementById("canvas"),
									context = canvas.getContext("2d"),
									video = document.getElementById("video"),
									videoObj = { "video": true },
									errBack = function(error) {
										console.log("Video capture error: ", error.code); 
									};

								// Put video listeners into place
								if(navigator.getUserMedia) { // Standard
									navigator.getUserMedia(videoObj, function(stream) {
										video.src = stream;
										video.play();
									}, errBack);
								} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
									navigator.webkitGetUserMedia(videoObj, function(stream){
										video.src = window.webkitURL.createObjectURL(stream);
										video.play();
									}, errBack);
								}
								else if(navigator.mozGetUserMedia) { // Firefox-prefixed
									navigator.mozGetUserMedia(videoObj, function(stream){
										video.src = window.URL.createObjectURL(stream);
										video.play();
									}, errBack);
								}
										// Trigger photo take
								document.getElementById("snap").addEventListener("click", function() {
								context.drawImage(video, 0, 0, 200, 150);
								document.getElementById("lolo").style.display = "none";
										document.getElementById("tuto").style.display = "block";
								});
							}, false);
						</script>                    
                    <!-- FIN DE SCRIPT -->
                </td>
            </tr>
            <tr>
                <th>Apellidos:<span class="asterisco">*</span></th>
                <td><input type="text" name="apellidos" title="Debe colocar sus apellidos" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom" required pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚüÜ ]+" placeholder="E.j. Perez Hernandez" /></td>                 
            </tr>
            <tr>
                <th>Cedúla de Identidad:</th>
                <td><span style="font-size:15px;"><b>V-<?php echo $cedu; ?></b></span></td>
            <tr>
                <th>Fecha de Nacimiento:<span class="asterisco">*</span></th>
                <td><div class="styled"><input type="text" name="feNac" id="datepicker" placeholder="Su fecha de nacimiento" required /></div></td>
            </tr>
            <tr>
                <th>Genero:<span class="asterisco">*</span></th>
                <td>&nbsp;&nbsp;&nbsp;<input type="radio" name="genero" value="Masculino" id="gene" checked="checked" /><label for="gene">Masculino</label>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<input type="radio" name="genero" value="Femenino" id="gene1" /><label for="gene1">Femenino</label>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<input type="radio" name="genero" value="Otros" id="gene2" /><label for="gene2">Otros</label>
                </td>
            </tr>
            <tr>
                <th>Nacionalidad:<span class="asterisco">*</span></th>
                <td><input type="text" name="nacionalidad" value="VENEZOLANA" /></td>
            </tr>                                               
            <tr>
                <th>Cedula Laminada:<span class="asterisco">*</span></th>
                <td>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="laminada" value="SI" id="che" checked="checked" /><label for="che">Si</label></td>
                <td colspan="2" style="text-align: center;">
                   <button type="button" id="snap" class="btn btn-primary btn-sm">Tomar Foto</button>
                   <button type="button" class="btn btn-primary btn-sm" onClick="location.reload(true);">Repetir</button>
                    <!--<input type="file" name="foto" onchange="readURL(this);" title="Solo archivos .png o .jpg Una sola foto." id="foto" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom" />-->
                </td>                
            </tr>

            <tr>
                
            </tr>
                <th>Nivel de Instrucción:<span class="asterisco">*</span></th>
                <td>
                    <div class="styled">
                        <select name="nivInstruc" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
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
                <td width="25%"><input type="text" name="profeOcupa" /></td>
                <th width="25%">Condición de Trabajo:</th>
                <td width="25%">
                    <div class="styled">
                        <select name="conTrab" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="No Respondio">No Respondió</option>
                            <option value="Desempleado">Desempleado</option>
                            <option value="Secretaria Publico">Secretaria Publico</option>
                            <option value="Secretaria Privado">Secretaria Privado</option>
                            <option value="Pensionado">Pensionado</option>
                        </select>
                    </div>                    
                </td>
            </tr>
            <tr>
                <th>Ocupación o Cargo Actual:</th>
                <td><input type="text" name="ocupActual" /></td>
                <th>Organismo o Empresa:</th>
                <td><input type="text" name="orgEmp" /></td>
            </tr>            
            <tr>
                <th>Direccón de Trabajo:</th>
                <td><textarea name="dirTrab"></textarea></td>
                <th>Teléfono del Trabajo:</th>
                <td><input type="text" name="telTrab" /></td>
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
						$ret = $db->query($sql);
					?>
					<div class="styled" id="didEstado">
					<select name="estado" id="idEstado" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
						<option value="">Selecciona un Estado...</option>
						<?php
							while($row = $ret->fetchArray(SQLITE3_ASSOC)){
						?>
						<option value="<?php echo $row['estado'];?>"><?php echo $row["estado"]; ?></option>
						<?php }  ?>
					</select>
					</div>
				</td>
				<th>Ciudad:<span class="asterisco">*</span></th>
				<td>
					<?php 
						$sql ="SELECT * from ciudades ORDER BY ciudad";
						$ret = $db->query($sql);
					?>
					<div class="styled" id="didCiudad">
					<select name="ciudad" id="idCiudad" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
						<option value="">Selecciona una Ciudad...</option>
						<?php
							while($row = $ret->fetchArray(SQLITE3_ASSOC)){
						?>
						<option value="<?php echo $row['ciudad'];?>"><?php echo $row["ciudad"]; ?></option>
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
						$ret = $db->query($sql);
					?>
					<div class="styled" id="didMunicipio">
					<select name="municipio" id="idMunicipio" required  title="Su estado civil" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
						<option value="">Selecciona un Municipio...</option>
						<?php
							while($row = $ret->fetchArray(SQLITE3_ASSOC)){
						?>
						<option value="<?php echo $row['municipio'];?>"><?php echo $row["municipio"]; ?></option>
						<?php }  ?>
					</select>
					</div>
				</td>
				<th>Parroquia:<span class="asterisco">*</span></th>
				<td><input type="text" name="parroquia" required title="Parroquia" />  </td>
			</tr>
            <tr>
                <th>Barrio/Urbanización/Secretaria:<span class="asterisco">*</span></th>
                <td><input type="text" name="urbaBarrio" required /></td>            
                <th>Calle/Avenida:<span class="asterisco">*</span></th>
                <td><input type="text" name="calle" required /></td>

            </tr>
            <tr>
                <th>Nº Casa/Edificio:<span class="asterisco">*</span></th>
                <td><input type="text" name="casa" required /></td>            
                <th>Piso/Apt:</th>
                <td><input type="text" name="pisoApt" /></td>

            </tr>
            <tr>
                <th>Codígo Postal:<span class="asterisco">*</span></th>
                <td><input type="text" name="cp" required /></td> 
                <th>Correo:</th>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>                          
                <th>Teléfonos:</th>
                <td><input type="text" name="telHabi" /></td>
                <th>Celular:<span class="asterisco">*</span></th>
                <td><input type="text" name="celular" required /></td>
            </tr>
            <tr>
                <th>Fax:</th>
                <td><input type="text" name="fax" /></td>
                <th>Facebook/Twitter/Instagram/LinkedIn:</th>
                <td><input type="text" name="redSocial" /></td>
            </tr>                                                                       
        </table>
</fieldset>
<?php

?>     
<fieldset class="well the-fieldset">
        <legend class="the-legend">CENTRO DE VOTACION</legend>
        <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <tr>
                <th width="25%">Código:<span class="asterisco">*</span></th>
                <td width="25%">
                    <div class="styled">
                        <select name="codigoCV" required  title="Participar" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="NO">Seleciona una Opción</option>
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
                <td width="25%"><input type="text" name="expPoliElec" required /></td>
                <th width="25%">¿Le gustaria participar? Como:<span class="asterisco">*</span></th>
                <td width="25%">
                    <div class="styled">
                        <select name="participar" required  title="Participar" rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
                            <option value="NO">Seleciona una Opción</option>
                            <option value="Testigo Principal">Testigo Principal</option>
                            <option value="Testigo 1er. Suplente">Testigo 1er. Suplente</option>
                            <option value="Testigo 2do. Suplente">Testigo 2do. Suplente</option>
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
                <td><input type="text" name="militanteParti" /></td>
                <th>¿Asociación/ONG/Gremio/Otros?:<span class="asterisco">*</span></th>
                <td><input type="text" name="orgGremiAgru" /></td>                
            </tr>
            <tr>
                <th colspan="2">¿A que Secretaria politico pertenece usted?:<span class="asterisco">*</span></th>
                <td colspan="2">
                <div class="styled">
                        <select name="secParti" required  rel="txtTooltip" data-toggle="tooltip" data-placement="bottom">
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
                <td style="width: 50%" align="center" colspan="2"><input type="submit" value="Enviar" onClick="vacio()" /></td>
            </tr>
        </table>
        </fieldset>
        <div><span class="asterisco">*</span> <span style="font-size:9px;">TODOS LOS CAMPOS CON ESTE ASTERISCO SON OBLIGATORIOS</span></div>
                <input type="hidden" name="flag" value="1" />
                <input type="hidden" name="ci" value="<?php echo $cedu; ?>" />
        </form>        
    </div>
<script type="text/javascript">
    
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }

	//function vacio() {
		var first = getUrlVars()['cedu'];
    if (!first){
        alert("ESTA TRATANDO DE ENTRAR SIN CEDULA ¡NO ESTA PERMITIDO!!!");
		window.location="exit.php";
    }

	//}

</script>    


    <!-- FIN DE ZONA DE TRABAJO -->
<?php
        }
        else {
?>
                <fieldset class="well the-fieldset"> 
                    <div class="col-lg-12 text-center">
                        <div class="alert alert-warning">
                            <h1>Este número de cedúla ya existe en la base de datos</h1>
                        </div>
                    </div>
                </fieldset>
<?php
             }
        include('inclu/footer.inc.php');