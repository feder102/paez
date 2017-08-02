<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Planes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="planes form large-9 medium-8 columns content">
    <?= $this->Form->create($plane) ?>
    <fieldset>
        <legend><?= __('Add Plane') ?></legend>
        <?php
            echo $this->Form->control('ID_PLAN');
            echo $this->Form->control('DESC_COND');
            echo $this->Form->control('CANT_CUOTA');
            echo $this->Form->control('DIA_MES');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
