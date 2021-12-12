<?php

namespace App;

use App\controller\UserController;
use App\controller\ArticleControllers;


class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;

        if('userController'==$route && $action){
            if(isset($_GET['route'])){
                if ('userController' == $route && $action) {
                    if ('createUser' == $action) {
                        return (new UserController())->create();
                    }
                    if('connectUser' == $action){   
                        return (new UserController())->connectUser();
                    }
                    if('update' == $action){   
                        return (new UserController())->update();
                    }
                    if('delete' == $action){   
                        return (new UserController())->delete();
                    }
                    if('read' == $action){   
                        return (new UserController())->read();
                    }
                }
            }
        }
        else{
            require_once 'vue/accueil.php';
        }

        if (isset($_GET['route'])) {
            if ('articleControllers' === $route && $action) {
                $articleController = new ArticleControllers();
                if ('createArticle' === $action) {
                    return $articleController->createArticle();
                } elseif ('read' === $action && isset($_GET['id'])) {
                    return $articleController->readArticle($_GET['id']);
                }elseif ('getView' === $action) {
                    return $articleController->getView();
                }/* elseif ('update' === $action && isset($_GET['id'])) {
                    return $articleController->update($_GET['id']);
                }*/
            }
        }
        else{
            require_once 'vue/accueil.php';
        }
        
    }
}