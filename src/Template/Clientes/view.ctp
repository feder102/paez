<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cliente $cliente
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->ID_CLIENTE]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->ID_CLIENTE], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->ID_CLIENTE)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->ID_CLIENTE) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COD CLIENT') ?></th>
            <td><?= h($cliente->COD_CLIENT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RAZON SOCI') ?></th>
            <td><?= h($cliente->RAZON_SOCI) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COD VENDED') ?></th>
            <td><?= h($cliente->COD_VENDED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COD ZONA') ?></th>
            <td><?= h($cliente->COD_ZONA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COND VTA') ?></th>
            <td><?= h($cliente->COND_VTA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CUIT') ?></th>
            <td><?= h($cliente->CUIT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DOMICILIO') ?></th>
            <td><?= h($cliente->DOMICILIO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E MAIL') ?></th>
            <td><?= h($cliente->E_MAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LOCALIDAD') ?></th>
            <td><?= h($cliente->LOCALIDAD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C POSTAL') ?></th>
            <td><?= h($cliente->C_POSTAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PROVINCIA') ?></th>
            <td><?= h($cliente->PROVINCIA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOM COM') ?></th>
            <td><?= h($cliente->NOM_COM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DIR COM') ?></th>
            <td><?= h($cliente->DIR_COM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TELEFONO 1') ?></th>
            <td><?= h($cliente->TELEFONO_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TELEFONO 2') ?></th>
            <td><?= h($cliente->TELEFONO_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TIPO DOC') ?></th>
            <td><?= h($cliente->TIPO_DOC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID CLIENTE') ?></th>
            <td><?= $this->Number->format($cliente->ID_CLIENTE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CUPO CREDI') ?></th>
            <td><?= $this->Number->format($cliente->CUPO_CREDI) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FECHA ALTA') ?></th>
            <td><?= h($cliente->FECHA_ALTA) ?></td>
        </tr>
    </table>
</div>
