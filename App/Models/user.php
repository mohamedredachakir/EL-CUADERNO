<?php

namespace App\Models;

use PDO;
 class User {
    protected $conn;
    protected $table = "users";

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $role;
    public $active;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    // public function findByEmail($email){
    //     $sql = "SELECT * FROM {$this->table} WHERE email = :email LIMIT 1";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':email' , $email);
    //     $stmt->execute();

    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }
    // public function create(){
    //     $sql = "INSERT INTO {$this->table}
    //     (first_name,last_name,email,passowrd)
    //     VALUES (:first_name,:last_name,:email,:password)";
    //     $stmt = $this->conn->prepare($sql);
    //     $this->password = password_hash($this->password, PASSWORD_DEFAULT);

    //     $stmt->bindParam(':first_name', $this->first_name);
    //     $stmt->bindParam(':last_name', $this->last_name);
    //     $stmt->bindParam(':email', $this->email);
    //     $stmt->bindParam(':password', $this->password);
        

    //     return $stmt->execute();
    // }
    
}