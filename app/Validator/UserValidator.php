<?php namespace App\Validator;

use App\Controllers\AbstractController;
use App\Libs\RegExpressions;

class UserValidator{
    static function userValidator($string, $field, $password = null){
        if($password != null){
            return $password == $string ? true : false;
        }
        else{
            $regExpFunction = "get" . ucfirst($field) . "RegExp";
            $regExp = RegExpressions::$regExpFunction();
    
            return is_string($string) && AbstractController::validateCharacters($string, $regExp) ? true : false;
        }
    }
}

?>