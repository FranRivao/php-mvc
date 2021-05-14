<div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Acciones de la cuenta
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <hr>
            <div class="col-12 p-3 rounded-3 profile_row_bg">
                <form action="<?php echo constant('APP_URL') ?>profile/delete" method="POST" id="delete_form">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group-check">
                                <label for="delete_checkbox" class="form-check-label my-label mr-1">Presione aqui para poder eliminar su usuario</label>
                                <input type="checkbox" class="form-check-input" name="delete_checkbox" id="delete_checkbox">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <p class="text-danger my-label"><b>Esta accion es irreversible</b></p>
                                <button class="btn btn-sm btn-danger button-transition disabled col-md-2 col-12" id="delete_button">
                                    Eliminar
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