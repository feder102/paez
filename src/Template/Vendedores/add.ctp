<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vendedores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vendedores form large-9 medium-8 columns content">
    <?= $this->Form->create($vendedore) ?>
    <fieldset>
        <legend><?= __('Add Vendedore') ?></legend>
        <?php
            echo $this->Form->control('ID_VENDEDOR');
            echo $this->Form->control('NOMBRE_VEN');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
