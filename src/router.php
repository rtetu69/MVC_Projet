<?php

namespace App;

class Router
{
    public function run()
    {
        if(isset($_GET['action'])){
            $action = $_GET['action'];

        }else{
            require_once 'vue/accueil.php';
        }
    }
}