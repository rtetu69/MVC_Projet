<?php

namespace App;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;

        if(isset($_GET['action'])){
            $action = $_GET['action'];

        }else{
            require_once 'vue/connexion.php';
        }
    }
}