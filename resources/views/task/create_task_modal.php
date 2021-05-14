<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Title -->

            <div class="modal-header">
                <h5 class="modal-title"> Agregar tarea </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- End Modal Title -->

            <!-- Modal Body -->

            <div class="modal-body">

                <!-- Form -->
                
                <form action="<?php echo constant('APP_URL') ?>task/create" method="POST" id="create_form">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="name"> Nombre </label>
                                <input type="text" name="name" id="create_name" placeholder="Nombre de tarea:" class="form-control form-control-sm" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description"> Descripcion </label>
                                <textarea name="description" id="create_description" placeholder="Descripcion de tarea:" class="form-control form-control-sm overflow-hidden task-textarea" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary button-transition disabled mt-4" id="create_button"> Crear tarea </button>
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