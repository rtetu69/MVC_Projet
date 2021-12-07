<?php
    namespace App\controller;
    use App\vue\Vue;
    use App\repository\UserRepository;

class userController{

    private $userRepository;
    private $vue;

    function __construct(){
        $this->userRepository = new userRepository();
        $this->vue = new Vue();

    }

    function create(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->create($_POST);
        }
        $this->vue->render('/user/espaceClient', ['nom'=>'sebbah', 'prenom'=>'karim']);
    }


    function connectUser(){ 

        $userRepository = new userRepository();

        $mail = isset($_POST['mail']) ? ($_POST['mail']) : '';
        $mdp =  isset($_POST['mdp']) ? ($_POST['mdp']) : '';
        $msg = ' ';
        if (count($_POST) == 0)
        $this->vue->render('/user/connexion', ['msg'=>$msg]);
        else {
            $profil = array();
            if (!$userRepository->connexionUser($mail, $mdp, $profil)) {
                $msg = "erreur de saisie, l'email ou le mot de passe est incorrecte";
                $this->vue->render('/user/connexion', ['msg'=>$msg]);
            } else {
                $_SESSION['profil'] = $profil;
                $this->vue->render('/user/espaceClient', ['nom'=>'sebbah', 'prenom'=>'karim']);
                    
            }
        }
    }

}

?>