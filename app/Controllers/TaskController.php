<?php namespace App\Controllers;

use App\Libs\View;
use App\Models\TaskModel;
use App\Validator\TaskValidator;

final class TaskController{
    const FIELDS_NAME = ['name', 'description'];

    static function index(){
        View::route('task/index');
    }

    static function create(){
        $url = array_shift($_REQUEST);

        if(TaskValidator::createValidator($_REQUEST, self::FIELDS_NAME)){
            TaskModel::createTasks($_REQUEST, $_SESSION['user']['id']);
            AbstractController::redirect('task');
        }
        else{
            AbstractController::insertScript('alerts/task_error');
        }
    }

    static function edit(){
        $url = array_shift($_REQUEST);
        if(TaskValidator::editValidator($_REQUEST, self::FIELDS_NAME)){
            TaskModel::updateTasks($_REQUEST);
            AbstractController::redirect('task');
        }
        else{
            AbstractController::insertScript('alerts/task_error');
        }
    }

    static function delete(){
        $url = array_shift($_REQUEST);
        TaskModel::deleteTasks($_REQUEST);
        AbstractController::redirect('task');
    }

    static function showTasks(){
        $tasks = TaskModel::getAllUserTasks($_SESSION['user']['id']);

        if($tasks->rowCount() >= 1){
            foreach ($tasks as $t) {
                $id = $t['id'];
                $user_id = $t['user_id'];
                $name = $t['name'];
                $descr = $t['description'];

                require '../resources/views/task/show_tasks.php';
            }
        }
        else{
            require_once '../resources/views/task/no_tasks_card.php';
        }
    }
}

?>