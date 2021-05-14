<main>
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-9 col-12">

                <!-- Form Title -->

                <div class="row">
                    <div class="col-12">
                        <h2> 
                            Registro<span style="font-size: 20px;"> o <a href="<?php echo constant('APP_URL') ?>login" class="black-a">login</a></span>
                        </h2>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5 col-12">
                        <hr>
                    </div>
                </div>

                <!-- End Form Title -->

                <!-- Form -->

                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo constant('APP_URL') ?>register/validate" method="POST" id="register_form">
                            <div class="row">
                                <div class="col-md-6 col-12 my-2">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Nombre:" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            <p class="fw-bold">Solo puede contener caracteres y espacios [max: 30]</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group my-2">
                                        <label for="surname" class="form-label">Apellido</label>
                                        <input type="text" name="surname" id="surname" class="form-control form-control-sm" placeholder="Apellido:" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            <p class="fw-bold">Solo puede contener caracteres y espacios [max: 30]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group my-2">
                                        <label for="username" class="form-label">Nombre de usuario</label>
                                        <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="Nombre de usuario:" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            <p class="fw-bold">Solo puede contener caracteres, numeros, guiones (-) y guiones bajos (_) [min: 4; max: 16]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group my-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Email:" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            <p class="fw-bold">El email ingresado no es valido</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group my-2">
                                        <label for="password" class="form-label">Contraseña</label><br>
                                            <div class="input-group ">
                                                <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Contraseña:" required>
                                                <button type="button" class="input-group-text outline-none" id="password_button">
                                                    <i class="fas fa-eye-slash" id="password_eye"></i>
                                                </button>
                                            </div>
                                        <div class="invalid-feedback">
                                            <p class="fw-bold">Solo puede contener caracteres, numeros, guiones (-), guiones bajos (_) y * & ^ % $ # @ ! [min: 8; max: 64]</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group my-2">
                                        <label for="password_repeat" class="form-label">Repetir contraseña</label>
                                            <div class="input-group ">
                                                <input type="password" name="password_repeat" id="password_repeat" class="form-control form-control-sm" placeholder="Repita su contraseña:" required>
                                                <button type="button" class="input-group-text outline-none" id="password_repeat_button">
                                                    <i class="fas fa-eye-slash" id="password_repeat_eye"></i>
                                                </button>
                                            </div>
                                        <div class="invalid-feedback">
                                            <p class="fw-bold"> Las contraseñas no coinciden
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-12">
                                    <div class="form-group mt-4">
                                        <button class="btn btn-sm btn-primary button-transition disabled col-12" id="register_button">Sign up</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-10 col-md-8 col-12 d-flex align-items-center">
                                    <div class="form-group mt-4">
                                        <p style="font-size: 10px;" class="m-0"> Creandote una cuenta podras acceder a distintos beneficios, entre ellos esta un dark mode!! </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- End Form -->

            </div>
        </div>
    </div>
</main>