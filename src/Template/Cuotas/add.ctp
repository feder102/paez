<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cuotas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cuotas form large-9 medium-8 columns content">
    <?= $this->Form->create($cuota) ?>
    <fieldset>
        <legend><?= __('Add Cuota') ?></legend>
        <?php
            echo $this->Form->control('ID_CUOTA');
            echo $this->Form->control('ESTADO_VTO');
            echo $this->Form->control('FECHA_VTO', ['empty' => true]);
            echo $this->Form->control('IMPORTE_VT');
            echo $this->Form->control('N_COMP');
            echo $this->Form->control('T_COMP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
