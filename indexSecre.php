<?php 
		include('inclu/admin.inc.php');
		error_reporting(0);

?>

							<!-- ZONA DE TRABAJO -->

			<div class="container">
            	<br />
				<?php if ($_GET['flag'] == 1) { ?>
                    <div class="alert alert-success fade in">
                        <span style="text-align:center;"><strong>LA SECRETARÍA HA SIDO CREADA SATISFACTORIAMENTE.</strong></span>
                    </div>
                <?php } ?>            
                <div class="well text-center">
                    <h2>SECRETARIAS</h2>
                </div>
		<fieldset class="well the-fieldset">               
                <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:60%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                    <thead>
                    <tr>
                        <th>SECRETARIA</th>
                        <th>Crear</th>
                        <th>Modificar</th>
                        <th>Ver</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       <td>Secretaria Organizativa</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Organizativa" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Organizativa" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Organizativa" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Sindical</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Sindical" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Sindical" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Sindical" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Agraria</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Agraria" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Agraria" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Agraria" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Femenina</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Femenina" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Femenina" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Femenina" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>                    
                    <tr>
                       <td>Secretaria de Educacion</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de Educacion" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de Educacion" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de Educacion" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Juvenil</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Juvenil" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Juvenil" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Juvenil" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria de Cultura</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de Cultura" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de Cultura" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de Cultura" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria de la Diversidad de Genero</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de la Diversidad de Genero" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de la Diversidad de Genero" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de la Diversidad de Genero" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria de Profesionales y Tecnicos</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de Profesionales y Tecnicos" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de Profesionales y Tecnicos" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de Profesionales y Tecnicos" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria de Asuntos Municipales</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de Asuntos Municipales" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de Asuntos Municipales" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de Asuntos Municipales" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria de Politica</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de Politica" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de Politica" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de Politica" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria de Actas y Correspondencias</td>
                       <td align="center"><a href="secres.php?secre=Secretaria de Actas y Correspondencias" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria de Actas y Correspondencias" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria de Actas y Correspondencias" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Comercial</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Comercial" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Comercial" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Comercial" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Adulto Mayor</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Adulto Mayor" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Adulto Mayor" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Adulto Mayor" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Incapacitados</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Incapacitados" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Incapacitados" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Incapacitados" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                       <td>Secretaria Motorizados</td>
                       <td align="center"><a href="secres.php?secre=Secretaria Motorizados" title="Crear Secretaria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="modSecre.php?secre=Secretaria Motorizados" title="Actulizar Datos Secretaria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                       <td align="center"><a href="verSecre.php?secre=Secretaria Motorizados" title="Ver Datos"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    </tr>					
                    </tbody>                                                                                                                   
                </table>
        </fieldset>                
            </div>

							<!-- FIN DE ZONA DE TRABAJO -->

<?php include('inclu/footer.inc.php'); ?>