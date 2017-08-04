<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
  */
  //http://lorenzofox3.github.io/smart-table-website/
  $this->Paginator->options(array(
    'update'=>'#content',
    'before'=>'',
    'complete'=>''
  ));
?>

<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <?= $this->Form->create('Clientes'); ?>
    <?php
        echo $this->Form->create("Post", array(
            ['action' => 'search',
            'controller'=>'clientes']
        ));
        echo $this->Form->input("keyword", array(
            "label" => "",
            "type" => "search",
            "placeholder" => "Buscar cliente..."
        ));
        echo $this->Form->end();
    ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('COD_CLIENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RAZON_SOCI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_VENDED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CUIT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DOMICILIO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LOCALIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PROVINCIA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TELEFONO_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TELEFONO_2') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= h($cliente->COD_CLIENT) ?></td>
                <td><?= h($cliente->RAZON_SOCI) ?></td>
                <td><?= h($cliente->COD_VENDED) ?></td>
                <td><?= h($cliente->CUIT) ?></td>
                <td><?= h($cliente->DOMICILIO) ?></td>
                <td><?= h($cliente->LOCALIDAD) ?></td>
                <td><?= h($cliente->PROVINCIA) ?></td>
                <td><?= h($cliente->TELEFONO_1) ?></td>
                <td><?= h($cliente->TELEFONO_2) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->COD_CLIENT]) ?>
                    <?= $this->Html->link(__('Comprobantes'), ['controller'=>'comprobantes','action' => 'vercomprobantecliente', $cliente->COD_CLIENT]) ?>
                    <?= $this->Form->postLink(__('Elimnar'), ['action' => 'delete', $cliente->COD_CLIENT], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->COD_CLIENT)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
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
    </div>
</div>
