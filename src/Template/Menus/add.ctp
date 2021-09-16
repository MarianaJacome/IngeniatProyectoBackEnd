<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nuevo Registro</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($menu) ?>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Menu</label>
                            <select id="inputState" name="menu_id" class="default-select form-control wide">
                                <option selected value="">Ninguno...</option>
                                <?php foreach($menus as $menu){ ?>
                                    <option value="<?= $menu->id ?>" ><?= $menu->nombre ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nombre del menú</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">icono</label>
                            <input type="text"  id="icon" name="icon" class="form-control" placeholder="fas fa-users">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Href</label>
                            <input type="text" id="href" name="href" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                        <label class="form-label">Posicion</label>
                            <input type="text" id="position" name="position"class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label class="form-label">Roles</label>
                        <select class="multi-select" name="grupos[_ids][]" multiple="multiple">
                            <?php foreach($grupos as $grupo){ ?>
                                <option value="<?= $grupo->id ?>"><?= $grupo->nombre ?></option>
                            <?php } ?>
                        </select>
                                        
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