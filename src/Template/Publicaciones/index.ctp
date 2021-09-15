<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicacione[]|\Cake\Collection\CollectionInterface $publicaciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publicacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicaciones index large-9 medium-8 columns content">
    <h3><?= __('Publicaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cat_estatu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publicaciones as $publicacione): ?>
            <tr>
                <td><?= h($publicacione->id) ?></td>
                <td><?= $publicacione->has('usuario') ? $this->Html->link($publicacione->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $publicacione->usuario->id]) : '' ?></td>
                <td><?= $publicacione->has('cat_estatus') ? $this->Html->link($publicacione->cat_estatus->id, ['controller' => 'CatEstatus', 'action' => 'view', $publicacione->cat_estatus->id]) : '' ?></td>
                <td><?= h($publicacione->titulo) ?></td>
                <td><?= h($publicacione->created) ?></td>
                <td><?= h($publicacione->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publicacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publicacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicacione->id)]) ?>
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
