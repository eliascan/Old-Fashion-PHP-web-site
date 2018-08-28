<?php
        include('inclu/admin.inc.php');
        error_reporting(0);

        $bd = new SQLite3('db/opos.db');
        $qry = "SELECT * FROM comiPar";
        $retc = $bd->query($qry);

        $db = new SQLite3('db/opos.db');

        $sql = "SELECT COUNT(*) AS fili FROM comiPar";

        $ret = $db->query($sql);

        while($fila = $ret->fetchArray(SQLITE3_ASSOC)) {
            $fili = $fila['fili'];
        }

?>

                            <!-- ZONA DE TRABAJO -->

            <div class="container"><br />
                <?php if ($_GET['flag'] == 1) { ?>
                    <div class="alert alert-success fade in">
                        <span style="text-align:center;"><strong>EL COMITÉ HA SIDO CREADO SATISFACTORIAMENTE.</strong></span>
                    </div>
                <?php } ?>
                <div class="well text-center">
                    <h2>COMITES EJECUTIVOS PARROQUIALES</h2>
                </div>
        <fieldset class="well the-fieldset">
            <div class="navbar-form navbar-right">
                <a href="seCoPar.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"> NUEVO COMITÉ</span></button></a>
            </div>
            <?php if ($fili > 0) { ?>
                <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:50%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                    <thead>
                    <tr>
                        <th>COMITES</th>
                        <th>Modificar</th>
                        <th>Ver</th>
                    </tr>
                    </thead>
             <?php while($row = $retc->fetchArray(SQLITE3_ASSOC)) { ?>
                    <tr>
                       <td><?php echo $row['comiParro']; ?></td>
                       <td align="center"><a href="modCoPar.php?secre=<?php echo $row['idCoPar']; ?>" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verCoPar.php?secre=<?php echo $row['idCoPar']; ?>" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
              <?php } ?>
                </table>
             <?php } ?>
        </fieldset>
            </div>

                            <!-- FIN DE ZONA DE TRABAJO -->

<?php include('inclu/footer.inc.php'); ?>
