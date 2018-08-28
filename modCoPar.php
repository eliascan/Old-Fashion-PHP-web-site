<?php include('inclu/admin.inc.php'); ?>
<?php
		error_reporting(0);
		$secre = $_GET['secre'];

    	// CONSULTA PARA LLENAR LOS DROPDOWNLIST

		$db = new SQLite3('db/opos.db');

    	$sql = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci";

    	$ret = $db->query($sql);		

		// CONSULTA TABLA secretaria
		$bd = new SQLite3('db/opos.db');

    	$sq = "SELECT * FROM comiPar WHERE idCoPar='$secre'";

    	$res = $bd->query($sq);

    	while($fila = $res->fetchArray(SQLITE3_ASSOC)){
			$comiParro = $fila['comiParro'];
			$secOrg = $fila['secOrg'];
			$secSindi = $fila['secSindi'];
			$secAgra = $fila['secAgra'];
			$secFeme = $fila['secFeme'];
			$secEdu = $fila['secEdu'];
			$secJuve = $fila['secJuve'];
			$secCultu = $fila['secCultu'];
			$secDiSex = $fila['secDiSex'];
			$secProTec = $fila['secProTec'];
			$secAsuMuni = $fila['secAsuMuni'];
			$secActCor = $fila['secActCor'];
			$secPoli = $fila['secPoli'];
			$id = $fila['idCoPar'];
    	}

    	// RETRETA DE QUERYS
		$dbn = new SQLite3('db/opos.db');

    	$sqln = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$nomSecretario'";

    	$retn = $db->query($sqln); 

    	// P - 1
		$dbp1 = new SQLite3('db/opos.db');

    	$sqlp1 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secOrg'";

    	$retp1 = $db->query($sqlp1);

    	// P - 2
		$dbp2 = new SQLite3('db/opos.db');

    	$sqlp2 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secSindi'";

    	$retp2 = $db->query($sqlp2); 

    	// P - 3
		$dbp3 = new SQLite3('db/opos.db');

    	$sqlp3 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secAgra'";

    	$retp3 = $db->query($sqlp3); 

    	// P - 4
		$dbp4 = new SQLite3('db/opos.db');

    	$sqlp4 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secFeme'";

    	$retp4 = $db->query($sqlp4); 

    	// P - 5
		$dbp5 = new SQLite3('db/opos.db');

    	$sqlp5 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secEdu'";

    	$retp5 = $db->query($sqlp5); 

    	// P - 6
		$dbp6 = new SQLite3('db/opos.db');

    	$sqlp6 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secJuve'";

    	$retp6 = $db->query($sqlp6);

    	// S - 1
		$dbs1 = new SQLite3('db/opos.db');

    	$sqls1 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secCultu'";

    	$rets1 = $db->query($sqls1);

    	// S - 2
		$dbs2 = new SQLite3('db/opos.db');

    	$sqls2 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secDiSex'";

    	$rets2 = $db->query($sqls2); 

    	// S - 3
		$dbs3 = new SQLite3('db/opos.db');

    	$sqls3 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secProTec'";

    	$rets3 = $db->query($sqls3); 

    	// S - 4
		$dbs4 = new SQLite3('db/opos.db');

    	$sqls4 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secAsuMuni'";

    	$rets4 = $db->query($sqls4); 

    	// S - 5
		$dbs5 = new SQLite3('db/opos.db');

    	$sqls5 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secActCor'";

    	$rets5 = $db->query($sqls5); 

    	// S - 6
		$dbs6 = new SQLite3('db/opos.db');

    	$sqls6 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$secPoli'";

    	$rets6 = $db->query($sqls6);
?>
							<!--AREA DE TRABAJO-->
