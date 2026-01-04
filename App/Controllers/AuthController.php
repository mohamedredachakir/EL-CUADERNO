<?php

namespace App\Controllers;
use App\Models\User;
class AuthController {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    

    public function showregister(){
        require_once __DIR__ . '/../Views/Auth/register.php';
    }
    public function showlogin(){
        require_once __DIR__ . '/../Views/Auth/login.php';
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header('Location: /register');
            exit();
        }
        $user = new User($this->conn);

        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        

        if($user->create()){
            header('Location: /login');
            exit();
        }
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header('Location: /login');
            exit();
        } 

   

        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = new User($this->conn);
        $user = $userModel->findByEmail($email);

        if($user && password_verify($password,$user['passowrd'])){
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['first_name'],
                'role' => $user['role']
            ];
            header('Location: /');
            exit();
        }

    }
    public function logout(){
        session_destroy();
        header ('Location: /');
        exit();
    }
}