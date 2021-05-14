<?php namespace App\Controllers;

use App\Libs\View;
use App\Validator\LoginValidator;

final class LoginController{
    static function index(){
        View::route('login/index');
    }

    static function validate(){
        $url = array_shift($_REQUEST);
        $valid = AbstractController::fieldsAreSet($_REQUEST) ? LoginValidator::validator($_REQUEST) : false;
        if($valid){
            echo "a";
            echo "
            <script>
                window.localStorage.setItem('session', '1');
            </script>";
            AbstractController::redirect('home');
        }
        else{
            AbstractController::insertScript('alerts/login_error');
        }
    }
}

?>