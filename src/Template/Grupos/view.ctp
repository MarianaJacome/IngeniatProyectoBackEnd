<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupo'), ['action' => 'edit', $grupo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupo'), ['action' => 'delete', $grupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grupos view large-9 medium-8 columns content">
    <h3><?= h($grupo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($grupo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($grupo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagina') ?></th>
            <td><?= h($grupo->pagina) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($grupo->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color Icon') ?></th>
            <td><?= h($grupo->color_icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($grupo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($grupo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $grupo->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($grupo->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Menus') ?></h4>
        <?php if (!empty($grupo->menus)): ?>
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
            <?php foreach ($grupo->menus as $menus): ?>
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
    <div class="related">
        <h4><?= __('Related Permisos') ?></h4>
        <?php if (!empty($grupo->permisos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripción') ?></th>
                <th scope="col"><?= __('Controller') ?></th>
                <th scope="col"><?= __('Action') ?></th>
                <th scope="col"><?= __('Activo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grupo->permisos as $permisos): ?>
            <tr>
                <td><?= h($permisos->id) ?></td>
                <td><?= h($permisos->nombre) ?></td>
                <td><?= h($permisos->descripción) ?></td>
                <td><?= h($permisos->controller) ?></td>
                <td><?= h($permisos->action) ?></td>
                <td><?= h($permisos->activo) ?></td>
                <td><?= h($permisos->created) ?></td>
                <td><?= h($permisos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permisos', 'action' => 'view', $permisos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permisos', 'action' => 'edit', $permisos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permisos', 'action' => 'delete', $permisos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permisos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($grupo->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Grupo Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Usuario') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Activo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grupo->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->grupo_id) ?></td>
                <td><?= h($usuarios->nombre) ?></td>
                <td><?= h($usuarios->apellido) ?></td>
                <td><?= h($usuarios->correo) ?></td>
                <td><?= h($usuarios->usuario) ?></td>
                <td><?= h($usuarios->password) ?></td>
                <td><?= h($usuarios->activo) ?></td>
                <td><?= h($usuarios->created) ?></td>
                <td><?= h($usuarios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
