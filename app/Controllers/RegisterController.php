<?php namespace App\Controllers;

use App\Libs\View;
use App\Models\UserModel;
use App\Validator\RegisterValidator;

final class RegisterController{
    const FIELDS_NAME = ['name', 'surname', 'username', 'email', 'password', 'password_repeat'];

    static function index(){
        View::route('register/index');
    }

    static function validate(){
        $url = array_shift($_REQUEST);

        $_REQUEST = AbstractController::defaultCleanFields($_REQUEST);

        if(RegisterValidator::validator($_REQUEST, self::FIELDS_NAME)){
            $_REQUEST['password'] = AbstractController::hash_password($_REQUEST['password']);
            
            UserModel::saveUser($_REQUEST);
            AbstractController::login($_REQUEST);

            AbstractController::redirect('home');
        }

        AbstractController::insertScript('alerts/register_error'); 
    }
}

?>