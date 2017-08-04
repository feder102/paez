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

<div class="clientes index large-9 medium-8 columns content" ng-controller="ClienteIndex">
    <h3><?= __('Clientes') ?></h3>
    <?php
      //pr($clientes);
    ?>

    <table st-table="clientes" class="table table-striped">
        <thead>
            <tr>
              <th colspan="4"><input st-search="COD_CLIENT" placeholder="Ingrese codigo de cliente" class="input-sm form-control" type="search"/></th>
              <th colspan="2"><input st-search="RAZON_SOCI" placeholder="Ingrese nombre" class="input-sm form-control" type="search"/></th>
              <th colspan="4"><input st-search="COD_VENDED" placeholder="Ingrese codigo de vendedor" class="input-sm form-control" type="search"/></th>
            </tr>
            <tr>
                <th st-sort="COD_CLIENT" st-skip-natural="true">Cod.Cliente</th>
                <th st-sort="RAZON_SOCI" st-skip-natural="true">Nombre</th>
                <th st-sort="COD_VENDED" st-skip-natural="true">Cod.Vendedor</th>
                <th st-sort="CUIT" st-skip-natural="true">CUIT</th>
                <th st-sort="DOMICILIO" st-skip-natural="true">Direccion</th>
                <th st-sort="LOCALIDAD" st-skip-natural="true">Localidad</th>
                <th st-sort="PROVINCIA" st-skip-natural="true">Provincia</th>
                <th st-sort="TELEFONO_1" st-skip-natural="true">Telf-1</th>
                <th st-sort="TELEFONO_2" st-skip-natural="true">Telf-2</th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php //foreach ($clientes as $cliente): ?>
            <tr ng-repeat="row in clientes">
                  <td>{{row.COD_CLIENT}}</td>
                  <td>{{row.RAZON_SOCI}}</td>
                  <td>{{row.COD_VENDED}}</td>
                  <td>{{row.CUIT}}</td>
                  <td>{{row.DOMICILIO}}</td>
                  <td>{{row.LOCALIDAD}}</td>
                  <td>{{row.PROVINCIA}}</td>
                  <td>{{row.TELEFONO_1}}</td>
                  <td>{{row.TELEFONO_2}}</td>
                <td class="actions">
                  <button type="button" ng-click="vercomprobantecliente(row.COD_CLIENT)" class="btn btn-sm btn-primary">
                      <i class="glyphicon glyphicon-edit"></i>
                  </button>
                    <?php //$this->Html->link(__('Ver'), ['action' => 'view', $cliente->COD_CLIENT]) ?>
                    <?php //$this->Html->link(__('Comprobantes'), ['controller'=>'comprobantes','action' => 'vercomprobantecliente', $cliente->COD_CLIENT]) ?>
                    <?php //$this->Form->postLink(__('Elimnar'), ['action' => 'delete', $cliente->COD_CLIENT], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->COD_CLIENT)]) ?>
                </td>
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
        <p>Si no encuentra el cliente avance de pagina.</p>
    </div>
</div>
<script type="text/javascript">
mainApp.controller('ClienteIndex', function($scope,$http){

    $scope.clientes = <?php echo json_encode($clientes) ?>;
    console.log($scope.clientes);
    $scope.vercomprobantecliente = function (cli){
      debugger;
      var url= "<?php echo Router::url(array('controller' => 'comprobantes', 'action' => 'vercomprobantecliente')) ?>" + '/' + cli;
      location.href = url;
    }
});
</script>
