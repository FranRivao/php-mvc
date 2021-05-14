<?php namespace App\Models;

use App\Controllers\AbstractController;
use App\Libs\Model;

class UserModel extends Model{
    // Save

    static function saveUser($registerInfo){
        $sql = parent::doSql('INSERT INTO users(username, name, surname, password, email) VALUES (:u, :n, :s, :p, :e)');
        $params = [
            'u' => $registerInfo['username'],
            'n' => $registerInfo['name'],
            's' => $registerInfo['surname'],
            'p' => $registerInfo['password'],
            'e' => $registerInfo['email']
        ];
        $sql->execute($params);
    }

    // End Save

    // Update

    static function updateUsername($username, $id){
        if($id == $_SESSION['user']['id'] || $_SESSION['user']['role'] == 2){
            $sql = parent::doSql('UPDATE users SET username = :username WHERE id = :id');
            $sql->execute(['username' => $username, 'id' => $id]);
        }
    }

    static function updateName($name, $id){
        if($id == $_SESSION['user']['id'] || $_SESSION['user']['role'] == 2){
            $sql = parent::doSql('UPDATE users SET name = :name WHERE id = :id');
            $sql->execute(['name' => $name, 'id' => $id]);
        }
    }

    static function updateSurname($surname, $id){
        if($id == $_SESSION['user']['id'] || $_SESSION['user']['role'] == 2){
            $sql = parent::doSql('UPDATE users SET surname = :surname WHERE id = :id');
            $sql->execute(['surname' => $surname, 'id' => $id]);
        }
    }

    static function updatePassword($password, $id){
        if($id == $_SESSION['user']['id'] || $_SESSION['user']['role'] == 2){
            $password = AbstractController::hash_password($password);
            $sql = parent::doSql('UPDATE users SET password = :password WHERE id = :id');
            $sql->execute(['password' => $password, 'id' => $id]);
        }
    }

    static function updateEmail($email, $id){
        if($id == $_SESSION['user']['id'] || $_SESSION['user']['role'] == 2){
            $sql = parent::doSql('UPDATE users SET email = :email WHERE id = :id');
            $sql->execute(['email' => $email, 'id' => $id]);
        }
    }

    // End Update

    // Delete
    
    static function deleteUser($id) : object {
        if($id == $_SESSION['user']['id'] || $_SESSION['user']['role'] == 2){
            $sql = parent::doSql('DELETE FROM users WHERE id = :id');
            $sql->execute(['id' => $id]);
    
            return $sql;
        }
    }

    // End Delete

    // Select

    static function getUserById($id) : object {
        $sql = parent::doSql('SELECT * FROM users WHERE id = :id');
        $sql->execute(['id' => $id]);

        return $sql;
    }

    static function getUserByUsername($username) : object {
        $sql = parent::doSql('SELECT * FROM users WHERE username = :username');
        $sql->execute(['username' => $username]);

        return $sql;
    }

    static function getUserByEmail($email) : object {
        $sql = parent::doSql('SELECT * FROM users WHERE email = :email');
        $sql->execute(['email' => $email]);

        return $sql;
    }

    static function usernameExists($username) : object {
        $sql = parent::doSql('SELECT username FROM users WHERE username = :username');
        $sql->execute(['username' => $username]);

        return $sql;
    }

    static function emailExists($email) : object {
        $sql = parent::doSql('SELECT email FROM users WHERE email = :email');
        $sql->execute(['email' => $email]);

        return $sql;
    }

    static function getUserPassword($username) : object {
        $sql = parent::doSql('SELECT password FROM users WHERE username = :username');
        $sql->execute(['username' => $username]);

        return $sql;
    }
    
    static function getUsersForPagination($p, $n) : object {
        $sql = parent::doSql("SELECT * FROM users LIMIT $p, $n");
        $sql->execute();

        return $sql;
    }

    static function getAmountUsers() : object {
        $sql = parent::doSql('SELECT COUNT(*) AS amount FROM users');
        $sql->execute();
    
        return $sql;
    }
    
    static function getUserLike($like) : object {
        $sql = parent::doSql('SELECT * FROM users WHERE username LIKE :like');
        $sql->execute(['like' => $like]);
    
        return $sql;

    }

    // End Select
}

?>