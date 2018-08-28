<?php include('inclu/admin.inc.php'); ?>

    <!-- AREA DE TRABAJO -->
    <div class="container">
                    <div class="well text-center">
                        <h2>REGISTRO DE MILITANTES</h2>
                    </div>
                <fieldset class="well the-fieldset">
                    <div class="col-lg-12 text-center">
                        <form class="navbar-form navbar-center" role="search" action="registro.php" method="get">
                            <div class="form-group">
                                <span style="font-size:16px;">Nº de Cedúla:</span> <input type="text" name="cedu" class="form-control" pattern="^[0-9]{7,8}$" placeholder="E.j. 8647246" required />
                            </div>
                            <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </div>
                </fieldset>
    <div ng-app="myApp" ng-controller="customersCtrl">
                <form class="navbar-form navbar-right" role="search">
                   <h4>Buscar en la lista</h4>
                    <div class="form-group">
                      <div class="form-group has-feedback">
                            <input ng-model="query" type="text" class="form-control" placeholder="Buscar">
                           <i class="glyphicon glyphicon-search form-control-feedback"></i>
                        </div>
                    </div>
                </form>
        <fieldset class="well the-fieldset">
                <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                    <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedúla</th>
                        <th colspan="3">Acción</th>
                    </tr>
                      </thead>
                    <tbody>
                    <tr ng-repeat="x in names | filter:query" style="text-align: center;">
                       <td>{{x.Nombres}}</td>
                       <td>{{x.Apellidos}}</td>
                       <td>{{x.Cedula}}</td>
                       <td><a ng-href="perfil.php?ci={{x.Cedula}}" title="Perfil del Militante"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></td>
                       <td><a ng-href="modificar.php?idMiembro={{x.idMiembro}}" title="Actulizar Datos del Militante"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <td><a ng-href="borrar.php?ci={{x.Cedula}}" onclick="return confirm('Va Borrar este Miliciano')" title="Borrar Miliciano"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    </tr>
                    </tbody>
                </table>
        </fieldset>
    </div>
        <script>
            var app = angular.module('myApp', []);
            app.controller('customersCtrl', function($scope, $http) {
               $http.get("anguPar.php")
               .success(function (response) {$scope.names = response.records;});
            });
        </script>
    </div>

<?php include('inclu/footer.inc.php'); ?>
