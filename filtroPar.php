<?php include('inclu/admin.inc.php'); ?>

    <!-- AREA DE TRABAJO -->
    <div class="container">
                <div class="well text-center">
                    <h2>LISTA DE MILITANTES ACTIVISTAS Y PARTICIPANDO</h2>
                </div>
    <div ng-app="myApp" ng-controller="customersCtrl">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input ng-model="query" type="text" class="form-control" placeholder="Search">
                    </div>
                    <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form>
        <fieldset class="well the-fieldset">
                <table class="t1" border="1" cellspacing="2" cellpadding="5" style="width:100%; margin: auto; background: #D2E9FF; border: 1px solid blue;">
                    <thead>
                    <tr>
                        <th width="20%">Nombres</th>
                        <th width="20%">Apellidos</th>
                        <th width="10%">Cedúla</th>
                        <th width="20%">Activismo</th>
                        <th width="10%">Participa</th>
                        <th width="20%">C.V.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="x in names | filter:query" style="text-align: center;">
                       <td>{{x.Nombres}}</td>
                       <td>{{x.Apellidos}}</td>
                       <td>{{x.Cedula}}</td>
                       <td>{{x.Sector}}</td>
                       <td>{{x.Participar}}</td>
                       <td>{{x.CV}}
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
