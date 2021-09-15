<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicacione $publicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($publicacione) ?>
    <fieldset>
        <legend><?= __('Add Publicacione') ?></legend>
        <?php
            echo $this->Form->control('usuario_id', ['options' => $usuarios]);
            echo $this->Form->control('cat_estatu_id', ['options' => $catEstatus]);
            echo $this->Form->control('titulo');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('imagen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
