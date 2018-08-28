<?php include('inclu/admin.inc.php'); ?>
<?php
        error_reporting(0);
        $secre = $_GET['secre'];

// CONSULTA TABLA secretaria
        $bd = new SQLite3('db/opos.db');

        $sq = "SELECT * FROM comiEjecu WHERE idCoEj=1";

        $res = $bd->query($sq);

        while($fila = $res->fetchArray(SQLITE3_ASSOC)){
            $nomSecretario = $fila['secGene'];
            $principal1 = $fila['secOrg'];
            $principal2 = $fila['secSindi'];
            $principal3 = $fila['secAgra'];
            $principal4 = $fila['secfeme'];
            $principal5 = $fila['secEdu'];
            $principal6 = $fila['secJuve'];
            $suplente1 = $fila['secCultu'];
            $suplente2 = $fila['secDiSex'];
            $suplente3 = $fila['secProTec'];
            $suplente4 = $fila['secAsuMuni'];
            $suplente5 = $fila['secPoli'];
            $suplente6 = $fila['secActCor'];
        }

        // RETRETA DE QUERYS
        $dbn = new SQLite3('db/opos.db');

        $sqln = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$nomSecretario'";

        $retn = $db->query($sqln);

        // P - 1
        $dbp1 = new SQLite3('db/opos.db');

        $sqlp1 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal1'";

        $retp1 = $db->query($sqlp1);

        // P - 2
        $dbp2 = new SQLite3('db/opos.db');

        $sqlp2 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal2'";

        $retp2 = $db->query($sqlp2);

        // P - 3
        $dbp3 = new SQLite3('db/opos.db');

        $sqlp3 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal3'";

        $retp3 = $db->query($sqlp3);

        // P - 4
        $dbp4 = new SQLite3('db/opos.db');

        $sqlp4 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal4'";

        $retp4 = $db->query($sqlp4);

        // P - 5
        $dbp5 = new SQLite3('db/opos.db');

        $sqlp5 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal5'";

        $retp5 = $db->query($sqlp5);

        // P - 6
        $dbp6 = new SQLite3('db/opos.db');

        $sqlp6 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal6'";

        $retp6 = $db->query($sqlp6);

        // S - 1
        $dbs1 = new SQLite3('db/opos.db');

        $sqls1 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente1'";

        $rets1 = $db->query($sqls1);

        // S - 2
        $dbs2 = new SQLite3('db/opos.db');

        $sqls2 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente2'";

        $rets2 = $db->query($sqls2);

        // S - 3
        $dbs3 = new SQLite3('db/opos.db');

        $sqls3 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente3'";

        $rets3 = $db->query($sqls3);

        // S - 4
        $dbs4 = new SQLite3('db/opos.db');

        $sqls4 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente4'";

        $rets4 = $db->query($sqls4);

        // S - 5
        $dbs5 = new SQLite3('db/opos.db');

        $sqls5 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente5'";

        $rets5 = $db->query($sqls5);

        // S - 6
        $dbs6 = new SQLite3('db/opos.db');

        $sqls6 = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente6'";

        $rets6 = $db->query($sqls6);

        // PARA VER SI SECRETARIA ESTA VACIA
        $base = new SQLite3('db/opos.db');

        $tato = "SELECT COUNT(*) AS id FROM comiEjecu";

        $tata = $base->query($tato);

        while ($fila = $tata->fetchArray(SQLITE3_ASSOC)) {
                $ID = $fila['id'];
        }
?>
                            <!--AREA DE TRABAJO-->
