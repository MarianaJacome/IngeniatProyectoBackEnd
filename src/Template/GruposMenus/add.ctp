<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposMenu $gruposMenu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos Menus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposMenus form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposMenu) ?>
    <fieldset>
        <legend><?= __('Add Grupos Menu') ?></legend>
        <?php
            echo $this->Form->control('grupo_id', ['options' => $grupos]);
            echo $this->Form->control('menu_id', ['options' => $menus]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
