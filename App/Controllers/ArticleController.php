<?php

namespace App\Controllers;
use App\Models\Article;

class ArticleController {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function showarticles() {
        require_once __DIR__ . '/../Views/Articles/allArticle.php';
    }
    public function  showeditarticle(){
        require_once __DIR__ . '/../Views/Articles/editArticle.php';
    }
    public function showaddarticle(){
        require_once __DIR__ . '/../Views/Articles/addArticle.php';
    }
    public function createarticle() {
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header('Location: /createarticle');
            exit();
        }
        $article = new Article($this->conn);

        $article->id_user = $_SESSION['user']['id'];
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];

        if($article->createArticle()){
            header('Location: /articles');
            exit();
        }
    }
    public function editarticle() {
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header('Location: /editarticle');
            exit();
        }
        
    }
    public function  deletearticle() {
        
    }
}