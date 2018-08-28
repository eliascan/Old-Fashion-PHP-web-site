<?php
        include('inclu/admin.inc.php');

        error_reporting(0);

        $secre = $_GET['secre'];

        $db = new SQLite3('db/opos.db');

        $sql = "SELECT * FROM miembro m, datosPoli p, datHabi d, cenVota c WHERE m.ci=c.ci AND m.ci=p.ci AND m.ci=d.ci";

        $ret = $db->query($sql);
?>
                            <!--AREA DE TRABAJO-->
<div class="container">
                <div class="well text-center">
                    <h2>REGISTRAR COMITÉ EJECUTIVO PARROQUIAL</h2>
                </div>
        <fieldset class="well the-fieldset">
            <form action="insCoPar.php" method="get">
            <table border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                <tr>
                    <th>COMITÉ PARROQUIAL<span class="asterisco">*</span></th>
                    <td>
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
                </tr>
                <tr>
                    <th>Secretaría de Organización</th>
                    <td>
                        <select name="secOrg" class="form-control">
                            <option value="NO">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Sindical</th>
                    <td>
                        <select name="secSindi" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Agraria</th>
                    <td>
                        <select name="secAgra" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Femenina</th>
                    <td>
                        <select name="secFeme" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría de Educación</th>
                    <td>
                        <select name="secEdu" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Juvenil</th>
                    <td>
                        <select name="secJuve" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría de Cultura</th>
                    <td>
                        <select name="secCultu" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría de Diversidad Sexual</th>
                    <td>
                        <select name="secDiSex" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría de Profesionales y Técnicos</th>
                    <td>
                        <select name="secProTec" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría de Asuntos Municipales</th>
                    <td>
                        <select name="secAsuMuni" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría de Actas y Correspondencias</th>
                    <td>
                        <select name="secActCor" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Política</th>
                    <td>
                        <select name="secPoli" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Adulto Mayor</th>
                    <td>
                        <select name="secAMay" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Comercial</th>
                    <td>
                        <select name="secComer" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Incapacitados</th>
                    <td>
                        <select name="secInca" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
                        <?php }  ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Secretaría Motorizados</th>
                    <td>
                        <select name="secMoto" class="form-control">
                            <option value="">... Selecciona un SECRETARIO ...</option>
                            <?php while($row = $ret->fetchArray(SQLITE3_ASSOC)){ ?>
                        <option value="<?php echo $row['ci'];?>"><?php echo $row["nombres"] . ' ' . $row["apellidos"] . ' | CI: '. $row['ci'] . ' | CELULAR: ' . $row['celular'] . ' | ' . $row['secParti'] . ' | ' . $row['nombreCV']; ?></option>
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
            </tr>
        </table>
        </fieldset>
        </form>
    </div>
                            <!--FIN DE AREA DE TRABAJO-->
<?php include('inclu/footer.inc.php'); ?>
