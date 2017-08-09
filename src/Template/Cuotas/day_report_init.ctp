<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
  */
  //http://lorenzofox3.github.io/smart-table-website/
  use Cake\Routing\Router;
  $this->Paginator->options(array(
    'update'=>'#content',
    'before'=>'',
    'complete'=>''
  ));
?>

<div class="reportes index large-10 medium-9 columns content" ng-controller="ReporteIndex">
    <h3><?= __('Reporte diario') ?></h3>
    <?php
      // pr($todos);
    ?>
            <!--tiles start-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <div class="dashboard-tile detail tile-purple">
                <div class="content">
                    <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"> </h1>
                    <h2 style="color:white;"><?= $this->Paginator->counter(['format' => __('{{count}}')]) ?></h2>
                    <p>Total de cuotas</p>
                    <!-- select count(*) from cuotas -->
                </div>
                <div class="icon"><i class="fa fa-sign-language"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-5 col-lg-5 col-md-5">
        <div class="panel panel-default">
          <div class="radio">
              <input class="icheck" type="radio" checked="" name="rad1">
              <label>Todos</label>
          </div>
          <div class="radio">
              <input class="icheck" type="radio" name="rad1">
              <label>Pendientes</label>
          </div>
          <div class="radio">
              <input class="icheck" type="radio" name="rad1">
              <label>Cancelados</label>
          </div>
        </div>
    </div>
    <div class="col-xs-5 col-lg-5 col-md-5">
      <div class="form-group">
          <select class="form-control input-lg">
              <option value="">Javier</option>
              <option value="">fede</option>
              <option value="">Ni idea</option>
              <option value="">OK</option>
          </select>
      </div>
    </div>
    <table st-table="reportes" class="table table-striped">
        <thead>
            <!-- <tr>
              <th colspan="1"><input st-search="reportes.cl.COD_CLIENT" placeholder="Codigo de cliente" class="input-sm form-control" type="search"/></th>
              <th colspan="1"><input st-search="reportes.cl.COD_VENDED" placeholder="Codigo vendedor" class="input-sm form-control" type="search"/></th>
              <th colspan="2"><input st-search="reportes.cl.RAZON_SOCI" placeholder="Nombre cliente" class="input-sm form-control" type="search"/></th>
            </tr> -->
            <tr>
                <th st-sort="COD_CLIENT" st-skip-natural="true">Cod.Cliente</th>
                <th st-sort="RAZON_SOCI" st-skip-natural="true">Nombre.Cliente</th>
                <th st-sort="COD_VENDED" st-skip-natural="true">Vendedor</th>
                <th st-sort="N_COMP_CAN" st-skip-natural="true">Num. Comp. Cancelado</th>
                <th st-sort="FECHA_CAN" st-skip-natural="true">Cancelado</th>
                <th st-sort="IMPORTE_VT" st-skip-natural="true">Importe cuota</th>
                <!-- <th scope="col" class="actions"><?php// __('Actions') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php //foreach ($clientes as $cliente): ?>
            <tr ng-repeat="row in reportes">
                  <td>{{row.c.COD_CLIENT}}</td>
                  <td>{{row.cl.RAZON_SOCI}}</td>
                  <td>{{row.c.COD_VENDED}}</td>
                  <td>{{row.N_COMP_CAN}}</td>
                  <td>{{row.FECHA_CAN | date:"dd/MM/yyyy 'a las' h:mma"}}</td>
                  <td>$ {{row.IMPORTE_VT}}</td>
                <!-- <td class="actions">
                  <button type="button" title="Comprobante del cliente" ng-click="vercomprobantecliente(row.COD_CLIENT)" class="btn btn-sm btn-success">
                      <i class="fa fa-file-text"></i>
                  </button>
                  <button type="button" title="Comprobante del cliente" ng-click="vercliente(row.COD_CLIENT)" class="btn btn-sm btn-primary">
                      <i class="fa fa-user-o"></i>
                  </button>
                    <?php //$this->Html->link(__('Ver'), ['action' => 'view', $cliente->COD_CLIENT]) ?>
                    <?php //$this->Html->link(__('Comprobantes'), ['controller'=>'comprobantes','action' => 'vercomprobantecliente', $cliente->COD_CLIENT]) ?>
                    <?php //$this->Form->postLink(__('Elimnar'), ['action' => 'delete', $cliente->COD_CLIENT], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->COD_CLIENT)]) ?>
                </td> -->
            </tr>
            <?php //endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterios')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Atras') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pag {{page}} de {{pages}}, mostrando {{current}} de {{count}} totales')]) ?></p>
        <p>Si no encuentra la cuota avance de pagina.</p>
    </div>
</div>
<script type="text/javascript">
mainApp.controller('ReporteIndex', function($scope,$http){

    $scope.reportes = <?php echo json_encode($todos) ?>;
    console.log($scope.reportes);
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
