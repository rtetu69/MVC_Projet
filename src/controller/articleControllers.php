<?php

namespace App\controller;

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
        $article = $this->articleRepository->get(2);
        $this->vue->render('./article/articleView', ['nom'=>$article->getNom(), 'prix'=>$article->getPrix(),  'createdAt'=>$article->getCreatedAt()]);
    }

    public function createArticle(){
        var_dump('createArticle');
        
        if('POST' === $_SERVER['REQUEST_METHOD'])
        {
           $this->articleRepository->create($_POST);
        }

        $this->vue->render('./article/articleView', ['nom'=>$_POST['nom'], 'prix'=>$_POST['prix']]);
    }

    public function readArticle($id)
    {
        $this->vue->render('./article/articleView', [
            $this->articleRepository->getAllArticles($id),
        ]);
    }

    public function deleteArticle(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->articleRepository->delete($_POST);
        }
        $this->vue->render('./article/articleView');
    }

    public function updateArticle(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $article = $this->articleRepository->buildArticleForUpdate($_POST);
            var_dump($_POST);
            $this->articleRepository->updateArticle($article);
            $articles = $this->articleRepository->get($_POST);
            
        }
        $this->vue->render('./article/articleView', ['nom'=>$articles->getNom(),'prix'=>$articles->getPrix(), 'createdAt'=>$articles->getCreatedAt()]);
    }
}