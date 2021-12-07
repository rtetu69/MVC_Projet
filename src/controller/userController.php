<?php
    namespace App\controller;


use App\repository\UserRepository;

class userController{

    private $userRepository;

    function __construct(){
        $this->userRepository = new userRepository();

    }
        function create(){
            if ('POST' === $_SERVER['REQUEST_METHOD']) {
                $this->userRepository->create($_POST);
            }
        }

        function GetUser(){
            $userRepository = new userRepository();
            //$userRepository->get($id);
        }

        function DeleteUser(){
            $userRepository = new userRepository();
            //$user = $userRepository->get($id);
        }

        function connectUser(){ 

            $userRepository = new userRepository();

            $mail = isset($_POST['mail']) ? ($_POST['mail']) : '';
            $mdp =  isset($_POST['mdp']) ? ($_POST['mdp']) : '';
            $msg = ' ';
            if (count($_POST) == 0)
                require "./vue/PageConnexion.tpl";
            else {
                require("./model/inscriptionBD.php");
                $profil = array();
                if (!$userRepository->connexionUser($mail, $mdp)) {
         
                    $msg = "erreur de saisie, l'email ou le mot de passe est incorrecte";
                    require("./vue/pageConnexion.tpl");
                } else {
                    $_SESSION['profil'] = $profil;
                    require("./vue/pageUser.tpl");
                    
                  }
            }
        }

    }

?>