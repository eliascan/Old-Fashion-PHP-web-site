<?php include('inclu/secre.inc.php'); ?>

    <!-- AREA DE TRABAJO -->
    <div class="container">
                    <div class="well text-center">
                        <h2>REGISTRO DE MILITANTES</h2>
                    </div>
                <fieldset class="well the-fieldset"> 
                    <div class="col-lg-12 text-center">
                        <form class="navbar-form navbar-center" role="search" action="secretaria.php" method="get">
                            <div class="form-group">
                                <span style="font-size:16px;">Nº de Cedúla:</span> <input type="text" name="cedu" class="form-control" pattern="^[0-9]{7,8}$" placeholder="E.j. 8647246" required />
                            </div>
                            <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </div>
                </fieldset>
    
<?php include('inclu/footer.inc.php'); ?>