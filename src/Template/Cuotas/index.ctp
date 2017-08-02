<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cuota[]|\Cake\Collection\CollectionInterface $cuotas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cuota'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuotas index large-9 medium-8 columns content">
    <h3><?= __('Cuotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_CUOTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ESTADO_VTO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FECHA_VTO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IMPORTE_VT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_COMP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('T_COMP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_COMP_CAN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('T_COMP_CAN') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuotas as $cuota): ?>
            <tr>
                <td><?= $this->Number->format($cuota->ID_CUOTA) ?></td>
                <td><?= h($cuota->ESTADO_VTO) ?></td>
                <td><?= h($cuota->FECHA_VTO) ?></td>
                <td><?= $this->Number->format($cuota->IMPORTE_VT) ?></td>
                <td><?= h($cuota->N_COMP) ?></td>
                <td><?= h($cuota->T_COMP) ?></td>
                <td><?= h($cuota->N_COMP_CAN) ?></td>
                <td><?= h($cuota->T_COMP_CAN) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuota->N_COMP_CAN]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuota->N_COMP_CAN]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuota->N_COMP_CAN], ['confirm' => __('Are you sure you want to delete # {0}?', $cuota->N_COMP_CAN)]) ?>
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
