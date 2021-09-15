<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permiso[]|\Cake\Collection\CollectionInterface $permisos
 */
?>

<div class="row page-titles">
<ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabla</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Permisos</a></li>
</ol>
</div>
<!-- row -->

<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div style="float:right; margin:20px;">
            <?= $this->Html->link('<button type="button" class="btn btn-rounded btn-primary"  ><span class="btn-icon-start text-primary"><i class="fa fa-plus color-info"></i></span>Nuevo permiso</button> ', ['action' => 'add'] ,['escape'=>false]) ?>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Controlador') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Accion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Activo') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Creacion') ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($permisos as $permiso): ?>
                            <tr>
                            
                                <td><?= h($permiso->nombre) ?></td>
                                <td><?= h($permiso->controller) ?></td>
                                <td><?= h($permiso->action) ?></td>
                                <td><?= $permiso->activo == 1 ? '<span class="badge light badge-success"> Activo' : '<span class="badge light badge-danger"> Inactivo' ?></td>
                                <td><?= h($permiso->created) ?></td>
                                <td class="actions">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- < ?= $this->Html->link(__('View'), ['action' => 'view', $menu->id]) ?> -->
                                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $permiso->id] ,['class'=>'dropdown-item']) ?>
                                            <?= $this->Html->link(__('Eliminar'), ['action' => 'delete', $permiso->id] , ['class'=>'dropdown-item'], ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id)]) ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
