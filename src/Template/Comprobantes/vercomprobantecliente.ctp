<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Comprobante[]|\Cake\Collection\CollectionInterface $comprobantes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comprobante'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comprobantes index large-9 medium-8 columns content">
    <h3><?= __('Comprobantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('COD_VENDED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COND_VTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ESTADO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FECHA_EMIS') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FECHA_CANC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_COMP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('T_COMP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IMPORTE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COBRADO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SALDO') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comprobantes as $comprobante): ?>
            <tr>
                <td><?= h($comprobante->COD_VENDED) ?></td>
                <td><?= h($comprobante->COND_VTA) ?></td>
                <td><?= h($comprobante->ESTADO) ?></td>
                <td><?= date("d/m/Y", strtotime($comprobante->FECHA_EMIS)) ?></td>
                <td><?= date("d/m/Y", strtotime($comprobante->FECHA_CANC)) ?></td>
                <td><?= h($comprobante->N_COMP) ?></td>
                <td><?= h($comprobante->T_COMP) ?></td>
                <td><?= $this->Number->format($comprobante->IMPORTE) ?></td>
                <td><?= $this->Number->format($comprobante->COBRADO) ?></td>
                <td><?= $this->Number->format($comprobante->SALDO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comprobante->N_COMP]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comprobante->N_COMP]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comprobante->N_COMP], ['confirm' => __('Are you sure you want to delete # {0}?', $comprobante->N_COMP)]) ?>
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
