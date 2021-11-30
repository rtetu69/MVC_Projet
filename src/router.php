<?php

namespace App;

use App\controller\ArticleControllers;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;

        if(isset($_GET['action'])){
            switch ($action):
            case 'article':
                return (new ArticleControllers())->readArticle(1);
            endswitch;

        }else{
            require_once 'vue/accueil.php';
        }
    }
}