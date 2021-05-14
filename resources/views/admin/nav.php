<div class="row d-flex justify-content-between">
    <div class="col-lg-4 col-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php 
                    for ($s = 0; $s < ($this->totalPages); $s++):   
                    $actual = ($s + 1) == $this->actualPage ? "active" : ""; 
                ?>
                    
                <li class="page-item . <?php echo $actual ?> . '">
                    <a class="page-link" href="<?php echo constant('APP_URL') ?>admin?page=<?php echo $s + 1 ?>"><?php echo $s + 1 ?></a>
                </li>

                <?php endfor; ?>
                
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="col-lg-4 col-6">
        <form action="<?php echo constant('APP_URL') ?>admin/search" method="POST">
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Ingrese un usuario:">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <button class="btn btn-primary"><i class="fas fa-search"></i> Buscar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>