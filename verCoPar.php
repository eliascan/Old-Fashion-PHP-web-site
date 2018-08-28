<?php include('inclu/admin.inc.php'); ?>
<?php
		error_reporting(0);
		$secre = $_GET['secre'];

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
		$secComer = $fila['secComer'];
		$secAMay = $fila['secAMay'];
		$secInca = $fila['secInca'];
		$secMoto = $fila['secMoto'];
    	}

    	// P - 1
		$dbp1 = new SQLite3('db/opos.db');

    	$sqlp1 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secOrg'";

    	$retp1 = $db->query($sqlp1);

    	// P - 2
		$dbp2 = new SQLite3('db/opos.db');

    	$sqlp2 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secSindi'";

    	$retp2 = $db->query($sqlp2); 

    	// P - 3
		$dbp3 = new SQLite3('db/opos.db');

    	$sqlp3 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secAgra'";

    	$retp3 = $db->query($sqlp3); 

    	// P - 4
		$dbp4 = new SQLite3('db/opos.db');

    	$sqlp4 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secFeme'";

    	$retp4 = $db->query($sqlp4); 

    	// P - 5
		$dbp5 = new SQLite3('db/opos.db');

    	$sqlp5 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secEdu'";

    	$retp5 = $db->query($sqlp5); 

    	// P - 6
		$dbp6 = new SQLite3('db/opos.db');

    	$sqlp6 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secJuve'";

    	$retp6 = $db->query($sqlp6);

    	// S - 1
		$dbs1 = new SQLite3('db/opos.db');

    	$sqls1 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secCultu'";

    	$rets1 = $db->query($sqls1);

    	// S - 2
		$dbs2 = new SQLite3('db/opos.db');

    	$sqls2 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secDiSex'";

    	$rets2 = $db->query($sqls2); 

    	// S - 3
		$dbs3 = new SQLite3('db/opos.db');

    	$sqls3 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secProTec'";

    	$rets3 = $db->query($sqls3); 

    	// S - 4
		$dbs4 = new SQLite3('db/opos.db');

    	$sqls4 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secAsuMuni'";

    	$rets4 = $db->query($sqls4); 

    	// S - 5
		$dbs5 = new SQLite3('db/opos.db');

    	$sqls5 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secActCor'";

    	$rets5 = $db->query($sqls5); 

    	// S - 6
		$dbs6 = new SQLite3('db/opos.db');

    	$sqls6 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secPoli'";

    	$rets6 = $db->query($sqls6);
		
    	// S - 7
		$dbs7 = new SQLite3('db/opos.db');

    	$sqls7 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secComer'";

    	$rets7 = $db->query($sqls7); 

    	// S - 8
		$dbs8 = new SQLite3('db/opos.db');

    	$sqls8 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secInca'";

    	$rets8 = $db->query($sqls8); 

    	// S - 9
		$dbs9 = new SQLite3('db/opos.db');

    	$sqls9 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secMoto'";

    	$rets9 = $db->query($sqls9); 

    	// S - 10
		$dbs10 = new SQLite3('db/opos.db');

    	$sqls10 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$secAMay'";

    	$rets10 = $db->query($sqls10);		
?>
							<!--AREA DE TRABAJO-->
