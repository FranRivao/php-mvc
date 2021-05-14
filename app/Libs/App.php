<?php namespace App\Libs;

use App\Controllers\AbstractController;
use App\Controllers\HomeController;
use App\Controllers\ErrorController;

class App{
    function __construct(){
        session_start();
        $url = $_GET['url'] ?? null;
        $url = explode('/', rtrim($url, '/'));

        $controllerFile = '../app/Controllers/' . ucfirst($url[0]) . 'Controller.php';

        if(empty($url[0])){
            AbstractController::setTitle('home');
            HomeController::index();
        }
        else if(file_exists($controllerFile) && $url[0] != 'error' && $url[0] != 'abstract'){
            if(($url[0] == 'login' || $url[0] == 'register') && isset($_SESSION['user'])){
                AbstractController::redirect('home');
            }
            else if(($url[0] == 'profile' || $url[0] == 'task' || $url[0] == 'logout') && !isset($_SESSION['user'])){
                AbstractController::redirect('home');
            }
            else if($url[0] == 'admin'){
                if(isset($_SESSION['user'])){
                    $_SESSION['user']['role'] == 2 ? AbstractController::redirect('home') : null;
                }
                else{
                    AbstractController::redirect('home');
                }
            }
            
            AbstractController::setTitle($url[0]);
            $controller = 'App\Controllers\\' . ucfirst($url[0]) . 'Controller';

            $c = new $controller;
            $c->index();

            $nparam = sizeof($url);

            if($nparam > 1){
                $c->{$url[1]}();

                if($nparam > 2){
                    $param = [];

                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }

                    $c->{$url[1]}($param);
                }
                else if(method_exists($url[1], $url[1]) && $nparam != 1){
                    $c->{$url[0]}();
                }
            }
        }
        else{
            AbstractController::setTitle('error');
            ErrorController::index();
        }
    }
}

?>