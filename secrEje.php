<?php include('inclu/admin.inc.php'); ?>

<?php

		$db = new SQLite3('db/opos.db');
		
    	$sql = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci";

    	$ret = $db->query($sql);
		
		// PARA VER SI SECRETARIA ESTA VACIA		
		$bd = new SQLite3('db/opos.db');

		$tato = "SELECT COUNT(*) AS id FROM comiEjecu";

		$tata = $bd->query($tato);

    	while ($fila = $tata->fetchArray(SQLITE3_ASSOC)) {
    			$ID = $fila['id'];
    	}
?>
							<!--AREA DE TRABAJO-->
<div class="container">
				<?php
    					if ($ID == 0) {
				?>
                <div class="well text-center">
                    <h2>COMITÉ EJECUTIVO</h2>
                </div>
        <fieldset class="well the-fieldset">
        	<form action="insSecrEje.php" method="get">             
			<table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            	<tr>
					<th style="width:40%">SECRETARIO GENERAL</th>
					<td>
						<select name="nomSecretario" class="form-control">
							<option value="NO">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARIO DE ORGANIZACIÓN</th>
					<td>
						<select name="principal1" class="form-control">
							<option value="NO">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARIO SINDICAL</th>
					<td>
						<select name="principal2" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO AGRARIO</th>
					<td>
						<select name="principal3" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO FEMENINO</th>
					<td>
						<select name="principal4" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO DE EDUCACIÓN</th>
					<td>
						<select name="principal5" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO JUVENIL</th>
					<td>
						<select name="principal6" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
				<tr>
					<th>SECRETARIO CULTURA</th>
					<td>
						<select name="suplente1" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARIO DE LA DIVERSIDAD SEXUAL</th>
					<td>
						<select name="suplente2" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARIO DE PROFESIONALES Y TÉCNICOS</th>
					<td>
						<select name="suplente3" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO ASUNTOS MUNICIPALES</th>
					<td>
						<select name="suplente4" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO DE POLÍTICA</th>
					<td>
						<select name="suplente5" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARIO DE ACTAS Y CORRESPONDENCIA</th>
					<td>
						<select name="suplente6" class="form-control">
							<option value="">... Seleccionar ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>	    
            </table>
        </fieldset>
		<fieldset class="well the-fieldset">
        <table cellspacing="2" cellpadding="5" width="100%">
            <tr>
                <td style="width: 50%" align="center" colspan="2"><input type="reset" value="Borrar" /></td>
                <td style="width: 50%" align="center" colspan="2"><input type="submit" value="Enviar" /></td>
                <input type="hidden" name="secretaria" value="<?php echo $secre; ?>" />
            </tr>
        </table>
        </fieldset> 
        </form>               
    </div>
							<!--FIN DE AREA DE TRABAJO-->
<?php } else {
				echo '<div class="col-lg-12 text-center">';
				echo '<h1>SECRETARIA YA ESTA CREADA</h1></div>';
			}
						
	include('inclu/footer.inc.php'); ?>