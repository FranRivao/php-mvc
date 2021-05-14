<?php namespace App\Controllers;

use App\Libs\View;

final class HomeController{
    static function index(){
        View::route('home/index');
    }
}

?>