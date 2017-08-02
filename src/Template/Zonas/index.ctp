<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Zona[]|\Cake\Collection\CollectionInterface $zonas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Zona'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="zonas index large-9 medium-8 columns content">
    <h3><?= __('Zonas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_ZONA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_ZONA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOMBRE_ZON') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($zonas as $zona): ?>
            <tr>
                <td><?= $this->Number->format($zona->ID_ZONA) ?></td>
                <td><?= h($zona->COD_ZONA) ?></td>
                <td><?= h($zona->NOMBRE_ZON) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $zona->COD_ZONA]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zona->COD_ZONA]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zona->COD_ZONA], ['confirm' => __('Are you sure you want to delete # {0}?', $zona->COD_ZONA)]) ?>
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
