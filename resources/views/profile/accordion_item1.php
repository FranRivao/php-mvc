<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Mi informacion
        </button>
    </h2>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <hr>
            <div class="row p-0 m-0 my-3" id="mi_data">
                <div class="col-12 p-3 rounded-3 profile_row_bg">
                    <form action="<?php echo constant('APP_URL') ?>profile/edit" method="POST" id="edit_form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="username" class="form-label"> Username </label>
                                    <input type="text" name="username" id="username" class="form-control form-control-sm" value="<?php echo $_SESSION['user']['username'] ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group my-2">
                                    <label for="name" class="form-label"> Nombre </label>
                                    <input type="text" name="name" id="name" class="form-control form-control-sm" value="<?php echo $_SESSION['user']['name'] ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group my-2">
                                    <label for="surname" class="form-label"> Apellido </label>
                                    <input type="text" name="surname" id="surname" class="form-control form-control-sm" value="<?php echo $_SESSION['user']['surname'] ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group my-2">
                                    <label for="email" class="form-label"> Email </label>
                                    <input type="text" name="email" id="email" class="form-control form-control-sm" value="<?php echo $_SESSION['user']['email'] ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group-check my-2">
                                    <label for="edit_checkbox" class="form-check-label task-label mr-1"> Presione aqui para poder hacer un cambio </label>
                                    <input type="checkbox" class="form-check-input" name="edit_checkbox" id="edit_checkbox">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-12">
                                <div class="form-group mt-2">
                                    <button class="btn btn-sm btn-primary button-transition disabled col-12" id="edit_button"> Cambiar </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>