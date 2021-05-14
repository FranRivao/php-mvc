<?php namespace App\Fakers;

use App\Libs\Model;
use App\Models\UserModel;
use PDO;

class UserFaker extends Model{
    static function faker(){
        $r['name'] = "jose";
        $r['surname'] = "alberto";
        $r['password'] = "josealberto";
        
        $r['password'] = password_hash($r['password'], PASSWORD_DEFAULT);
        
        for($f = 0; $f < 15; $f++){
            $num = rand(5, 1243);

            $r['username'] = "jose_" . "$num";
            $r['email'] = "jose" . "$num" . "@gmail.com";
        
            UserModel::saveUser($r);
        }

        echo "USUARIOS CREADOS";
    }
}


?>