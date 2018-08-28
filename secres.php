<?php include('inclu/admin.inc.php'); ?>

<?php
        error_reporting(0);
        $secre = $_REQUEST['secre'];

        $db = new SQLite3('db/opos.db');

        $sql = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=p.ci AND m.ci=d.ci AND m.ci=c.ci AND p.secParti='$secre'";

        $ret = $db->query($sql);

        // PARA VER SI SECRETARIA ESTA VACIA
        $bd = new SQLite3('db/opos.db');

        $tato = "SELECT COUNT(*) AS id FROM secretaria WHERE secretaria='$secre'";

        $tata = $bd->query($tato);

        while ($fila = $tata->fetchArray(SQLITE3_ASSOC)) {
                $ID = $fila['id'];
        }
?>
                            <!--AREA DE TRABAJO-->
<div class="container">
                <?php
                        if ($ID > 0) {
                            echo '<div class="col-lg-12 text-center">';
                            echo '<h1>ESTA SECRETARIA YA ESTA CREADA</h1></div>';
                        }
                        else{
                ?>
                <div class="well text-center">
                    <h2><?php echo 'Registro de ' . $secre; ?></h2>
                </div>
        <fieldset class="well the-fieldset">
            <form action="insSecre.php" method="get">
            <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                <tr>
                    <th>SECRETARIO TITULAR</th>
                    <td>
                        <select name="nomSecretario" class="form-control">
                            <option value="NO">... Selecciona un Secretario Titular ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>1er. PRINCIPAL</th>
                    <td>
                        <select name="principal1" class="form-control">
                            <option value="NO">... Selecciona un 1er. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>2do. PRINCIPAL</th>
                    <td>
                        <select name="principal2" class="form-control">
                            <option value="">... Selecciona un 2do. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>3er. PRINCIPAL</th>
                    <td>
                        <select name="principal3" class="form-control">
                            <option value="">... Selecciona un 3er. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>4to. PRINCIPALR</th>
                    <td>
                        <select name="principal4" class="form-control">
                            <option value="">... Selecciona un 4to. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>5to. PRINCIPAL</th>
                    <td>
                        <select name="principal5" class="form-control">
                            <option value="">... Selecciona un 5to. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>6to. PRINCIPAL</th>
                    <td>
                        <select name="principal6" class="form-control">
                            <option value="">... Selecciona un 6to. PRINCIPAL ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>1er. SUPLENTE</th>
                    <td>
                        <select name="suplente1" class="form-control">
                            <option value="">... Selecciona un 1er. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>2do. SUPLENTE</th>
                    <td>
                        <select name="suplente2" class="form-control">
                            <option value="">... Selecciona un 2do. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>3er. SUPLENTE</th>
                    <td>
                        <select name="suplente3" class="form-control">
                            <option value="">... Selecciona un 3er. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>4to. SUPLENTE</th>
                    <td>
                        <select name="suplente4" class="form-control">
                            <option value="">... Selecciona un 4to. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                            <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>5to. SUPLENTE</th>
                    <td>
                        <select name="suplente5" class="form-control">
                            <option value="">... Selecciona un 5to. SUPLENTE...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>6to. SUPLENTE</th>
                    <td>
                        <select name="suplente6" class="form-control">
                            <option value="">... Selecciona un 6to. SUPLENTE ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | CV: '. $row['nombreCV']; ?></option>
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
<?php } include('inclu/footer.inc.php'); ?>
