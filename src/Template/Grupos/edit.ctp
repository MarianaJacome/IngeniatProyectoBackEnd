<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>

<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar Registro</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($grupo) ?>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="" value="<?= $grupo->nombre ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Ruta</label>
                            <input type="text" id="pagina" name="pagina" class="form-control" placeholder="" value="<?= $grupo->pagina ?>">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Descripcion</label>
                            <input type="textarea"  id="descripcion" name="descripcion" class="form-control" placeholder="" value="<?= $grupo->descripcion ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label class="form-label">Menús</label>
                        <select class="multi-select" name="menus[_ids][]" multiple="multiple">
                            <?php $gru = 0;?>
                            <?php foreach($menus as $menu){ ?>
                                <?php $haySelect = false;?>
                                <?php foreach($grupo->menus as $grupomenu){ ?>
                                    
                                    <?php if($grupomenu->id == $menu->id){ ?>
                                        
                                        <?php $haySelect = true;?>
                                        <?php $gru++; ?>
                                        <option selected value="<?= $menu->id ?>" ><?= $menu->nombre ?></option>
                                    <?php } ?>
                                <?php } ?>
                                <?php if(!$haySelect){ ?>
                                    <?php $gru++; ?>
                                    <option value="<?= $menu->id ?>"><?= $menu->nombre ?></option>
                                <?php } ?>
                            <?php } ?>
                            <?php if($gru==0){ ?>
                                <?php foreach($menus as $menu){ ?>
                                    <option value="<?= $menu->id ?>"><?= $menu->nombre ?></option>
                                <?php } ?>
                            <?php } ?>   
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Permisos</label>
                        <select class="multi-select" name="permisos[_ids][]" multiple="multiple">
                            <?php $gru = 0;?>
                            <?php foreach($permisos as $permiso){ ?>
                                <?php $haySelect = false;?>
                                <?php foreach($grupo->permisos as $grupomenu){ ?>
                                    
                                    <?php if($grupomenu->id == $permiso->id){ ?>
                                        
                                        <?php $haySelect = true;?>
                                        <?php $gru++; ?>
                                        <option selected value="<?= $permiso->id ?>" ><?= $permiso->nombre ?></option>
                                    <?php } ?>
                                <?php } ?>
                                <?php if(!$haySelect){ ?>
                                    <?php $gru++; ?>
                                    <option value="<?= $permiso->id ?>"><?= $permiso->nombre ?></option>
                                <?php } ?>
                            <?php } ?>
                            <?php if($gru==0){ ?>
                                <?php foreach($permisos as $permiso){ ?>
                                    <option value="<?= $permiso->id ?>"><?= $permiso->nombre ?></option>
                                <?php } ?>
                            <?php } ?>   
                        </select>
                    </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check custom-checkbox">
                            <input type="hidden" id="actives"  name="activo" value="<?= $grupo->activo ? "1" : "0" ?>">
							<input type="checkbox" <?= $grupo->activo == 1 ? "checked" : "" ?> class="form-check-input"  onclick="setActive();" id="customCheckBox1" >
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

    var active_switch = <?= $grupo->activo ? "1" : "0"  ?>;


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

