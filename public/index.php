<?php

use App\Libs\App;
use App\Models\UserModel;

spl_autoload_register(function($class){
    $route = "../" . str_replace("\\", "/", $class) . ".php";
    file_exists($route) ? require_once $route : null;
});

require_once '../config/config.php';

new App;

// Descomentar linea 16 y 17 para ejecutar la/las migracion/es. (comentar linea 12)
// Si queres ejecutar una migracion en especifico, pone el numero de migracion como 2do parametro (obligatorio poner la cantidad de migraciones que existen (1er parametro))
// use App\Libs\Database;
// Database::migration(4);

// Descomentar lineas 20 y 21 para ejecutar el faker de usuarios. (comentar linea 12)
// use App\Fakers\UserFaker;
// UserFaker::faker();

?>