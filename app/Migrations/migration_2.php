<?php

use App\Libs\Database;

$tb = "CREATE TABLE roles(
    id int(2) PRIMARY KEY NOT NULL,
    role varchar(8) NOT NULL
)";

$ins1 = "INSERT INTO roles(id, role) VALUES (:id, :role)";
$id1 = 1;
$role1 = 'admin';

$ins2 = "INSERT INTO roles(id, role) VALUES (:id, :role)";
$id2 = 2;
$role2 = 'user';

Database::createTable($tb);

$db = new Database;
$sql = $db->connect()->prepare($ins1);
$sql->bindParam(':id', $id1);
$sql->bindParam(':role', $role1);
$sql->execute();

$sql = $db->connect()->prepare($ins2);
$sql->bindParam(':id', $id2);
$sql->bindParam(':role', $role2);
$sql->execute();

?>