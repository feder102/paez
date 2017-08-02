<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->COD_CLIENT],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->COD_CLIENT)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->control('ID_CLIENTE');
            echo $this->Form->control('RAZON_SOCI');
            echo $this->Form->control('COD_VENDED');
            echo $this->Form->control('COD_ZONA');
            echo $this->Form->control('COND_VTA');
            echo $this->Form->control('CUIT');
            echo $this->Form->control('CUPO_CREDI');
            echo $this->Form->control('DOMICILIO');
            echo $this->Form->control('E_MAIL');
            echo $this->Form->control('FECHA_ALTA', ['empty' => true]);
            echo $this->Form->control('LOCALIDAD');
            echo $this->Form->control('C_POSTAL');
            echo $this->Form->control('PROVINCIA');
            echo $this->Form->control('NOM_COM');
            echo $this->Form->control('DIR_COM');
            echo $this->Form->control('TELEFONO_1');
            echo $this->Form->control('TELEFONO_2');
            echo $this->Form->control('TIPO_DOC');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
