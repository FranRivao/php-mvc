<?php namespace App\Libs;

class RegExpressions{
    static function getUsernameRegExp(){
        return "/^[a-zA-z0-9\-\_]{4,16}$/";
    }

    static function getNameRegExp(){
        return "/^[a-zA-z ]{1,30}$/";
    }

    static function getSurnameRegExp(){
        return "/^[a-zA-z ]{1,30}$/";
    }

    static function getPasswordRegExp(){
        return "/^[a-zA-z0-9\-_*&^%$#@!]{8,64}$/";
    }

    static function getEmailRegExp(){
        return "/^[a-zA-Z0-9\._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/";
    }
    
    static function getTaskNameRegExp(){
        return "/^[a-zA-z0-9\-_()\,\.\/: ]{1,21}$/";
    }

    static function getTaskDescriptionRegExp(){
        return "/^[a-zA-z0-9]+[a-zA-z0-9\-_\.\,\/*&^%$#@!:()\n\r ]{1,400}$/";
    }
}

?>