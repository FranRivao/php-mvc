<?php namespace App\Libs;

use App\Libs\Database;

class Model{
    protected static function doSql($sql){
        $db = new Database;
        return $db->connect()->prepare($sql);
    }
}

?>