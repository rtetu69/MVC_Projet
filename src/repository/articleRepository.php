<?php

namespace App\repository;

use App\Database;
use App\model\Article;

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

    public function get($id)
    {
        $result = $this->createQuery(
            'SELECT * FROM  articles WHERE id=:id',
            ['id' => $id]
        );
        
        return $this->buildObject($result->fetch());
    }

    public function delete($id){
        $sql ='DELETE FROM articles WHERE nom =:nom'; 
        $this->createQuery($sql, ['nom'=>$id['nom']]);
    }

    public function updateArticle($articledata){
        $sql ='UPDATE articles SET nom =:nom, prix =:prix, createdAt =:createdAt   WHERE id =:id'; 
        
        $this->createQuery($sql, [
            'nom'=> $articledata->getNom(),
            'prix'=> $articledata->getPrix(),
            'createdAt'=> $articledata->getCreatedAt()
        ]);
    }

    private function buildObject($row)
    {
        $article = new Article();
        $article->setNom($row['nom']);
        $article->setPrix($row['prix']);
        $article->setCreatedAt(new \DateTime($row['createdAt']));

        return $article;
    }

    public function buildArticleForUpdate($tab){
        $article = new Article();

        $article->setNom($tab['nom']);
        $article->setPrix($tab['prix']);
        $article->setCreatedAt($tab['createdAt']);

        return $article;
    }
}