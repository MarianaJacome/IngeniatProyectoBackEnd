<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposMenu $gruposMenu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Menu'), ['action' => 'edit', $gruposMenu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Menu'), ['action' => 'delete', $gruposMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposMenu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposMenus view large-9 medium-8 columns content">
    <h3><?= h($gruposMenu->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($gruposMenu->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposMenu->has('grupo') ? $this->Html->link($gruposMenu->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposMenu->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menu') ?></th>
            <td><?= $gruposMenu->has('menu') ? $this->Html->link($gruposMenu->menu->id, ['controller' => 'Menus', 'action' => 'view', $gruposMenu->menu->id]) : '' ?></td>
        </tr>
    </table>
</div>
