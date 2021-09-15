<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permiso $permiso
 */
?>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar Registro</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($permiso) ?>
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="" value="<?= $permiso->nombre ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Descripcion</label>
                            <input type="text"  id="descripcion" name="descripción" class="form-control" placeholder="" value="<?= $permiso->descripcion ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Controlador</label>
                            <input type="text" id="controller" name="controller" class="form-control" placeholder="" value="<?= $permiso->controller ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Accion</label>
                            <input type="text" id="action" name="action"class="form-control" placeholder="" value="<?= $permiso->action ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check custom-checkbox">
                            <input type="hidden" id="actives"  name="activo" value="<?= $permiso->activo ? "1" : "0" ?>">
							<input type="checkbox" <?= $permiso->activo == 1 ? "checked" : "" ?> class="form-check-input"  onclick="setActive();" id="customCheckBox1" >
							<label class="form-check-label" for="customCheckBox1">Activo</label>
						</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<script>

    var active_switch = <?= $usuario->activo ? "1" : "0"  ?>;


    function setActive(){
        if(active_switch == 1){
            active_switch = 0;
            $('#actives').val("0");
        } else{
            active_switch = 1;
            $('#actives').val("1");
        }
    }

</script>