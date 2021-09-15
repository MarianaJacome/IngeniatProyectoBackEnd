<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menus form large-9 medium-8 columns content">
    <?= $this->Form->create($menu) ?>
    <fieldset>
        <legend><?= __('Add Menu') ?></legend>
        <?php
            echo $this->Form->control('menu_id', ['options' => $menus, 'empty'=> true]);
            echo $this->Form->control('icon');
            echo $this->Form->control('nombre');
            echo $this->Form->control('href');
            echo $this->Form->control('position');
            echo $this->Form->control('activo');
            echo $this->Form->control('grupos._ids', ['options' => $grupos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nuevo menú</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Menu</label>
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Choose...</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre del menú</label>
                            <input type="text" class="form-control" placeholder="Nombre del menú">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">icono</label>
                            <input type="text" class="form-control" placeholder="fas fa-users">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Href</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label class="form-label">Posicion</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Activo
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>