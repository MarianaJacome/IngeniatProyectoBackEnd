<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permiso $permiso
 */
?>

<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nuevo Registro</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($permiso) ?>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Descripcion</label>
                            <input type="text"  id="descripcion" name="descripción" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Controlador</label>
                            <input type="text" id="controller" name="controller" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Accion</label>
                            <input type="text" id="action" name="action"class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check custom-checkbox">
                            <input type="hidden" id="actives"  name="activo" value="1">
							<input type="checkbox" class="form-check-input" checked='checked'  onclick="setActive();" id="customCheckBox1" >
							<label class="form-check-label" for="customCheckBox1">Activo</label>
						</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<script>

    var active_switch = true;

    function setActive(){
        if(active_switch){
            active_switch = false;
            $('#actives').val("0");
        } else{
            active_switch = true;
            $('#actives').val("1");
        }
    }

</script>

