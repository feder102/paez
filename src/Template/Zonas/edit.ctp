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
                ['action' => 'delete', $zona->COD_ZONA],
                ['confirm' => __('Are you sure you want to delete # {0}?', $zona->COD_ZONA)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Zonas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="zonas form large-9 medium-8 columns content">
    <?= $this->Form->create($zona) ?>
    <fieldset>
        <legend><?= __('Edit Zona') ?></legend>
        <?php
            echo $this->Form->control('ID_ZONA');
            echo $this->Form->control('NOMBRE_ZON');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
