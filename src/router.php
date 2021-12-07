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

            if('userController'==$route && $action){
                var_dump('test 2');
                if('createUser' == $action){   
                    var_dump('test 3');
                    //die;
                    return (new UserController())->create();
                  
                }
                if('connectUser' == $action){   
                    var_dump('test 4');
                    //die;
                    return (new UserController())->connectUser();

                }
            }

            if(isset($_GET['action'])){
                switch ($action):
                case 'article':
                    require_once 'vue/articleView.php';
                endswitch;
            }

            else{
                require_once 'vue/user/inscription.php';
            }
        
       
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