<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
  */
?>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('COD_CLIENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RAZON_SOCI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COND_VTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CUIT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DOMICILIO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TELEFONO_1') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= h($cliente->COD_CLIENT) ?></td>
                <td><?= h($cliente->RAZON_SOCI) ?></td>
                <td><?= h($cliente->COND_VTA) ?></td>
                <td><?= h($cliente->CUIT) ?></td>
                <!-- <td><?php //$this->Number->format($cliente->CUPO_CREDI) ?></td> -->
                <td><?= h($cliente->DOMICILIO) ?></td>
                <td><?= h($cliente->TELEFONO_1) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->ID_CLIENTE]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->ID_CLIENTE]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cliente->ID_CLIENTE], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->ID_CLIENTE)]) ?>
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
