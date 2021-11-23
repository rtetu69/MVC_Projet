<?php

namespace App;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;

        if(isset($_GET['action'])){
            switch ($action):
            case 'article':
                require_once 'vue/articleView.php';
            endswitch;

        }else{
            require_once 'vue/connexion.php';
        }
    }
}