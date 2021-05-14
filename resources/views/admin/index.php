<main>
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-12">

                <!-- Users Table -->

                <table class="table table-stripped table-light table-hover border-4 mt-3">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Username </th>
                            <th> Nombre </th>
                            <th> Apellido </th>
                            <th> Password </th>
                            <th> Email </th>
                            <th> Rol </th>
                            <th class="text-center"> Acciones </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            use App\Libs\Pagination;
                            $p = new Pagination(6);
                        ?>
                    </tbody>
                </table>

                <!-- End Users Table -->

            </div>
        </div>
    </div>
</main>