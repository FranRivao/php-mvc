<?php

use App\Libs\Database;

$drop_db = "DROP DATABASE IF EXISTS narf_industries";
$db = "CREATE DATABASE narf_industries";

Database::createDb($db, $drop_db);

?>