<div class="modal fade" id="editModal<?php echo $id ?>" tabindex="-1" aria-labelledby="editModalBtn" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Title -->

            <div class="modal-header">
                <h5 class="modal-title" id="editModal"> Editar tarea </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- End Modal Title -->

            <!-- Modal Body -->

            <div class="modal-body">

                <!-- Form Title -->

                <div class="row">
                    <div class="col-12">
                        <p class="text-warning fw-bold"> Esta accion es irreversible </p>
                    </div>
                </div>

                <!-- End Form Title -->

                <!-- Form -->

                <form action="<?php echo constant('APP_URL') ?>task/edit" method="POST" class="m-0">
                    <input type='hidden' name='id' id="id" value='<?php echo $id ?>'>
                    <input type='hidden' name='user_id' value='<?php echo $user_id ?>'>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="name"> Nombre </label>
                                <input type="text" name="name" id="edit_name" class="form-control form-control-sm" value="<?php echo $name ?>" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description"> Descripcion </label>
                                <textarea name="description" id="edit_description" class="form-control form-control-sm task-textarea" cols="1" required><?php echo $descr ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button class="btn btn-sm btn-warning button-transition mt-4"><i class="fas fa-pencil-alt"></i> Editar </button>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- End Form -->

            </div>

            <!-- End Modal Body -->

        </div>
    </div>
</div>