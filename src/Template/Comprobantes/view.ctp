<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Comprobante $comprobante
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comprobante'), ['action' => 'edit', $comprobante->N_COMP]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comprobante'), ['action' => 'delete', $comprobante->N_COMP], ['confirm' => __('Are you sure you want to delete # {0}?', $comprobante->N_COMP)]) ?> </li>
        <li><?= $this->Html->link(__('List Comprobantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comprobante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comprobantes view large-9 medium-8 columns content">
    <h3><?= h($comprobante->N_COMP) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COD CLIENT') ?></th>
            <td><?= h($comprobante->COD_CLIENT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COD VENDED') ?></th>
            <td><?= h($comprobante->COD_VENDED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COND VTA') ?></th>
            <td><?= h($comprobante->COND_VTA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ESTADO') ?></th>
            <td><?= h($comprobante->ESTADO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N COMP') ?></th>
            <td><?= h($comprobante->N_COMP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T COMP') ?></th>
            <td><?= h($comprobante->T_COMP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID COMP') ?></th>
            <td><?= $this->Number->format($comprobante->ID_COMP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IMPORTE') ?></th>
            <td><?= $this->Number->format($comprobante->IMPORTE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COBRADO') ?></th>
            <td><?= $this->Number->format($comprobante->COBRADO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SALDO') ?></th>
            <td><?= $this->Number->format($comprobante->SALDO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FECHA EMIS') ?></th>
            <td><?= h($comprobante->FECHA_EMIS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FECHA CANC') ?></th>
            <td><?= h($comprobante->FECHA_CANC) ?></td>
        </tr>
    </table>
</div>
