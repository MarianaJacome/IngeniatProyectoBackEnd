<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */


?>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar Registro</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($menu) ?>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Menu</label>
                            <select id="inputState" name="menu_id" class="default-select form-control wide">
                                <option selected>Ninguno...</option>
                                <?php foreach($menus as $menu_){ ?>
                                    <?php if($menu_->id == $menu->menu_id){ ?>
                                        <option selected value="<?= $menu_->id ?>"  <?= $menu_->icon ?> ><?= $menu_->nombre ?></option>
                                    <?php } else {?>
                                        <option value="<?= $menu_->id ?>" <?= $menu_->icon ?> ><?= $menu_->nombre ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre del menú</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder=""  value="<?= $menu->nombre ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">icono</label>
                            <input type="text"  id="icon" name="icon" class="form-control" placeholder="fas fa-users" value="<?= $menu->icon ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Href</label>
                            <input type="text" id="href" name="href" class="form-control" placeholder="" value="<?= $menu->href ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label class="form-label">Posicion</label>
                            <input type="text" id="position" name="position"class="form-control" placeholder="" value="<?= $menu->position ?>">
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <!-- <label class="form-label">Roles</label> -->
                        <select class="multi-select" name="grupos[_ids][]" multiple="multiple">
                            <?php $gru = 0;?>
                            <?php foreach($grupos as $grupo){ ?>
                                <?php $haySelect = false;?>
                                <?php foreach($menu->grupos as $grupomenu){ ?>
                                    
                                    <?php if($grupomenu->id == $grupo->id){ ?>
                                        
                                        <?php $haySelect = true;?>
                                        <?php $gru++; ?>
                                        <option selected value="<?= $grupo->id ?>" ><?= $grupo->nombre ?></option>
                                    <?php } ?>
                                <?php } ?>
                                <?php if(!$haySelect){ ?>
                                    <?php $gru++; ?>
                                    <option value="<?= $grupo->id ?>"><?= $grupo->nombre ?></option>
                                <?php } ?>
                            <?php } ?>
                            <?php if($gru==0){ ?>
                                <?php foreach($grupos as $grupo){ ?>
                                    <option value="<?= $grupo->id ?>"><?= $grupo->nombre ?></option>
                                <?php } ?>
                            <?php } ?>   
                        </select>
                        
                        
                    </div>
                    <div class="mb-3">
                        <div class="form-check custom-checkbox">
                            <input type="hidden" id="actives"  name="activo" value="<?= $menu->activo ? "1" : "0" ?>">
							<input type="checkbox" <?= $menu->activo == 1 ? "checked" : "" ?> class="form-check-input"  onclick="setActive();" id="customCheckBox1" >
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

    var active_switch = <?= $menu->activo ? "1" : "0"  ?>;


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
