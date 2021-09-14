<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menus view large-9 medium-8 columns content">
    <h3><?= h($menu->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($menu->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menu Id') ?></th>
            <td><?= h($menu->menu_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($menu->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($menu->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Href') ?></th>
            <td><?= h($menu->href) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($menu->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($menu->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($menu->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $menu->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Grupos') ?></h4>
        <?php if (!empty($menu->grupos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Pagina') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Color Icon') ?></th>
                <th scope="col"><?= __('Activo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->grupos as $grupos): ?>
            <tr>
                <td><?= h($grupos->id) ?></td>
                <td><?= h($grupos->nombre) ?></td>
                <td><?= h($grupos->descripcion) ?></td>
                <td><?= h($grupos->pagina) ?></td>
                <td><?= h($grupos->icon) ?></td>
                <td><?= h($grupos->color_icon) ?></td>
                <td><?= h($grupos->activo) ?></td>
                <td><?= h($grupos->created) ?></td>
                <td><?= h($grupos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Menus') ?></h4>
        <?php if (!empty($menu->menus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Href') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Activo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->menus as $menus): ?>
            <tr>
                <td><?= h($menus->id) ?></td>
                <td><?= h($menus->menu_id) ?></td>
                <td><?= h($menus->icon) ?></td>
                <td><?= h($menus->nombre) ?></td>
                <td><?= h($menus->href) ?></td>
                <td><?= h($menus->position) ?></td>
                <td><?= h($menus->activo) ?></td>
                <td><?= h($menus->created) ?></td>
                <td><?= h($menus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Menus', 'action' => 'view', $menus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Menus', 'action' => 'edit', $menus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menus', 'action' => 'delete', $menus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
