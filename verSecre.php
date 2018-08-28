<?php include('inclu/admin.inc.php'); ?>
<?php
        error_reporting(0);
        $secre = $_GET['secre'];

// CONSULTA TABLA secretaria
        $bd = new SQLite3('db/opos.db');

        $sq = "SELECT * FROM secretaria WHERE secretaria='$secre'";

        $res = $bd->query($sq);

        while($fila = $res->fetchArray(SQLITE3_ASSOC)){
            $nomSecretario = $fila['nomSecretario'];
            $principal1 = $fila['principal1'];
            $principal2 = $fila['principal2'];
            $principal3 = $fila['principal3'];
            $principal4 = $fila['principal4'];
            $principal5 = $fila['principal5'];
            $principal6 = $fila['principal6'];
            $suplente1 = $fila['suplente1'];
            $suplente2 = $fila['suplente2'];
            $suplente3 = $fila['suplente3'];
            $suplente4 = $fila['suplente4'];
            $suplente5 = $fila['suplente5'];
            $suplente6 = $fila['suplente6'];
        }

        // RETRETA DE QUERYS
        $dbn = new SQLite3('db/opos.db');

        $sqln = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$nomSecretario'";

        $retn = $db->query($sqln);

        // P - 1
        $dbp1 = new SQLite3('db/opos.db');

        $sqlp1 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal1'";

        $retp1 = $db->query($sqlp1);

        // P - 2
        $dbp2 = new SQLite3('db/opos.db');

        $sqlp2 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal2'";

        $retp2 = $db->query($sqlp2);

        // P - 3
        $dbp3 = new SQLite3('db/opos.db');

        $sqlp3 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal3'";

        $retp3 = $db->query($sqlp3);

        // P - 4
        $dbp4 = new SQLite3('db/opos.db');

        $sqlp4 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal4'";

        $retp4 = $db->query($sqlp4);

        // P - 5
        $dbp5 = new SQLite3('db/opos.db');

        $sqlp5 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal5'";

        $retp5 = $db->query($sqlp5);

        // P - 6
        $dbp6 = new SQLite3('db/opos.db');

        $sqlp6 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$principal6'";

        $retp6 = $db->query($sqlp6);

        // S - 1
        $dbs1 = new SQLite3('db/opos.db');

        $sqls1 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente1'";

        $rets1 = $db->query($sqls1);

        // S - 2
        $dbs2 = new SQLite3('db/opos.db');

        $sqls2 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente2'";

        $rets2 = $db->query($sqls2);

        // S - 3
        $dbs3 = new SQLite3('db/opos.db');

        $sqls3 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente3'";

        $rets3 = $db->query($sqls3);

        // S - 4
        $dbs4 = new SQLite3('db/opos.db');

        $sqls4 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente4'";

        $rets4 = $db->query($sqls4);

        // S - 5
        $dbs5 = new SQLite3('db/opos.db');

        $sqls5 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente5'";

        $rets5 = $db->query($sqls5);

        // S - 6
        $dbs6 = new SQLite3('db/opos.db');

        $sqls6 = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci AND m.ci='$suplente6'";

        $rets6 = $db->query($sqls6);

        // PARA VER SI SECRETARIA ESTA VACIA
        $base = new SQLite3('db/opos.db');

        $tato = "SELECT COUNT(*) AS id FROM secretaria WHERE secretaria='$secre'";

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
                                <h1>ESTA SECRETARIA NO ESTA CREADA AÚN</h1>
                            </div>
                <?php		}
                        else {
                ?>
        <div class="well text-center">
            <h2><?php echo $secre; ?></h2>
        </div>
    <fieldset class="well the-fieldset">
        <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
            <thead>
            <tr>
                <th width="20%">CARGO EN SECRETARIA</th>
                <th width="20%">NOMBRES</th>
                <th width="20%">APELLIDOS</th>
                <th width="10%">Nº DE CEDULA</th>
                <th width="10%">CELULAR</th>
                <th width="20%">C.V.</th>
            </tr>
            </thead>
                <?php while($filan = $retn->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>SECRETARI@ TITULAR</td>
                <td><?php echo $filan["nombres"]; ?></td>
                <td><?php echo $filan["apellidos"]; ?></td>
                <td><?php echo $filan["ci"]; ?></td>
                <td><?php echo $filan["celular"]; ?></td>
                <td><?php echo $filan["nombreCV"]; ?></td>
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
                <th width="10%">Nº DE CEDULA</th>
                <th width="10%">CELULAR</th>
                <th width="20%">C.V.</th>
            </tr>
            </thead>
                <?php while($filap1 = $retp1->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>1er. PRINCIPAL</td>
                <td><?php echo $filap1["nombres"]; ?></td>
                <td><?php echo $filap1["apellidos"]; ?></td>
                <td><?php echo $filap1["ci"]; ?></td>
                <td><?php echo $filap1["celular"]; ?></td>
                <td><?php echo $filap1["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap2 = $retp2->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>2do. PRINCIPAL</td>
                <td><?php echo $filap2["nombres"]; ?></td>
                <td><?php echo $filap2["apellidos"]; ?></td>
                <td><?php echo $filap2["ci"]; ?></td>
                <td><?php echo $filap2["celular"]; ?></td>
                <td><?php echo $filap2["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap3 = $retp3->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>3er. PRINCIPAL</td>
                <td><?php echo $filap3["nombres"]; ?></td>
                <td><?php echo $filap3["apellidos"]; ?></td>
                <td><?php echo $filap3["ci"]; ?></td>
                <td><?php echo $filap3["celular"]; ?></td>
                <td><?php echo $filap3["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap4 = $retp4->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>4to. PRINCIPAL</td>
                <td><?php echo $filap4["nombres"]; ?></td>
                <td><?php echo $filap4["apellidos"]; ?></td>
                <td><?php echo $filap4["ci"]; ?></td>
                <td><?php echo $filap4["celular"]; ?></td>
                <td><?php echo $filap4["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap5 = $retp5->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>5to. PRINCIPAL</td>
                <td><?php echo $filap5["nombres"]; ?></td>
                <td><?php echo $filap5["apellidos"]; ?></td>
                <td><?php echo $filap5["ci"]; ?></td>
                <td><?php echo $filap5["celular"]; ?></td>
                <td><?php echo $filap5["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filap6 = $retp6->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>6to. PRINCIPAL</td>
                <td><?php echo $filap6["nombres"]; ?></td>
                <td><?php echo $filap6["apellidos"]; ?></td>
                <td><?php echo $filap6["ci"]; ?></td>
                <td><?php echo $filap6["celular"]; ?></td>
                <td><?php echo $filap6["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas1 = $rets1->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>1er. SUPLENTE</td>
                <td><?php echo $filas1["nombres"]; ?></td>
                <td><?php echo $filas1["apellidos"]; ?></td>
                <td><?php echo $filas1["ci"]; ?></td>
                <td><?php echo $filas1["celular"]; ?></td>
                <td><?php echo $filas1["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas2 = $rets2->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>2do. SUPLENTE</td>
                <td><?php echo $filas2["nombres"]; ?></td>
                <td><?php echo $filas2["apellidos"]; ?></td>
                <td><?php echo $filas2["ci"]; ?></td>
                <td><?php echo $filas2["celular"]; ?></td>
                <td><?php echo $filas2["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas3 = $rets3->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>3er. SUPLENTE</td>
                <td><?php echo $filas3["nombres"]; ?></td>
                <td><?php echo $filas3["apellidos"]; ?></td>
                <td><?php echo $filas3["ci"]; ?></td>
                <td><?php echo $filas3["celular"]; ?></td>
                <td><?php echo $filas3["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas4 = $rets4->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>4to. SUPLENTE</td>
                <td><?php echo $filas4["nombres"]; ?></td>
                <td><?php echo $filas4["apellidos"]; ?></td>
                <td><?php echo $filas4["ci"]; ?></td>
                <td><?php echo $filas4["celular"]; ?></td>
                <td><?php echo $filas4["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas5 = $rets5->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>5to. SUPLENTE</td>
                <td><?php echo $filas5["nombres"]; ?></td>
                <td><?php echo $filas5["apellidos"]; ?></td>
                <td><?php echo $filas5["ci"]; ?></td>
                <td><?php echo $filas5["celular"]; ?></td>
                <td><?php echo $filas5["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
                <?php while($filas6 = $rets6->fetchArray(SQLITE3_ASSOC)){ ?>
            <tr>
                <td>6to. SUPLENTE</td>
                <td><?php echo $filas6["nombres"]; ?></td>
                <td><?php echo $filas6["apellidos"]; ?></td>
                <td><?php echo $filas6["ci"]; ?></td>
                <td><?php echo $filas6["celular"]; ?></td>
                <td><?php echo $filas6["nombreCV"]; ?></td>
            </tr>
                <?php }  ?>
        </table>
    </fieldset>

</div>

                            <!--FIN DE AREA DE TRABAJO-->
<?php } include('inclu/footer.inc.php'); ?>
