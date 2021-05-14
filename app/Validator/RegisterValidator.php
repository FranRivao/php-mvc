<?php namespace App\Validator;

use App\Models\UserModel;
use App\Controllers\AbstractController;

class RegisterValidator{
    static function validator($info, $fields_name){
        if(AbstractController::fieldsAreSet($info)){  
            $valid = true;
            $i = 0;

            foreach($info as $f){
                if($valid){ 
                    if($fields_name[$i] == "password_repeat"){
                        UserValidator::userValidator($f, $fields_name[$i], $info['password']) ? true : false;
                    }
                    else if(UserValidator::userValidator($f, $fields_name[$i])){
                        
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
        }
        else $valid = false;
        
        return $valid;
    }
}

?>