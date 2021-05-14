<?php namespace App\Controllers;

use App\Libs\View;

final class ErrorController{
    static function index(){
        View::route('error/index');
    }
}

?>