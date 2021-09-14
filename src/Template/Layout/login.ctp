<section class="row flexbox-container">
    <div class="col-xl-8 col-11 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="<?= $this->Url->Image('login.png'); ?>" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                    <p class="px-2">
                            <?= $this->Flash->render() ?>
                        </p>
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Inicio de sesión</h4>
                            </div>
                        </div>
                        <p class="px-2">Bienvenido/a de nuevo, por favor inicia sesión para acceder a tu cuenta.</p>

                        <div class="card-content">
                            <div class="card-body pt-1">
                                <?= $this->Form->create() ?>
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="user-name">Usuario</label>
                                    </fieldset>
                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="user-password">Contraseña</label>
                                    </fieldset>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <!-- <div class="text-left">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Recuerdame</span>
                                                </div>
                                            </fieldset>
                                        </div> -->
                                        <!-- <div class="text-right"><a href="#" class="card-link">¿Contraseña olvidada?</a></div> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right btn-inline">Iniciar</button>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                        <div class="login-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
