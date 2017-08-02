<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Vendedore[]|\Cake\Collection\CollectionInterface $vendedores
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vendedore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendedores index large-9 medium-8 columns content">
    <h3><?= __('Vendedores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_VENDEDOR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_VENDED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOMBRE_VEN') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedores as $vendedore): ?>
            <tr>
                <td><?= $this->Number->format($vendedore->ID_VENDEDOR) ?></td>
                <td><?= h($vendedore->COD_VENDED) ?></td>
                <td><?= h($vendedore->NOMBRE_VEN) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendedore->COD_VENDED]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedore->COD_VENDED]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedore->COD_VENDED], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->COD_VENDED)]) ?>
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
