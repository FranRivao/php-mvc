<header>
    <nav class="navbar navbar-light shadow nav-color">
        <div class="container d-flex justify-content-between">
            <a href="<?php echo constant('APP_URL') ?>home" class="navbar-brand m-0 fw-bold"> <?php echo constant('APP_NAME') ?> </a>
    
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fas fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
            </button>
        </div>
    
        <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header d-flex align-items-center">
                <p id="offcanvasRightLabel" class="navbar-brand p-0 m-0 fw-bold"> <?php echo constant('APP_NAME') ?> </p>
                <button type="button" class="btn-close text-reset m-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>home"><i class="fas fa-home nav-icon"></i> Home</a></li>

                    <?php if(!isset($_SESSION['user'])): ?>
                        <li class="nav-item"><a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>login"><i class="fas fa-sign-in-alt nav-icon"></i> Login</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>register"><i class="fas fa-sign-out-alt nav-icon"></i> Register</a></li>
                    <?php endif; ?>
                
                    <?php if(isset($_SESSION['user'])): ?>
                        <li class="nav-item"><a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>task"><i class="fas fa-tasks nav-icon"></i> Tareas</a></li>
                        
                        <li class="nav-item fw-bolder">
                            <a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>profile"><i class="fas fa-user"></i> Usuario(<?php echo $_SESSION['user']['username'] ?>)</a>
                        </li>

                        <?php if($_SESSION['user']['role'] == '1'): ?>
                            <li><a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>admin?page=1"><i class="fas fa-users-cog"></i> Administracion</a></li>
                        <?php endif; ?>

                        <li class="nav-item fw-bolder"><a class="nav-link fw-bolder" href="<?php echo constant('APP_URL') ?>logout"><i class="fas fa-sign-out-alt"></i> Log out</a></li>

                        <!-- <li class="nav-item"><span class="cursos-pointer disabled" id="changeModeBtn">Modo Oscuro</span></li> -->

                        <li class="nav-item fw-bolder mt-4"><i class="fas fa-check-circle"></i> Has iniciado sesion</li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>