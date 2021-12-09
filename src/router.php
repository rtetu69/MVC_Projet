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

        var_dump($route);
        var_dump($action);

        if(isset($_GET['route'])){
            if ('userController' == $route && $action) {
                var_dump('test 2');
                if ('createUser' == $action) {
                    var_dump('test 3');
                    //die;
                    return (new UserController())->create();
                }
                if ('connectUser' == $action) {
                    var_dump('test 4');
                    //die;
                    return (new UserController())->connectUser();
                }
                if ('update' == $action) {
                    var_dump('test 4');
                    //die;
                    return (new UserController())->update();
                }
            }
        }else{
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
        }else{
            require_once 'vue/accueil.php';
        }
    }
}