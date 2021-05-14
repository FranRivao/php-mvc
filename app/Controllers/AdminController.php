<?php namespace App\Controllers;

use App\Libs\View;
use App\Models\TaskModel;
use App\Models\UserModel;
use PDO;

final class AdminController{
    static function index(){
        View::route('admin/index');
    }

    static function deleteUser(){
        TaskModel::deleteAllTasks($_REQUEST['id']);
        UserModel::deleteUser($_REQUEST['id']);
        AbstractController::redirect('admin?page=' . $_GET['page']);
    }

    static function editUser(){
        
    }

    static function search(){
        $r = UserModel::getUserLike($_REQUEST['search']);
        $r = $r->fetch(PDO::FETCH_ASSOC);

        require_once '../resources/views/admin/table_row.php';
    }
}

?>