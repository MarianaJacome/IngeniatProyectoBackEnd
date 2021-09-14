<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposPermiso $gruposPermiso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos Permisos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposPermisos form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposPermiso) ?>
    <fieldset>
        <legend><?= __('Add Grupos Permiso') ?></legend>
        <?php
            echo $this->Form->control('grupo_id', ['options' => $grupos]);
            echo $this->Form->control('permiso_id', ['options' => $permisos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
