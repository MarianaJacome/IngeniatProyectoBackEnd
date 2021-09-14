<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposPermiso $gruposPermiso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Permiso'), ['action' => 'edit', $gruposPermiso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Permiso'), ['action' => 'delete', $gruposPermiso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposPermiso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Permisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Permiso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposPermisos view large-9 medium-8 columns content">
    <h3><?= h($gruposPermiso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($gruposPermiso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposPermiso->has('grupo') ? $this->Html->link($gruposPermiso->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposPermiso->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permiso') ?></th>
            <td><?= $gruposPermiso->has('permiso') ? $this->Html->link($gruposPermiso->permiso->id, ['controller' => 'Permisos', 'action' => 'view', $gruposPermiso->permiso->id]) : '' ?></td>
        </tr>
    </table>
</div>
