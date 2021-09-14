<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permiso $permiso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permiso'), ['action' => 'edit', $permiso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permiso'), ['action' => 'delete', $permiso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permisos view large-9 medium-8 columns content">
    <h3><?= h($permiso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($permiso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($permiso->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Controller') ?></th>
            <td><?= h($permiso->controller) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($permiso->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($permiso->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($permiso->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $permiso->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripción') ?></h4>
        <?= $this->Text->autoParagraph(h($permiso->descripción)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Grupos') ?></h4>
        <?php if (!empty($permiso->grupos)): ?>
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
            <?php foreach ($permiso->grupos as $grupos): ?>
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
</div>
