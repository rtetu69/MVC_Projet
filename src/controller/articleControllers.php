<?php

namespace App\controller;

use App\model\Article;
use App\repository\ArticleRepository;

class ArticleControllers
{
    function readArticle(int $id){
        var_dump('readArticle');
        $articleRepo = new ArticleRepository();
        $article = $articleRepo->read($id);

        require '../vue/articleView.php';
    }




    function createArticle(){
        var_dump('createArticle');

        $article = new Article($_POST['nom'], $_POST['prix']);

        $articleRepo = new ArticleRepository();
        $articleRepo->create($article);

        //on appelle notre vue
        require '../vue/articleView.php';
    }
}