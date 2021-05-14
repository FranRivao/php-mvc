<?php namespace App\Libs;

class Database{
    private $host;
    private $database;
    private $user;
    private $pass;

    function __construct(){
        $this->host = constant('HOST');
        $this->database = constant('DATABASE');
        $this->user = constant('USER');
        $this->pass = constant('PASS');
    }

    function connect(){
        try{
            return new \PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass);
        } 
        catch(\PDOException $e){
            die("Conexion fallida: " . $e->getMessage());
        }
    }

    static function migration($cantMigrations, $migrationNum = null){
        if($migrationNum != null){
            $migration = "../app/Migrations/migration_" . $migrationNum . ".php";
            require_once $migration;
        }
        else{
            for($f = 0; $f < $cantMigrations; $f++){ 
                $migration = "../app/Migrations/migration_" . $f + 1 . ".php";
                require_once $migration;
            }
        }
    }

    // Creates a database
    static function createDb($db, $drop_db){
        $connect = new \mysqli(constant('HOST'), constant('USER'), constant('PASS'));

        echo $connect->connect_error ? die("Conexion fallida: $connect->connect_error") : null;

        echo $connect->query($drop_db) === true ? "Base de datos eliminada <br>" : "Error: " . $connect->error;
        echo $connect->query($db) === true ? "Base de datos creada <br>" : "Error: " . $connect->error;
    }

    // Creates a table
    static function createTable($tb){
        $connect = new \mysqli(constant('HOST'),constant('USER'), constant('PASS'), constant('DATABASE'));

        echo $connect->connect_error ? die("Conexion fallida: $connect->connect_error") : null;

        echo $connect->query($tb) === true ? "Tabla creada <br>" : "Error: " . $connect->error;
    }
    
    // Inserts a value into a table
    static function insertAtTable($ins){
        $connect = new \mysqli(constant('HOST'),constant('USER'), constant('PASS'), constant('DATABASE'));
    
        echo $connect->connect_error ? die("Conexion fallida: $connect->connect_error") : null;
    
        echo $connect->query($ins) === true ? "Datos insertados <br>" : "Error: " . $connect->error;
    }
}

?>