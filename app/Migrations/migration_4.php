<?php

use App\Libs\Database;

$tb = "CREATE TABLE tasks(
    id int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int(255) NOT NULL,
    name varchar(50) NOT NULL,
    description text(600) NOT NULL,
    timestamp TIMESTAMP NOT NULL,
    CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE 
)";

Database::createTable($tb);

?>