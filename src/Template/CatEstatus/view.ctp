<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatEstatus $catEstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cat Estatus'), ['action' => 'edit', $catEstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cat Estatus'), ['action' => 'delete', $catEstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catEstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cat Estatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cat Estatus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catEstatus view large-9 medium-8 columns content">
    <h3><?= h($catEstatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($catEstatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($catEstatus->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($catEstatus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($catEstatus->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $catEstatus->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($catEstatus->descripcion)); ?>
    </div>
</div>
