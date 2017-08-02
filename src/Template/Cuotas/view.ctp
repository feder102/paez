<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cuota $cuota
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cuota'), ['action' => 'edit', $cuota->N_COMP_CAN]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuota'), ['action' => 'delete', $cuota->N_COMP_CAN], ['confirm' => __('Are you sure you want to delete # {0}?', $cuota->N_COMP_CAN)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuota'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuotas view large-9 medium-8 columns content">
    <h3><?= h($cuota->N_COMP_CAN) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ESTADO VTO') ?></th>
            <td><?= h($cuota->ESTADO_VTO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N COMP') ?></th>
            <td><?= h($cuota->N_COMP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T COMP') ?></th>
            <td><?= h($cuota->T_COMP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N COMP CAN') ?></th>
            <td><?= h($cuota->N_COMP_CAN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T COMP CAN') ?></th>
            <td><?= h($cuota->T_COMP_CAN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID CUOTA') ?></th>
            <td><?= $this->Number->format($cuota->ID_CUOTA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IMPORTE VT') ?></th>
            <td><?= $this->Number->format($cuota->IMPORTE_VT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FECHA VTO') ?></th>
            <td><?= h($cuota->FECHA_VTO) ?></td>
        </tr>
    </table>
</div>
