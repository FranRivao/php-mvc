<?php namespace App\Controllers;

use App\Libs\Database;
use App\Models\UserModel;

class AbstractController{
    // TITLE
    static function setTitle($title){ 
        echo "<title>" . constant('APP_NAME') . " - " . ucfirst($title) . "</title>"; 
    }

    // REDIRECT
    static function redirect($location){
        $finalLocation = constant('APP_URL') . $location;
        echo "<script> window.location.replace('$finalLocation'); </script>";
    }

    // INSERTS A SCRIPT
    static function insertScript($loc){
        $loc = explode('/index', $loc);
        $js = array_shift($loc);
        $file = "js/$js.js";
        $script_src = constant('APP_URL') . "js/$js.js";

        $module_scripts = [
            'register', 
            'login',
            'profile',
            'task',
            'admin',
            'functions',
            'alerts/login_error', 
            'alerts/register_error',  
            'alerts/pagination_error',
            'alerts/password_error',
            'alerts/logout_success',
            'alerts/profile_error',
            'alerts/task_error'
        ];
        
        if(file_exists($file)){
            foreach ($module_scripts as $s){
                if($js == $s){
                    echo "<script type='module' src='$script_src'></script>";
                    return null;
                }
                else{
                    $script = "<script src='$script_src'></script>";
                }
            }

            echo $script;
        }
    }
    
    // FIELDS

    static function hash_password($p){
        return password_hash($p, PASSWORD_DEFAULT);   
    }
    
    static function clean($string, $replace = null, $replacement = null){
        $string = trim($string);

        return $replace != null && $replacement != null ? str_replace($replace, $replacement, $string) : $string;
    }
    
    static function upperFirst($string){
        return ucfirst($string);
    }

    static function validateCharacters($string, $regExp){
        return preg_match($regExp, $string) ? true : false;
    }
    
    static function fieldsAreSet($array){
        $areSet = true;

        foreach($array as $arr){
            $areSet = (!empty($arr) && $areSet == true) ? true : false;
        }

        return $areSet;
    }

    static function defaultCleanFields($fields){
        $fields['username'] = AbstractController::clean($fields['username'], " ", "_");
            
        $fields['name'] = AbstractController::clean($fields['name']);
        $fields['name'] = AbstractController::upperFirst($fields['name']);

        $fields['surname'] = AbstractController::clean($fields['surname']);
        $fields['surname'] = AbstractController::upperFirst($fields['surname']);

        $fields['email'] = AbstractController::clean($fields['email']);

        return $fields;
    }

    // END FIELDS

    static function login($info){
        $_SESSION['user'] = UserModel::getUserByUsername($info['username'])->fetch(\PDO::FETCH_ASSOC);
    }
}
