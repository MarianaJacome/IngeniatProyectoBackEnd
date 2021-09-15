<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicacione $publicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publicacione'), ['action' => 'edit', $publicacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publicacione'), ['action' => 'delete', $publicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publicaciones view large-9 medium-8 columns content">
    <h3><?= h($publicacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($publicacione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $publicacione->has('usuario') ? $this->Html->link($publicacione->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $publicacione->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cat Estatus') ?></th>
            <td><?= $publicacione->has('cat_estatus') ? $this->Html->link($publicacione->cat_estatus->id, ['controller' => 'CatEstatus', 'action' => 'view', $publicacione->cat_estatus->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($publicacione->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($publicacione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($publicacione->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($publicacione->descripcion)); ?>
    </div>
    <div class="row">
        <h4><?= __('Imagen') ?></h4>
        <?= $this->Text->autoParagraph(h($publicacione->imagen)); ?>
    </div>
</div>
