<?php namespace App\Validator;

use App\Controllers\AbstractController;
use App\Libs\RegExpressions;

class TaskValidator{
    static function taskValidator($string, $field){
        $regExpFunction = "getTask" . ucfirst($field) . "RegExp";
        $regExp = RegExpressions::$regExpFunction();

        return is_string($string) && AbstractController::validateCharacters($string, $regExp) ? true : false;
    }

    static function createValidator($info, $fields_name){
        if(AbstractController::fieldsAreSet($info)){
            $valid = true;
            $i = 0;
    
            foreach($info as $f){
                if($valid){
                    $valid = self::taskValidator($f, $fields_name[$i]) ? true : false;
                }
    
                $i++;
            }      
        }
        else $valid = false;

        return $valid;
    }

    static function editValidator($info, $fields_name){
        $valid = true;
        $fields_changed = [];
        $id = array_shift($info);
        $user_id = array_shift($info);
        
        if(AbstractController::fieldsAreSet($info)){
            $i = 0;

            foreach ($info as $f) {
                if($f != $info[$fields_name[$i]]){
                    array_push($fields_changed, $f);
                    array_push($fields_name, $fields_name[$i]);
                }   
    
                $i++;
            }

            $i = 0;

            foreach($info as $f){
                if($valid){
                    $valid = self::taskValidator($f, $fields_name[$i]) ? true : false;
                }
    
                $i++;
            }
        }
        else $valid = false;

        return $valid;
    }
}

?>