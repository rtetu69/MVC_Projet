<?php
    namespace App\controller;

use App\model\User;
use App\repository\UserRepository;

class userController{

        function create(){
            $user = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp']);

            $userRepository = new userRepository();
            $userRepository->create($user);
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