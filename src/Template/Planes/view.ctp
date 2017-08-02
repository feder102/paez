<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Plane $plane
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plane'), ['action' => 'edit', $plane->COND_VTA]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plane'), ['action' => 'delete', $plane->COND_VTA], ['confirm' => __('Are you sure you want to delete # {0}?', $plane->COND_VTA)]) ?> </li>
        <li><?= $this->Html->link(__('List Planes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plane'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planes view large-9 medium-8 columns content">
    <h3><?= h($plane->COND_VTA) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COND VTA') ?></th>
            <td><?= h($plane->COND_VTA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DESC COND') ?></th>
            <td><?= h($plane->DESC_COND) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DIA MES') ?></th>
            <td><?= h($plane->DIA_MES) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID PLAN') ?></th>
            <td><?= $this->Number->format($plane->ID_PLAN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CANT CUOTA') ?></th>
            <td><?= $this->Number->format($plane->CANT_CUOTA) ?></td>
        </tr>
    </table>
</div>
