<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Plane[]|\Cake\Collection\CollectionInterface $planes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plane'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planes index large-9 medium-8 columns content">
    <h3><?= __('Planes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_PLAN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COND_VTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DESC_COND') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CANT_CUOTA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DIA_MES') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planes as $plane): ?>
            <tr>
                <td><?= $this->Number->format($plane->ID_PLAN) ?></td>
                <td><?= h($plane->COND_VTA) ?></td>
                <td><?= h($plane->DESC_COND) ?></td>
                <td><?= $this->Number->format($plane->CANT_CUOTA) ?></td>
                <td><?= h($plane->DIA_MES) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $plane->COND_VTA]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $plane->COND_VTA]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $plane->COND_VTA], ['confirm' => __('Are you sure you want to delete # {0}?', $plane->COND_VTA)]) ?>
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
