<!--main content start-->
<?php
use Cake\Routing\Router;
// $this->Paginator->options(array(
//   'update'=>'#content',
//   'before'=>'',
//   'complete'=>''
// ));
 ?>
<section class="main-content-wrapper" ng-controller="DashboardIndex">
    <section id="main-content">
        <!--tiles start-->
        <div class="row">
            <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dashboard-tile detail tile-purple">
                    <div class="content">
                        <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"> </h1>
                        <h2 style="color:white;">{{cantidad_cuotas}}</h2>
                        <p>Cantidad de cuotas</p>
                        <!-- select count(*) from cuotas -->
                    </div>
                    <div class="icon"><i class="fa fa-sign-language"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dashboard-tile detail tile-turquoise">
                    <div class="content">
                        <h1 class="text-left timer" data-from="0" data-to="56" data-speed="2500"> </h1>
                        <h2 style="color:white;">{{cuotas_cobradas}}</h2>
                        <p>Cuotas cobradas</p>
                        <!-- select count(*) from cuotas where estado_VTO = CAN -->
                    </div>
                    <div class="icon"><i class="fa fa-sign-in"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dashboard-tile detail tile-red">
                    <div class="content">
                        <h1 class="text-left timer" data-from="0" data-to="32" data-speed="2500"> </h1>
                        <h2 style="color:white;">{{cuotas_pendientes}}</h2>
                        <p>Cuotas pendientes</p>
                        <!-- select count(*) from cuotas where estado_VTO = PEN -->
                    </div>
                    <div class="icon"><i class="fa fa-sign-out"></i>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dashboard-tile detail tile-purple">
                    <div class="content">
                        <h1 class="text-left timer" data-to="105" data-speed="2500"> </h1>
                        <h2 style="color:white;">{{suma_cobrar}}</h2>
                        <p>Total a cobrar</p>
                        <!-- <p> select sum(importe_VT) from cuotas</p> -->
                    </div>
                    <div class="icon"><i class="fa fa-usd"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dashboard-tile detail tile-turquoise">
                    <div class="content">
                        <h1 class="text-left timer" data-to="105" data-speed="2500"> </h1>
                        <h2 style="color:white;">{{suma_cobrado}}</h2>
                        <p>Total cobrado</p>
                        <!-- <p> select sum(importe_VT) from cuotas where estado_vto = CAN</p> -->
                    </div>
                    <div class="icon"><i class="fa fa-usd"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dashboard-tile detail tile-red">
                    <div class="content">
                        <h1 class="text-left timer" data-to="105" data-speed="2500"> </h1>
                        <h2 style="color:white;">{{suma_pendiente}}</h2>
                        <p>Saldo pendiente</p>
                        <!-- <p> select sum(importe_VT) from cuotas where estado_vto = PEN</p> -->
                    </div>
                    <div class="icon"><i class="fa fa-usd"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
<script type="text/javascript">
mainApp.controller('DashboardIndex', function($scope,$http){
    $scope.cantidad_cuotas = <?php echo json_encode($cantidad_cuotas) ?>;
    $scope.cuotas_cobradas = <?php echo json_encode($cuotas_cobradas) ?>;
    $scope.cuotas_pendientes = <?php echo json_encode($cuotas_pendientes) ?>;
    $scope.suma_cobrar = <?php echo json_encode($suma_cobrar) ?>;
    $scope.suma_cobrado = <?php echo json_encode($suma_cobrado) ?>;
    $scope.suma_pendiente = <?php echo json_encode($suma_pendiente) ?>;
    console.log($scope.suma_cobrar);
    $scope.vercomprobantecliente = function (cli){
      var url= "<?php echo Router::url(array('controller' => 'comprobantes', 'action' => 'vercomprobantecliente')) ?>" + '/' + cli;
      location.href = url;
    }
    $scope.vercliente = function (cli){
      var url= "<?php echo Router::url(array('controller' => 'clientes', 'action' => 'view')) ?>" + '/' + cli;
      location.href = url;
    }
});
</script>
