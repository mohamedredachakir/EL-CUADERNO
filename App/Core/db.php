<?php

class Database {
    private $host = "localhost";
    private $db_name = "el_cuaderno";
    private $user_name = "root";
    private $password = "197170";
    private $conn = null;
    
    public function getconnection(){
        if($this->conn === null){
            try{
                $this->conn = new PDO(
                    "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=utf8mb4",
                    $this->user_name,$this->password
                );
            }catch(PDOException $e){
                echo "connection failed" . $e->getMessage();
            }
        }
        return $this->conn;
    }
}