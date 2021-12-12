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

                if('createUser' == $action){   

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