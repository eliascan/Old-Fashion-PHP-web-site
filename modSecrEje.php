<?php include('inclu/admin.inc.php'); ?>
<?php
        error_reporting(0);


        // CONSULTA PARA LLENAR LOS DROPDOWNLIST

        $db = new SQLite3('db/opos.db');

        $sql = "SELECT * FROM miembro m, datosPoli p, datHabi d WHERE m.ci=p.ci AND m.ci=d.ci";

        $ret = $db->query($sql);

        // CONSULTA TABLA secretaria
        $bd = new SQLite3('db/opos.db');

        $sq = "SELECT * FROM comiEjecu";

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

        $tato = "SELECT idCoEj FROM comiEjecu";

        $tata = $base->query($tato);

        while ($fila = $tata->fetchArray(SQLITE3_ASSOC)) {
                $ID = $fila['idCoEj'];
        }
?>
                            <!--AREA DE TRABAJO-->
<div class="container">
                <?php
                        if ($ID == 0) { ?>
                            <div class="well text-center">
                                <h1>ESTA SECRETARIA NO ESTA CREADA AÚN</h1>
                            </div>
                <?php		}
                        else {
                ?>
                <div class="well text-center">
                    <h2>ACTUALIZAR COMITÉ EJECUTIVO</h2>
                </div>
        <fieldset class="well the-fieldset">
            <form action="updateSecrEje.php" method="get">
            <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                <tr>
                    <th>SECRETARIO GENERAL</th>
                    <td>
                        <select name="nomSecretario" class="form-control">
                        <?php while($filan = $retn->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filan['ci']; ?>"><?php echo $filan["nombres"] . ' ' . $filan["apellidos"] . ' | CI: '. $filan['ci'] . ' | CELULAR: ' . $filan['celular']; ?></option>
                        <?php }  ?>
                            <option value="NO">... Selecciona un Secretario Titular ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO DE ORGANIZACIÓN</th>
                    <td>
                        <select name="pricipal1" class="form-control">
                        <?php while($filap1 = $retp1->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filap1['ci']; ?>"><?php echo $filap1["nombres"] . ' ' . $filap1["apellidos"] . ' | CI: '. $filap1['ci'] . ' | CELULAR: ' . $filap1['celular']; ?></option>
                        <?php }  ?>
                            <option value="NO">... Selecciona un 1er. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO SINDICAL</th>
                    <td>
                        <select name="pricipal2" class="form-control">
                        <?php while($filap2 = $retp2->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filap2['ci']; ?>"><?php echo $filap2["nombres"] . ' ' . $filap2["apellidos"] . ' | CI: '. $filap2['ci'] . ' | CELULAR: ' . $filap2['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 2do. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO AGRARIO</th>
                    <td>
                        <select name="pricipal3" class="form-control">
                        <?php while($filap3 = $retp3->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filap3['ci']; ?>"><?php echo $filap3["nombres"] . ' ' . $filap3["apellidos"] . ' | CI: '. $filap3['ci'] . ' | CELULAR: ' . $filap3['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 3er. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO FEMENINO</th>
                    <td>
                        <select name="pricipal4" class="form-control">
                        <?php while($filap4 = $retp4->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filap4['ci']; ?>"><?php echo $filap4["nombres"] . ' ' . $filap4["apellidos"] . ' | CI: '. $filap4['ci'] . ' | CELULAR: ' . $filap4['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 4to. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO DE EDUCACIÓN</th>
                    <td>
                        <select name="pricipal5" class="form-control">
                        <?php while($filap5 = $retp5->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filap5['ci']; ?>"><?php echo $filap5["nombres"] . ' ' . $filap5["apellidos"] . ' | CI: '. $filap5['ci'] . ' | CELULAR: ' . $filap5['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 5to. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO JUVENIL</th>
                    <td>
                        <select name="pricipal6" class="form-control">
                        <?php while($filap6 = $retp6->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filap6['ci']; ?>"><?php echo $filap6["nombres"] . ' ' . $filap6["apellidos"] . ' | CI: '. $filap6['ci'] . ' | CELULAR: ' . $filap6['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 6to. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO CULTURA</th>
                    <td>
                        <select name="suplente1" class="form-control">
                        <?php while($filas1 = $rets1->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filas1['ci']; ?>"><?php echo $filas1["nombres"] . ' ' . $filas1["apellidos"] . ' | CI: '. $filas1['ci'] . ' | CELULAR: ' . $filaps1['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 1er. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO DE LA DIVERSIDAD SEXUAL</th>
                    <td>
                        <select name="suplente2" class="form-control">
                        <?php while($filas2 = $rets2->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filas2['ci']; ?>"><?php echo $filas2["nombres"] . ' ' . $filas2["apellidos"] . ' | CI: '. $filas2['ci'] . ' | CELULAR: ' . $filaps2['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 2do. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO DE PROFESIONALES Y TÉCNICOS</th>
                    <td>
                        <select name="suplente3" class="form-control">
                        <?php while($filas3 = $rets3->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filas3['ci'];?>"><?php echo $filas3["nombres"] . ' ' . $filas3["apellidos"] . ' | CI: '. $filas3['ci'] . ' | CELULAR: ' . $filaps3['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 3er. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO ASUNTOS MUNICIPALES</th>
                    <td>
                        <select name="suplente4" class="form-control">
                        <?php while($filas4 = $rets4->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filas4['ci']; ?>"><?php echo $filas4["nombres"] . ' ' . $filas4["apellidos"] . ' | CI: '. $filas4['ci'] . ' | CELULAR: ' . $filaps4['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 4to. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO DE POLÍTICA</th>
                    <td>
                        <select name="suplente5" class="form-control">
                        <?php while($filas5 = $rets5->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filas5['ci']; ?>"><?php echo $filas5["nombres"] . ' ' . $filas5["apellidos"] . ' | CI: '. $filas5['ci'] . ' | CELULAR: ' . $filaps5['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 5to. SUPLENTE...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>SECRETARIO DE ACTAS Y CORRESPONDENCIA</th>
                    <td>
                        <select name="suplente6" class="form-control">
                        <?php while($filas6 = $rets6->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $filas6['ci']; ?>"><?php echo $filas6["nombres"] . ' ' . $filas6["apellidos"] . ' | CI: '. $filas6['ci'] . ' | CELULAR: ' . $filaps6['celular']; ?></option>
                        <?php }  ?>
                            <option value="">... Selecciona un 6to. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular']; ?></option>
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
                <input type="hidden" name="secre" value="<?php echo $ID; ?>" />
            </tr>
        </table>
        </fieldset>
        </form>
    </div>

                            <!--FIN DE AREA DE TRABAJO-->
<?php  } include('inclu/footer.inc.php'); ?>
