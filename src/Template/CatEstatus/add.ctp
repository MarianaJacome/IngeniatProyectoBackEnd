<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatEstatus $catEstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cat Estatus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="catEstatus form large-9 medium-8 columns content">
    <?= $this->Form->create($catEstatus) ?>
    <fieldset>
        <legend><?= __('Add Cat Estatus') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('activo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