<div class="container">
                <?php
                        if ($ID == 0) {	?>
                            <div class="well text-center">
                                <div class="navbar-form navbar-center">
                                    <a href="secrEje.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"> CREAR COMITÉ EJECUTIVO</span></button></a>
                                </div>
                            </div>
                <?php
                        } else {
                ?>
        <div class="well text-center">
            <h2>COMITÉ EJECUTIVO</h2>
        </div>
    <fieldset class="well the-fieldset">
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <thead>
            <tr>
                <th width="20%">SECRETARIA GENERAL</th>
                <th width="20%">NOMBRES</th>
                <th width="20%">APELLIDOS</th>
                <th width="20%">Nº DE CEDULA</th>
                <th width="20%">CELULAR</th>
            </tr>
            </thead>
                <?php while($filan = $retn->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>MIEMBRO DEL BURÓ</td>
                <td><?php echo $filan["nombres"]; ?></td>
                <td><?php echo $filan["apellidos"]; ?></td>
                <td><?php echo $filan["ci"]; ?></td>
                <td><?php echo $filan["celular"]; ?></td>
            </tr>
                <?php }  ?>
        </table>
    </fieldset>
    <fieldset class="well the-fieldset">
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <thead>
            <tr>
                <th width="20%">MIEMBROS DEL BURÓ</th>
                <th width="20%">NOMBRES</th>
                <th width="20%">APELLIDOS</th>
                <th width="20%">Nº DE CEDULA</th>
                <th width="20%">CELULAR</th>
            </tr>
            </thead>
                <?php while($filap1 = $retp1->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE ORGANIZACIÓN</td>
                <td><?php echo $filap1["nombres"]; ?></td>
                <td><?php echo $filap1["apellidos"]; ?></td>
                <td><?php echo $filap1["ci"]; ?></td>
                <td><?php echo $filap1["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap2 = $retp2->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA SINDICAL</td>
                <td><?php echo $filap2["nombres"]; ?></td>
                <td><?php echo $filap2["apellidos"]; ?></td>
                <td><?php echo $filap2["ci"]; ?></td>
                <td><?php echo $filap2["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap3 = $retp3->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA AGRAGRIA</td>
                <td><?php echo $filap3["nombres"]; ?></td>
                <td><?php echo $filap3["apellidos"]; ?></td>
                <td><?php echo $filap3["ci"]; ?></td>
                <td><?php echo $filap3["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap4 = $retp4->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA FEMENINA</td>
                <td><?php echo $filap4["nombres"]; ?></td>
                <td><?php echo $filap4["apellidos"]; ?></td>
                <td><?php echo $filap4["ci"]; ?></td>
                <td><?php echo $filap4["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap5 = $retp5->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE EDUCACIÓN</td>
                <td><?php echo $filap5["nombres"]; ?></td>
                <td><?php echo $filap5["apellidos"]; ?></td>
                <td><?php echo $filap5["ci"]; ?></td>
                <td><?php echo $filap5["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap6 = $retp6->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE LA JUVENTUD</td>
                <td><?php echo $filap6["nombres"]; ?></td>
                <td><?php echo $filap6["apellidos"]; ?></td>
                <td><?php echo $filap6["ci"]; ?></td>
                <td><?php echo $filap6["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas1 = $rets1->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE CULTURA</td>
                <td><?php echo $filas1["nombres"]; ?></td>
                <td><?php echo $filas1["apellidos"]; ?></td>
                <td><?php echo $filas1["ci"]; ?></td>
                <td><?php echo $filas1["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas2 = $rets2->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE LA DIVERSIDAD DE SEXO</td>
                <td><?php echo $filas2["nombres"]; ?></td>
                <td><?php echo $filas2["apellidos"]; ?></td>
                <td><?php echo $filas2["ci"]; ?></td>
                <td><?php echo $filas2["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas3 = $rets3->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE PROFESIONALES Y TÉCNICOS</td>
                <td><?php echo $filas3["nombres"]; ?></td>
                <td><?php echo $filas3["apellidos"]; ?></td>
                <td><?php echo $filas3["ci"]; ?></td>
                <td><?php echo $filas3["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas4 = $rets4->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA ASUNTOS MUNICIPALES</td>
                <td><?php echo $filas4["nombres"]; ?></td>
                <td><?php echo $filas4["apellidos"]; ?></td>
                <td><?php echo $filas4["ci"]; ?></td>
                <td><?php echo $filas4["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas5 = $rets5->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA POLÍTICA</td>
                <td><?php echo $filas5["nombres"]; ?></td>
                <td><?php echo $filas5["apellidos"]; ?></td>
                <td><?php echo $filas5["ci"]; ?></td>
                <td><?php echo $filas5["celular"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas6 = $rets6->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARIA DE ACTAS Y CORRES</td>
                <td><?php echo $filas6["nombres"]; ?></td>
                <td><?php echo $filas6["apellidos"]; ?></td>
                <td><?php echo $filas6["ci"]; ?></td>
                <td><?php echo $filas6["celular"]; ?></td>
            </tr>
                <?php }  ?>
        </table>
    </fieldset>
                <div class="well text-center">
                    <div class="navbar-form navbar-center">
                        <a href="modSecrEje.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"> MODIFICAR COMITÉ EJECUTIVO</span></button></a>
                    </div>
                </div>
</div>

                            <!--FIN DE AREA DE TRABAJO-->
<?php } include('inclu/footer.inc.php'); ?>