<div class="container">
              
        <div class="well text-center">
            <h2><?php echo "COMITÉ PARROQUIAL " . $comiParro; ?></h2>
        </div>
    <fieldset class="well the-fieldset">               
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
        	<thead>
            <tr>
        		<th width="25%">CARGO</th>
        		<th width="15%">NOMBRES</th>
        		<th width="15%">APELLIDOS</th>
        		<th width="10%">Nº DE CEDULA</th>
        		<th width="10%">CELULAR</th>
				<th width="25%">C.V.</th>
        	</tr>
            </thead>
        		<?php while($filap1 = $retp1->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE ORGANIZACIÓN</td>
        		<td><?php echo $filap1["nombres"]; ?></td>
        		<td><?php echo $filap1["apellidos"]; ?></td>
        		<td><?php echo $filap1["ci"]; ?></td>
        		<td><?php echo $filap1["celular"]; ?></td>
				<td><?php echo $filap1["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filap2 = $retp2->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ SINDICAL</td>
        		<td><?php echo $filap2["nombres"]; ?></td>
        		<td><?php echo $filap2["apellidos"]; ?></td>
        		<td><?php echo $filap2["ci"]; ?></td>
        		<td><?php echo $filap2["celular"]; ?></td>
				<td><?php echo $filap2["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filap3 = $retp3->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ AGRARI@</td>
        		<td><?php echo $filap3["nombres"]; ?></td>
        		<td><?php echo $filap3["apellidos"]; ?></td>
        		<td><?php echo $filap3["ci"]; ?></td>
        		<td><?php echo $filap3["celular"]; ?></td>
				<td><?php echo $filap3["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filap4 = $retp4->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARIA DE LA MUJER</td>
        		<td><?php echo $filap4["nombres"]; ?></td>
        		<td><?php echo $filap4["apellidos"]; ?></td>
        		<td><?php echo $filap4["ci"]; ?></td>
        		<td><?php echo $filap4["celular"]; ?></td>
				<td><?php echo $filap4["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filap5 = $retp5->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE EDUCACIÓN</td>
        		<td><?php echo $filap5["nombres"]; ?></td>
        		<td><?php echo $filap5["apellidos"]; ?></td>
        		<td><?php echo $filap5["ci"]; ?></td>
        		<td><?php echo $filap5["celular"]; ?></td>
				<td><?php echo $filap5["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filap6 = $retp6->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE LA JUVENTUD</td>
        		<td><?php echo $filap6["nombres"]; ?></td>
        		<td><?php echo $filap6["apellidos"]; ?></td>
        		<td><?php echo $filap6["ci"]; ?></td>
        		<td><?php echo $filap6["celular"]; ?></td>
				<td><?php echo $filap6["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filas1 = $rets1->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE CULTURA</td>
        		<td><?php echo $filas1["nombres"]; ?></td>
        		<td><?php echo $filas1["apellidos"]; ?></td>
        		<td><?php echo $filas1["ci"]; ?></td>
        		<td><?php echo $filas1["celular"]; ?></td>
				<td><?php echo $filas1["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filas2 = $rets2->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE LA DIVERSIDAD DE SEXO</td>
        		<td><?php echo $filas2["nombres"]; ?></td>
        		<td><?php echo $filas2["apellidos"]; ?></td>
        		<td><?php echo $filas2["ci"]; ?></td>
        		<td><?php echo $filas2["celular"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filas3 = $rets3->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE PROFESIONALES Y TÉCNICOS</td>
        		<td><?php echo $filas3["nombres"]; ?></td>
        		<td><?php echo $filas3["apellidos"]; ?></td>
        		<td><?php echo $filas3["ci"]; ?></td>
        		<td><?php echo $filas3["celular"]; ?></td>
				<td><?php echo $filas3["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filas4 = $rets4->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE ASUNTOS MUNICIPALES</td>
        		<td><?php echo $filas4["nombres"]; ?></td>
        		<td><?php echo $filas4["apellidos"]; ?></td>
        		<td><?php echo $filas4["ci"]; ?></td>
        		<td><?php echo $filas4["celular"]; ?></td>
				<td><?php echo $filas4["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filas5 = $rets5->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE ACTAS Y CORRESPONDENCIA</td>
        		<td><?php echo $filas5["nombres"]; ?></td>
        		<td><?php echo $filas5["apellidos"]; ?></td>
        		<td><?php echo $filas5["ci"]; ?></td>
        		<td><?php echo $filas5["celular"]; ?></td>
				<td><?php echo $filas5["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
        		<?php while($filas6 = $rets6->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ DE POLÍTICA</td>
        		<td><?php echo $filas6["nombres"]; ?></td>
        		<td><?php echo $filas6["apellidos"]; ?></td>
        		<td><?php echo $filas6["ci"]; ?></td>
        		<td><?php echo $filas6["celular"]; ?></td>
				<td><?php echo $filas6["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
				<?php while($filas7 = $rets7->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ COMERCIAL</td>
        		<td><?php echo $filas7["nombres"]; ?></td>
        		<td><?php echo $filas7["apellidos"]; ?></td>
        		<td><?php echo $filas7["ci"]; ?></td>
        		<td><?php echo $filas7["celular"]; ?></td>
				<td><?php echo $filas7["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
				<?php while($filas8 = $rets8->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ INCAPACITADOS</td>
        		<td><?php echo $filas8["nombres"]; ?></td>
        		<td><?php echo $filas8["apellidos"]; ?></td>
        		<td><?php echo $filas8["ci"]; ?></td>
        		<td><?php echo $filas8["celular"]; ?></td>
				<td><?php echo $filas8["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
				<?php while($filas9 = $rets9->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ MOTORIZADOS</td>
        		<td><?php echo $filas9["nombres"]; ?></td>
        		<td><?php echo $filas9["apellidos"]; ?></td>
        		<td><?php echo $filas9["ci"]; ?></td>
        		<td><?php echo $filas9["celular"]; ?></td>
				<td><?php echo $filas9["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?>
				<?php while($filas8 = $rets8->fetchArray(SQLITE3_ASSOC)){ ?>
        	<tr>
        		<td>SECRETARI@ ADULTO MAYOR</td>
        		<td><?php echo $filas10["nombres"]; ?></td>
        		<td><?php echo $filas10["apellidos"]; ?></td>
        		<td><?php echo $filas10["ci"]; ?></td>
        		<td><?php echo $filas10["celular"]; ?></td>
				<td><?php echo $filas10["nombreCV"]; ?></td>
        	</tr>
        		<?php }  ?> 				
        </table>
    </fieldset>    

</div>

							<!--FIN DE AREA DE TRABAJO-->
<?php include('inclu/footer.inc.php'); ?>