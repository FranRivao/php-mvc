<?php namespace App\Controllers;

use App\Libs\View;
use App\Models\UserModel;
use App\Models\TaskModel;
use App\Validator\ProfileValidator;
use PDO;

final class ProfileController{
    const FIELDS_NAME = ['username', 'name', 'surname', 'email'];

    static function index(){
        View::route('profile/index');
    }

    static function edit(){
        $url = array_shift($_REQUEST);
        $checkbox = array_pop($_REQUEST);
        
        $i = 0;
        $fields_changed = [];
        $fields_name = [];
        
        if(AbstractController::fieldsAreSet($_REQUEST)){
            AbstractController::defaultCleanFields($_REQUEST);
            
            foreach ($_REQUEST as $f) {
                if($f != $_SESSION['user'][self::FIELDS_NAME[$i]]){
                    array_push($fields_changed, $f);
                    array_push($fields_name, self::FIELDS_NAME[$i]);
                }   
    
                $i++;
            }

            if(ProfileValidator::editValidator($fields_changed, $fields_name)){
                $i = 0;

                foreach ($fields_name as $field_name) {
                    $func = 'update' . $field_name;
                    UserModel::$func($fields_changed[$i], $_SESSION['user']['id']);

                    $_SESSION['user'][$field_name] = $fields_changed[$i];

                    $i++;
                }

                AbstractController::redirect('profile');
            }
            else{
                AbstractController::insertScript('alerts/profile_error');
            }
        }
    }
    
    static function changePassword(){
        $url = array_shift($_REQUEST);
        $checkbox = array_pop($_REQUEST);

        if(ProfileValidator::changePasswordValidator($_REQUEST)){
            UserModel::updatePassword($_REQUEST['new_password'], $_SESSION['user']['id']);
            AbstractController::redirect('logout');
        }
        else{
            AbstractController::insertScript('alerts/password_error');
        }
    }

    static function delete(){
        $url = array_shift($_REQUEST);
        
        if(ProfileValidator::deleteValidator($_REQUEST)){
            TaskModel::deleteAllTasks($_SESSION['user']['id']);
            UserModel::deleteUser($_SESSION['user']['id']);
            AbstractController::redirect('logout');
        }
        else{
            AbstractController::insertScript('alerts/profile_error');
        }
    }
}

?>