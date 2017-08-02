<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Zona $zona
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Zona'), ['action' => 'edit', $zona->COD_ZONA]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Zona'), ['action' => 'delete', $zona->COD_ZONA], ['confirm' => __('Are you sure you want to delete # {0}?', $zona->COD_ZONA)]) ?> </li>
        <li><?= $this->Html->link(__('List Zonas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zona'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="zonas view large-9 medium-8 columns content">
    <h3><?= h($zona->COD_ZONA) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COD ZONA') ?></th>
            <td><?= h($zona->COD_ZONA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOMBRE ZON') ?></th>
            <td><?= h($zona->NOMBRE_ZON) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID ZONA') ?></th>
            <td><?= $this->Number->format($zona->ID_ZONA) ?></td>
        </tr>
    </table>
</div>
