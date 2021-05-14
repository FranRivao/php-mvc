<?php namespace App\Controllers;

use App\Controllers\AbstractController;

final class LogoutController{
    function __construct(){
        echo "
        <script>
            window.localStorage.removeItem('session');
        </script>";
        
        session_unset();
        session_destroy();

        // COOKIE FOR AFTER LOGOUT ALERT
        setcookie("logout", "true", time()+2);

        
        AbstractController::redirect('home');
    }
}

?>