<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar Registro</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($usuario) ?>
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Rol</label>
                            <select id="inputState" name="menu_id" class="default-select form-control wide">
                                <option selected>Ninguno...</option>
                                <?php foreach($grupos as $grupo){ ?>
                                    <?php if($grupo->id == $usuario->grupo_id){ ?>
                                        <option selected value="<?= $grupo->id ?>"><?= $grupo->nombre ?></option>
                                    <?php } else {?>
                                        <option value="<?= $grupo->id ?>" ><?= $grupo->nombre ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre(s)</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="" value="<?= $usuario->nombre ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Apellido(s)</label>
                            <input type="text"  id="apellido" name="icon" class="form-control" placeholder="" value="<?= $usuario->apellido ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Correo</label>
                            <input type="email" id="correo" name="correo" class="form-control" placeholder="" value="<?= $usuario->correo ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Usuario</label>
                            <input type="text" id="usuario" name="usuario"class="form-control" placeholder="" value="<?= $usuario->usuario ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Contraseña</label>
                            <input type="password" id="password" name="password"class="form-control" placeholder="" value="<?= $usuario->password ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check custom-checkbox">
                            <input type="hidden" id="actives"  name="activo" value="<?= $usuario->activo ? "1" : "0" ?>">
							<input type="checkbox" <?= $usuario->activo == 1 ? "checked" : "" ?> class="form-check-input"  onclick="setActive();" id="customCheckBox1" >
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
