<?php namespace App\Models;

use App\Libs\Model;

class TaskModel extends Model{
    static function getAllUserTasks($id){
        $sql = parent::doSql('SELECT * FROM tasks WHERE user_id = :id');
        $sql->bindParam(':id', $id);
        $sql->execute();

        return $sql;
    }

    static function createTasks($task_info, $id){
        $sql = parent::doSql('INSERT INTO tasks(user_id, name, description) VALUES (:id, :n, :d)');
        $sql->bindParam(':n', $task_info['name']);
        $sql->bindParam(':d', $task_info['description']);
        $sql->bindParam(':id', $id);
        $sql->execute();
    }
    
    static function updateTasks($task_info){
        $sql = parent::doSql('UPDATE tasks SET name = :n, description = :d WHERE id = :id');
        $sql->bindParam(':n', $task_info['name']);
        $sql->bindParam(':d', $task_info['description']);
        $sql->bindParam(':id', $task_info['id']);
        $sql->execute();
    }

    static function deleteTasks($task_info){
        $task_info['user_id'] = intval($task_info['user_id']);

        if($task_info['user_id'] == $_SESSION['user']['id']){
            $sql = parent::doSql('DELETE FROM tasks WHERE id = :id');
            $sql->bindParam(':id', $task_info['id']);
            $sql->execute();
        }
    }
    
    static function deleteAllTasks($id){
        $sql = parent::doSql('DELETE FROM tasks WHERE user_id = :id');
        $sql->bindParam(':id', $id);
        $sql->execute();
    }
}

?>