<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_USUARIO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_VENDED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USUARIO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CLAVE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PERFIL') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->ID_USUARIO) ?></td>
                <td><?= h($usuario->COD_VENDED) ?></td>
                <td><?= h($usuario->USUARIO) ?></td>
                <td><?= h($usuario->CLAVE) ?></td>
                <td><?= h($usuario->PERFIL) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->ID_USUARIO]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->ID_USUARIO]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->ID_USUARIO], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->ID_USUARIO)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
