<?php

namespace App\Controllers;

use App\Models\Categorie;
use Database;
use PDO;
class CategoryController{
    protected $table = "categories";

     private function checkauth() {
        if(!isset($_SESSION['user'])){
            header('Location: /login');
            exit();
        };
    }

    private function checkadmin() {
        if($_SESSION['user']['role'] !== 'admin'){
            header('Location: /');
            exit();
        }
    }

    private function create($caterory){

        $conn = Database::getconnection();
        $sql = "INSER INTO {$this->table}
        (name) VALUE (:name)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name',$caterory->name);
    }

    public function addcategory(){
        if($_SERVER['REQUEST_METHOD']!== 'POST'){
            header('Location: /');
        };
        $this->checkauth();
        $this->checkadmin();
        $caterory = new Categorie();
        $caterory->name = $_POST['name'];

        if($this->create($caterory)){

        };
    }

    public function editcategory(){
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){

        }

        $this->checkauth();
        $this->checkadmin();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $conn = Database::getconnection();
        $sql = "UPDATE {$this->table}
        SET name = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if($stmt->execute($id,$name)){

        };
    }

    public function deletecategory(){
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){

        }
        $this->checkauth();
        $this->checkadmin();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $conn = Database::getconnection();
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if($stmt->execute($id,$name)){

        };

    }

    private function getall(){
        $conn = Database::getconnection();
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $conn->query($sql);
        $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showallcategory(){
        $this->checkauth();
        $this->checkadmin();
        $category = $this->getall();
        require_once __DIR__ . '/../Views/';
    }
}
