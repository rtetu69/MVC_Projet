<?php

namespace App\repository;

use App\Database;
use App\model\Article;
use DateTime;

date_default_timezone_set("Europe/Paris");

class ArticleRepository extends database
{

    public function create($article){
        $db = new Database();
        $connection = $db->getConnection();
        $date = new DateTime();

        $request = $connection->prepare('INSERT INTO articles(nom, prix, createdAt) VALUES(:nom, :prix, :createdAt)');
        
        $request->bindParam(':nom', $article['nomArticle']);
        $request->bindParam(':prix', $article['prixArticle']);
        $request->bindParam(':createdAt', $date);

        $result = $request->execute();
        
        return $result;
    }

    public function read(int $id){
        $this->getArticle($id);
    }



    public function getArticle($articleId){
        $sql = 'SELECT * FROM articles WHERE id =:articleId';

        $result = $this->createQuery($sql, ['articleId' => $articleId]);

        return $this->buildObject($result);
    }




    public static function getArticles(){
        $db = new Database();
        $connection = $db->getConnection();
        $sql ="SELECT * FROM articles";
        $result = $connection->query($sql);

        return $result;
    }

    private function buildObject($tab){

        $createdAt = new DateTime($tab['createdAt']);

        $article = new Article($tab['articleId'], $tab['nom'], $tab['prix'], $createdAt);
    }
}