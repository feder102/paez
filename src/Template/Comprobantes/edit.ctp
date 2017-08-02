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
                ['action' => 'delete', $comprobante->N_COMP],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comprobante->N_COMP)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comprobantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comprobantes form large-9 medium-8 columns content">
    <?= $this->Form->create($comprobante) ?>
    <fieldset>
        <legend><?= __('Edit Comprobante') ?></legend>
        <?php
            echo $this->Form->control('ID_COMP');
            echo $this->Form->control('COD_CLIENT');
            echo $this->Form->control('COD_VENDED');
            echo $this->Form->control('COND_VTA');
            echo $this->Form->control('ESTADO');
            echo $this->Form->control('FECHA_EMIS', ['empty' => true]);
            echo $this->Form->control('FECHA_CANC', ['empty' => true]);
            echo $this->Form->control('IMPORTE');
            echo $this->Form->control('COBRADO');
            echo $this->Form->control('SALDO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
