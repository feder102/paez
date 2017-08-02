<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Vendedore $vendedore
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vendedore'), ['action' => 'edit', $vendedore->COD_VENDED]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vendedore'), ['action' => 'delete', $vendedore->COD_VENDED], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->COD_VENDED)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendedore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendedores view large-9 medium-8 columns content">
    <h3><?= h($vendedore->COD_VENDED) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COD VENDED') ?></th>
            <td><?= h($vendedore->COD_VENDED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOMBRE VEN') ?></th>
            <td><?= h($vendedore->NOMBRE_VEN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID VENDEDOR') ?></th>
            <td><?= $this->Number->format($vendedore->ID_VENDEDOR) ?></td>
        </tr>
    </table>
</div>
