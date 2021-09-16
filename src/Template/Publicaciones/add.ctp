<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicacione $publicacione
 */
?>

<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nuevo Publicacion</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <?= $this->Form->create($publicacione) ?>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Titulo</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Descripcion</label>
                            <textarea type="textarea"  id="descripcion" name="descripcion" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

