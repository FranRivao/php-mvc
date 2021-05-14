<main>
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 col-12">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size: 23px;"><b> Tareas </b></span>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#createModal"> + Tarea </button>
                    </div>
                </div>

                <?php
                    require_once 'create_task_modal.php'; 
                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 g-3 my-3">
                            <?php
                                use App\Controllers\TaskController;
                                TaskController::showTasks();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>