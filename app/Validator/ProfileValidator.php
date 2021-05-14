<?php namespace App\Validator;

use App\Controllers\AbstractController;
use App\Models\UserModel;

class ProfileValidator{
    static function editValidator($info, $fields_name){
        $valid = true;
        $i = 0;

        foreach ($info as $f) { 
            if($valid){ 
                if(UserValidator::userValidator($f, $fields_name[$i])){
                    if($fields_name[$i] == "username" || $fields_name[$i] == "email"){
                        if($fields_name[$i] == "username"){
                            $valid = UserModel::usernameExists($f)->fetch(\PDO::FETCH_ASSOC) ? false : true;
                        }
                        else if($valid == true){
                            $valid = UserModel::emailExists($f)->fetch(\PDO::FETCH_ASSOC) ? false : true;
                        }
                    }
                    else $valid = true;
                }
                else $valid = false;
            }
            
            $i++;
        }        

        return $valid;
    }

    static function changePasswordValidator($request){
        $valid = false;

        if(AbstractController::fieldsAreSet($request)){
            $result = UserModel::getUserPassword($_SESSION['user']['username']);
            $pass = $result->fetch(\PDO::FETCH_ASSOC);

            if($pass['password'] != $request){
                $valid = password_verify($request['actual_password'], $pass['password']) ? true : false;
            }
        }

        return $valid;
    }

    static function deleteValidator($checkbox){
        return isset($checkbox['delete_checkbox']) ? true : false;
    }
}

?>