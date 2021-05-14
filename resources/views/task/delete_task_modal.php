<div class="modal fade" id="deleteModal<?php echo $id ?>" tabindex="-1" aria-labelledby="deleteModalBtn" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Title -->

            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal"> Eliminar tarea </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- End Modal Title -->

            <!-- Modal Body -->

            <div class="modal-body">

                <!-- Form Title -->

                <div class="row">
                    <div class="col-12">
                        <p class="text-danger fw-bold"> Esta accion es irreversible </p>
                    </div>
                </div>

                <!-- End Form Title -->

                <!-- Form -->

                <form action="<?php echo constant('APP_URL') ?>task/delete" method="POST" class="m-0">
                    <input type='hidden' name='id' value='<?php echo $id ?>'>
                    <input type='hidden' name='user_id' value='<?php echo $user_id ?>'>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button class='btn btn-sm btn-outline-danger'><i class='fas fa-trash-alt'></i> Eliminar </button>
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