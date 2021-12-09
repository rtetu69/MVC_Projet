<?php

namespace App\controller;

use App\model\Article;
use App\repository\ArticleRepository;
use App\vue\Vue;

class ArticleControllers
{
    private ArticleRepository $articleRepository;
    private Vue $vue;

    public function __construct(){
        $this->articleRepository = new articleRepository();
        $this->vue = new Vue();
    }

    public function getView()
    {
        $article = $this->articleRepository->get(1);
        $this->vue->render('./article/articleView', ['nom'=>$article->getNom(), 'prix'=>$article->getPrix(),  'createdAt'=>$article->getCreatedAt()]);
    }

    public function createArticle(){
        var_dump('createArticle');
        
        if('POST' === $_SERVER['REQUEST_METHOD'])
        {
            $article = $this->articleRepository->create($_POST);
        }

        $article = $this->articleRepository->get(1);
        $this->vue->render('/article/articleView', ['nom'=>$article->getNom(), 'prix'=>$article->getPrix(),  'createdAt'=>$article->getCreatedAt()]);
    }

    public function readArticle(int $id)
    {
        $this->vue->render('./article/articleView', [
            'nom' => $this->articleRepository->getAllArticles($id),
        ]);
    }
}