<?php namespace App\Validator;

use App\Models\UserModel;

class LoginValidator{
    static function validator($info){
        $valid = false;

        if(UserModel::usernameExists($info['username'])->rowCount() == 1){
            $result = UserModel::getUserPassword($info['username']);
            $pass = $result->fetch(\PDO::FETCH_ASSOC);

            if(password_verify($info['password'], $pass['password'])){
                $userModel = UserModel::getUserByUsername($info['username']);
                $_SESSION['user'] = $userModel->fetch(\PDO::FETCH_ASSOC);
                $valid = true;
            }
        }

        return $valid;
    }
}

?>