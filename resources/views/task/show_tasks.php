<div class='col'>
    <div class='card shadow'>
        <div class='card-header task-card-header'>
            <p class='task-name'> <?php echo $name ?> </p>
        </div>

        <div class='card-body task-card-body'>
            <p class='task-description'> <?php echo $descr ?> </p>
        </div>

        <div class='card-footer d-flex justify-content-end'>

            <!-- Edit Modal Button -->
            <button class='btn btn-outline-warning mr-2' data-bs-toggle='modal' id="editModalBtn" data-bs-target='#editModal<?php echo $id ?>'>
                <i class='fas fa-pencil-alt'></i>
            </button>

            <?php require '../resources/views/task/edit_task_modal.php' ?>

            <!-- Delete Modal Button -->
            <button class='btn btn-outline-danger' data-bs-toggle='modal' id="deleteModalBtn" data-bs-target='#deleteModal<?php echo $id ?>'>
                <i class='fas fa-trash-alt'></i>
            </button>
            
            <?php require '../resources/views/task/delete_task_modal.php' ?>
        </div>
    </div>
</div>