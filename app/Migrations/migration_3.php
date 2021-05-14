<?php

use App\Libs\Database;

$tb = "CREATE TABLE users(
    id int(250) AUTO_INCREMENT,
    username varchar(16) NOT NULL,
    name varchar(30) NOT NULL,
    surname varchar(30) NOT NULL,
    password varchar(250) NOT NULL,
    email varchar(50) NOT NULL,
    role int(2) NOT NULL DEFAULT 2,
    timestamp TIMESTAMP,
    CONSTRAINT PK_USER PRIMARY KEY (id, username, email),
    FOREIGN KEY (role) REFERENCES roles(id)
)";

Database::createTable($tb);

?>