<?php

namespace App\repository;

use App\Database;
use App\model\Article as ModelArticle;
use DateTime;

date_default_timezone_set("Europe/Paris");

class ArticleRepository extends database
{

    public function create(array $articledata= []){
        $request = 'INSERT INTO articles(nom, prix, createdAt) VALUES(:nom, :prix, :createdAt)';

        $this->createQuery($request,[
                'nom'=> $articledata['nom'],
                'prix'=> $articledata['prix'],
                'createdAt'=> (new \DateTime())->format('Y-m-d H:i:s')
            ]
        );
    }

    public function getAllArticles(){
        $result = $this->createQuery('SELECT * FROM articles');
        var_dump($result->fetchAll());
        return $this->buildObject($result->fetchAll());
    }

    public function get(int $id)
    {
        $result = $this->createQuery(
            'SELECT * FROM  articles WHERE id = :id',
            ['id' => $id]
        );
        
        return $this->buildObject($result->fetch());
    }

    private function buildObject(array $row): ModelArticle
    {
        $article = new ModelArticle();
        $article->setNom($row['nom']);
        $article->setPrix($row['prix']);
        $article->setCreatedAt(new \DateTime($row['createdAt']));

        return $article;
    }
}