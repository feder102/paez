<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?php //$this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_CLIENTE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_CLIENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RAZON_SOCI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_VENDED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_ZONA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COND_VTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CUIT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CUPO_CREDI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DOMICILIO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('E_MAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FECHA_ALTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LOCALIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_POSTAL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PROVINCIA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOM_COM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DIR_COM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TELEFONO_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TELEFONO_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TIPO_DOC') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->ID_CLIENTE) ?></td>
                <td><?= h($cliente->COD_CLIENT) ?></td>
                <td><?= h($cliente->RAZON_SOCI) ?></td>
                <td><?= h($cliente->COD_VENDED) ?></td>
                <td><?= h($cliente->COD_ZONA) ?></td>
                <td><?= h($cliente->COND_VTA) ?></td>
                <td><?= h($cliente->CUIT) ?></td>
                <td><?= $this->Number->format($cliente->CUPO_CREDI) ?></td>
                <td><?= h($cliente->DOMICILIO) ?></td>
                <td><?= h($cliente->E_MAIL) ?></td>
                <td><?= h($cliente->FECHA_ALTA) ?></td>
                <td><?= h($cliente->LOCALIDAD) ?></td>
                <td><?= h($cliente->C_POSTAL) ?></td>
                <td><?= h($cliente->PROVINCIA) ?></td>
                <td><?= h($cliente->NOM_COM) ?></td>
                <td><?= h($cliente->DIR_COM) ?></td>
                <td><?= h($cliente->TELEFONO_1) ?></td>
                <td><?= h($cliente->TELEFONO_2) ?></td>
                <td><?= h($cliente->TIPO_DOC) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->COD_CLIENT]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->COD_CLIENT]) ?>
                    <?= $this->Form->postLink(__('Elimnar'), ['action' => 'delete', $cliente->COD_CLIENT], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->COD_CLIENT)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
