<main>
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-9 col-12">

                <!-- Form Title -->

                <div class="row">
                    <div class="col-12">
                        <h2> 
                            Login <span style="font-size: 20px;"> o <a href="<?php echo constant('APP_URL') ?>register" class="black-a"> registro </a></span>
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
                        <form action="<?php echo constant('APP_URL') ?>login/validate" method="POST" id="login_form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group my-2">
                                        <label for="username" class="form-label"> Nombre de usuario </label>
                                        <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="Nombre de usuario:" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group my-2">
                                        <label for="password" class="form-label"> Contraseña </label>
                                        <div class="input-group ">
                                            <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Contraseña:" required>
                                            <button type="button" class="input-group-text outline-none" id="password_button">
                                                <i class="fas fa-eye-slash" id="password_eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-12">
                                    <div class="form-group mt-4">
                                        <button class="btn btn-sm btn-primary button-transition disabled col-12" id="login_button"> Sign in </button>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-md-8 col-12 d-flex align-items-center">
                                    <div class="form-group mt-4">
                                        <p style="font-size: 10px;" class="m-0"> Iniciando sesion en tu cuenta podras acceder a distintos beneficios, entre ellos esta un dark mode!! </p>
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