<div class="container">
                <div class="col-lg-12 text-center">
                    <h2><?php echo 'ACTUALIZAR COMITÉ PARROQUIAL ' . $comiParro; ?></h2>
                </div>
        <fieldset class="well the-fieldset">
        	<form action="updateCoPar.php" method="get">             
			<table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            	<tr>
					<th>COMITÉ PARROQUIAL<span class="asterisco">*</span></th>
					<td><input type="text" name="comiParro" value="<?php echo $comiParro; ?>" required></td>
				</tr>
            	<tr>
					<th>SECRETARÍ@ DE ORGANIZACIÓN</th>
					<td>
						<select name="secOrg" class="form-control">
						<?php while($filap1 = $retp1->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filap1['ci']; ?>"><?php echo $filap1["nombres"] . ' ' . $filap1["apellidos"] . ' | CI: '. $filap1['ci'] . ' | CELULAR: ' . $filap1['celular'] . ' | ' . $filap1['secParti']; ?></option>
						<?php }  ?>
						<option value="NO">... Selecciona un SECRETARI@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARÍ@ SINDICAL</th>
					<td>
						<select name="secSindi" class="form-control">
						<?php while($filap2 = $retp2->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filap2['ci']; ?>"><?php echo $filap2["nombres"] . ' ' . $filap2["apellidos"] . ' | CI: '. $filap2['ci'] . ' | CELULAR: ' . $filap2['celular'] . ' | ' . $filap2['secParti']; ?></option>
						<?php }  ?>																	
							<option value="NO">... Selecciona un SECRETARÍ@...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARÍ@ AGRARIA</th>
					<td>
						<select name="secAgra" class="form-control">
						<?php while($filap3 = $retp3->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filap3['ci']; ?>"><?php echo $filap3["nombres"] . ' ' . $filap3["apellidos"] . ' | CI: '. $filap3['ci'] . ' | CELULAR: ' . $filap3['celular'] . ' | ' . $filap3['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARÍ@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARÍA DE LA MUJER</th>
					<td>
						<select name="secFeme" class="form-control">
						<?php while($filap4 = $retp4->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filap4['ci']; ?>"><?php echo $filap4["nombres"] . ' ' . $filap4["apellidos"] . ' | CI: '. $filap4['ci'] . ' | CELULAR: ' . $filap4['celular'] . ' | ' . $filap4['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARI@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARÍA DE EDUCACIÓN</th>
					<td>
						<select name="secEdu" class="form-control">
						<?php while($filap5 = $retp5->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filap5['ci']; ?>"><?php echo $filap5["nombres"] . ' ' . $filap5["apellidos"] . ' | CI: '. $filap5['ci'] . ' | CELULAR: ' . $filap5['celular'] . ' | ' . $filap5['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona una SECRETARI@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARÍA DE LA JUVENTUD</th>
					<td>
						<select name="secJuve" class="form-control">
						<?php while($filap6 = $retp6->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filap6['ci']; ?>"><?php echo $filap6["nombres"] . ' ' . $filap6["apellidos"] . ' | CI: '. $filap6['ci'] . ' | CELULAR: ' . $filap6['celular'] . ' | ' . $filap6['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARÍ@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
				<tr>
					<th>SECRETARÍ@ DE CULTURA</th>
					<td>
						<select name="secCultu" class="form-control">
						<?php while($filas1 = $rets1->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filas1['ci']; ?>"><?php echo $filas1["nombres"] . ' ' . $filas1["apellidos"] . ' | CI: '. $filas1['ci'] . ' | CELULAR: ' . $filaps1['celular'] . ' | ' . $filas1['secParti']; ?></option>
						<?php }  ?>						
							<option value="">... Selecciona un SECRETARÍ@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARÍ@ DE LA DIVERSIDAD DE SEXO</th>
					<td>
						<select name="secDiSex" class="form-control">
						<?php while($filas2 = $rets2->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filas2['ci']; ?>"><?php echo $filas2["nombres"] . ' ' . $filas2["apellidos"] . ' | CI: '. $filas2['ci'] . ' | CELULAR: ' . $filaps2['celular']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARÍ@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr>
            	<tr>
					<th>SECRETARÍ@ DE PROFESIONALES Y TECNICOS</th>
					<td>
						<select name="secProTec" class="form-control">
						<?php while($filas3 = $rets3->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filas3['ci'];?>"><?php echo $filas3["nombres"] . ' ' . $filas3["apellidos"] . ' | CI: '. $filas3['ci'] . ' | CELULAR: ' . $filaps3['celular'] . ' | ' . $filas3['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARÍ@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARÍ@ DE ASUNTOS MUNICIPALES</th>
					<td>
						<select name="secAsuMuni" class="form-control">
						<?php while($filas4 = $rets4->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filas4['ci']; ?>"><?php echo $filas4["nombres"] . ' ' . $filas4["apellidos"] . ' | CI: '. $filas4['ci'] . ' | CELULAR: ' . $filaps4['celular'] . ' | ' . $filas4['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARÍ@ ...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRATARÍ@ DE ACTAS Y CORRESPONDENCIAS</th>
					<td>
						<select name="secActCor" class="form-control">
						<?php while($filas5 = $rets5->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filas5['ci']; ?>"><?php echo $filas5["nombres"] . ' ' . $filas5["apellidos"] . ' | CI: '. $filas5['ci'] . ' | CELULAR: ' . $filaps5['celular'] . ' | ' . $filas5['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un SECRETARÍ@...</option>
							<?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
						<option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti']; ?></option>
						<?php }  ?>
					</select>
					</td>
				</tr> 
            	<tr>
					<th>SECRETARÍ@ DE POLÍTICA</th>
					<td>
						<select name="secPoli" class="form-control">
						<?php while($filas6 = $rets6->fetchArray(SQLITE3_ASSOC)){ ?>
							<option value="<?php echo $filas6['ci']; ?>"><?php echo $filas6["nombres"] . ' ' . $filas6["apellidos"] . ' | CI: '. $filas6['ci'] . ' | CELULAR: ' . $filaps6['celular'] . ' | ' . $filas6['secParti']; ?></option>
						<?php }  ?>							
							<option value="">... Selecciona un  SECRETARI@ ...</option>
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
                <input type="hidden" name="secretaria" value="<?php echo $id; ?>" />
            </tr>
        </table>
        </fieldset> 
        </form>               
    </div>							

							<!--FIN DE AREA DE TRABAJO-->
<?php include('inclu/footer.inc.php'); ?>