<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Cambiar contraseña
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <hr>
            <div class="col-12 p-3 rounded-3 profile_row_bg">
                <form action="<?php echo constant('APP_URL') ?>profile/changePassword" method="POST" id="password_form">
                    <div class="row">
                        <div class="col-md-6 col-12 my-2">
                            <div class="form-group-check">
                                <label for="actual_password" class="form-label">Contraseña actual</label>
                                <div class="input-group ">
                                    <input type="password" class="form-control form-control-sm" name="actual_password" id="actual_password" required>
                                    <button type="button" class="input-group-text outline-none" id="actual_password_button">
                                        <i class="fas fa-eye-slash" id="actual_password_eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12 mb-2">
                            <div class="form-group">
                                <label for="new_password" class="form-label">Nueva contraseña</label>
                                <div class="input-group ">
                                    <input type="password" class="form-control form-control-sm" name="new_password" id="new_password" required>
                                    <button type="button" class="input-group-text outline-none" id="new_password_button">
                                        <i class="fas fa-eye-slash" id="new_password_eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="input-check-group my-2">
                                <label for="password_checkbox" class="form-check-label my-label mr-1">Presione aqui para poder cambiar su contraseña</label>
                                <input type="checkbox" class="form-check-input" name="password_checkbox" id="password_checkbox">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 col-12">
                            <div class="form-group mt-2">
                                <button class="btn btn-sm btn-primary button-transition disabled col-12" id="password_button">
                                    Cambiar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
        </div>
    </div>
</div>